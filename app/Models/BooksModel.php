<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BooksModel extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'isbn',
        'title',
        'description',
        'categories_id',
        'author_id',
        'publisher',
        'published_year',
        'pages',
        'stock',
        'cover_images',
    ];

    // Relasi: Book → Author
    public function author()
    {
        return $this->belongsTo(AuthorsModel::class, 'author_id');
    }

    // Relasi: Book → Category
    public function category()
    {
        return $this->belongsTo(CategoriesModel::class, 'categories_id');
    }

    // Relasi: Book → Loans
    public function loans()
    {
        return $this->hasMany(LoansModel::class, 'book_id');
    }
}