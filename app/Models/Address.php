<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $country
 * @property string $city
 * @property string $post_code
 * @property string $street
 * @property string $house
 * @property string $lat
 */
class Address extends Model
 {
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
