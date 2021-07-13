<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 * @property string $message
 */
class ContactMessage extends Model
{
    use HasFactory;

    protected $guarded = [];
}
