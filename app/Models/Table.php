<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'table';
    protected $fillable = [
        'id',
        'name',
        'age',
        'created_at',
        'updated_at'
    ];
}
