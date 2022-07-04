<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;
    protected $table = 'withdrawal_slips';
    protected $fillable = [
        'customer_name',
        'customer_date',
        'pallet_no',
        'document_series_no',
        'qr_no',
        'wh_location',
        'warehouse',
        'prepared_by',
        'approved_by',
        'release_by',
        'sales_admin',
        'wh_incharge',
        'status',
    ];
}
