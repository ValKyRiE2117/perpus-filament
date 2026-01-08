<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MembersModel extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'gender',
    ];

    // Relasi: Member → Loans
    public function loans()
    {
        return $this->hasMany(LoansModel::class, 'members_id');
    }
}