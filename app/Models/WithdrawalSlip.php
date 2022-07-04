<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class WithdrawalSlip extends Model
{
    use UUID, HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
