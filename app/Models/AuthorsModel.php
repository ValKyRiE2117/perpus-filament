<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuthorsModel extends Model
{
    use HasFactory;

    protected $table = 'authors';

    protected $fillable = [
        'name',
        'biography',
        'nationality',
    ];

    // Relasi: Author → Books
    public function books()
    {
        return $this->hasMany(BooksModel::class, 'author_id');
    }
}