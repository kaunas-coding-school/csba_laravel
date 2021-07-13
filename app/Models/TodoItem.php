<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property string $title
 * @property string $description
 * @property string $status
 */
class TodoItem extends Model
{
    use HasFactory;

    protected $table = 'toto_items';

    protected $guarded = [];

    public const STATE_NEW = 'new';
    public const STATE_READY = 'ready';
    public const STATE_DONE = 'done';

    public const STATES = [
        self::STATE_NEW,
        self::STATE_READY,
        self::STATE_DONE,
    ];
}
