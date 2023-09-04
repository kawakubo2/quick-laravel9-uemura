<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['isbn', 'title', 'price', 'publisher', 'published'];

    public static $rules = [
        'isbn' => ['required', 'regex:/^978-4-[0-9]{2,6}-[0-9]{2,6}-[0-9]$/'],
        'title' => ['required', 'string', 'max:100'],
        'price' => ['integer' ,'min:0'],
        'publisher' => ['required', 'max:100'],
        'published' => ['required', 'date']
    ];

}
