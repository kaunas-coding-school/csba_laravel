<?php

namespace App\Services;

class ModifyString
{
    public function modify(mixed $msg): string
    {
        return $msg . ' [EXTRA TEXT]';
    }
}
