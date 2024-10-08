<?php

namespace App\Models;

use App\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignatureHistory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['signature_id', 'last_updated', 'last_plan_id', 'last_status'];
    protected function casts(): array
    {
        return [
            'last_status' => SignatureStatus::class
        ];
    }

    public function signature()
    {
        return $this->belongsTo(Signature::class);
    }
}
