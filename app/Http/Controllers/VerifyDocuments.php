<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WithdrawalSlip;

class VerifyDocuments extends Controller
{
    public function Verify_documents(Request $request)
    {
        $withdrawal_slip = WithdrawalSlip::findOrFail($request->key);

        dd($withdrawal_slip);
    }
}
