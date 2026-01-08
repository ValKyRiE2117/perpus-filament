<?php

namespace App\Observers;

use App\Models\BooksModel;
use App\Models\LoansModel;

class LoansObserver
{
    /**
     * Handle the LoansModel "created" event.
     */
    public function created(LoansModel $loan): void
    {
        // Decrease the stock of the associated book by 1 when a loan is created
        if ($loan->book_id) {
            $book = BooksModel::find($loan->book_id);
            if ($book && $book->stock > 0) {
                $book->decrement('stock');
            }
        }
    }

    /**
     * Handle the LoansModel "updated" event.
     */
    public function updated(LoansModel $loan): void
    {
        // Check if the status was changed
        if ($loan->isDirty('status')) {
            $originalStatus = $loan->getOriginal('status');
            $newStatus = $loan->status;

            if ($newStatus === 'returned' && $originalStatus === 'borrowed' && $loan->book_id) {
                // Loan was returned, increase the stock
                $book = BooksModel::find($loan->book_id);
                if ($book) {
                    $book->increment('stock');
                }
            } elseif ($newStatus === 'borrowed' && $originalStatus === 'returned' && $loan->book_id) {
                // Loan was changed back to borrowed, decrease the stock
                $book = BooksModel::find($loan->book_id);
                if ($book && $book->stock > 0) {
                    $book->decrement('stock');
                }
            }
        }
    }

    /**
     * Handle the LoansModel "deleted" event.
     */
    public function deleted(LoansModel $loan): void
    {
        // If the loan was borrowed (not returned), increase the stock back when deleted
        if ($loan->status === 'borrowed' && $loan->book_id) {
            $book = BooksModel::find($loan->book_id);
            if ($book) {
                $book->increment('stock');
            }
        }
    }
}