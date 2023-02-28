<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'clients_name',
        'clients_number',
        'clients_Email',
    ];
    protected $casts = [
        'clients_Email_verified_at' => 'datetime',
    ];
}
