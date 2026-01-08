<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriesModel extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    // Relasi: Category → Books
    public function books()
    {
        return $this->hasMany(BooksModel::class, 'categories_id');
    }
}