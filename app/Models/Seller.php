<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'sellers';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'online',
        'queued_messages',
        'max_queued_messages',
    ];
}
