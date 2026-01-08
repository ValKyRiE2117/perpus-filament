<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\LoansObserver;

#[ObservedBy(LoansObserver::class)]
class LoansModel extends Model
{
    use HasFactory;

    protected $table = 'loans';

    protected $fillable = [
        'loan_code',
        'members_id',
        'book_id',
        'loan_date',
        'due_date',
        'return_date',
        'status',
    ];

    // Relasi: Loan → Member
    public function member()
    {
        return $this->belongsTo(MembersModel::class, 'members_id');
    }

    // Relasi: Loan → Book
    public function book()
    {
        return $this->belongsTo(BooksModel::class, 'book_id');
    }
}