<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'client_id',
        'signature_id',
        'status'
    ];

    protected function casts(): array
    {
        return [
            'status' => TransactionStatus::class
        ];
    }

    public function signature()
    {
        return $this->belongsTo(Signature::class);
    }
}
