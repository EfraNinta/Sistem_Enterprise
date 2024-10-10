<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Nama tabel yang terkait
    protected $table = 'departments';

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'name',
        'description',
    ];
}
