<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Services\ModifyString;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\ApiRequests;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use ApiRequests;
    use WithFaker;

    public function testContactStoreWithGetMethod()
    {
        $url = '/api/contact';

        $this->jsonGet($url, 405);
    }

    public function testContactStore()
    {
        $url = '/api/contact';
        $data = [
            'email'   => $this->faker->email,
            'name'    => $this->faker->name,
            'message' => $this->faker->sentence,
        ];

        $response = $this->jsonPost($url, $data, 201);

        foreach (array_keys($data) as $key) {
            self::assertSame($data[$key], $response[$key]);
        }
    }

    public function testContactStoreWithModifications()
    {
        $url = '/api/contact';
        $data = [
            'modifikuoti' => true,
            'email'       => $this->faker->email,
            'name'        => $this->faker->name,
            'message'     => $this->faker->sentence,
        ];

        $expectedMessage = $data['message'] . ' [EXTRA TEXT]';

        $response = $this->jsonPost($url, $data, 201);

        unset($data['modifikuoti']);

        self::assertSame($expectedMessage, $response['message']);
    }

    public function testShowContactMessage()
    {
        $newContactMessage = new ContactMessage(
            [
                'name'    => $this->faker()->name,
                'email'   => $this->faker()->email,
                'message' => $this->faker()->sentence,
            ]
        );
        $newContactMessage->save();

        $id = $newContactMessage->id;

        $url = route('gauti_zinute', [$id]);

        $response = $this->jsonGet($url);

        $array = $newContactMessage->toArray();
        foreach (array_keys($array) as $key) {
            self::assertSame($array[$key], $response[$key]);
        }

        $this->assertDatabaseHas('contact_messages', ['id' => $id]);
    }
}
