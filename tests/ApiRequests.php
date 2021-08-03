<?php

namespace Tests;

use Illuminate\Http\Response;

trait ApiRequests
{
    protected function jsonGet(string $path, int $expectedStatus = 200, ?array $headers = []): array
    {
        return $this->jsonRequest('GET', $path, [], $expectedStatus, $headers);
    }

    protected function jsonRequest(
        string $method,
        string $path,
        array $data,
        int $expectedStatus = 200,
        ?array $headers = []
    ): array {
        $headers = $headers ?? [];

        /** @var Response $response */
        $response = $this->json($method, $path, $data, $headers);

        self::assertEquals($expectedStatus, $response->status(), (string)$response->getContent());

        return $this->decodeBody((string)$response->getContent());
    }

    private function decodeBody(string $content): array
    {
        return json_decode($content, true, 512, JSON_THROW_ON_ERROR);
    }

    protected function jsonPost(string $path, array $data = [], int $expectedStatus = 200, ?array $headers = []): array
    {
        return $this->jsonRequest('POST', $path, $data, $expectedStatus, $headers);
    }

    protected function jsonPut(string $path, array $data = [], int $expectedStatus = 200, ?array $headers = []): array
    {
        return $this->jsonRequest('PUT', $path, $data, $expectedStatus, $headers);
    }
}
