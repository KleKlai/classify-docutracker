<?php

namespace App\Http\Controllers;

use App\Models\WithdrawalSlip;
use App\Models\Item;
use Illuminate\Http\Request;
use Exception;

class WithdrawalSlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('receipt');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Generate Document Series Number
        $document_series_number = 'GFI-MI-2022-000001';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request);
        $withdrawalSlip = WithdrawalSlip::create([
            'customer_name' => $request->customer_name,
            'customer_date' => $request->customer_date,
            'pallet_no' => $request->pallet_no,
            'document_series_no' => $request->document_series_no,
            'qr_no' => $request->qr_no,
            'wh_location' => $request->wh_location,
            'warehouse' => $request->warehouse,
            'prepared_by' => $request->prepared_by,
            'approved_by' => $request->approved_by,
            'release_by' => $request->release_by,
            'sales_admin' => $request->sales_admin,
            'wh_incharge' => $request->wh_incharge,
        ]);

        // $item = Item::create([

        // ]);
        foreach ($request->moreFields as $key => $value) {
            // Item::create($value);
            dd($value);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WithdrawalSlip  $withdrawalSlip
     * @return \Illuminate\Http\Response
     */
    public function show(WithdrawalSlip $withdrawalSlip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WithdrawalSlip  $withdrawalSlip
     * @return \Illuminate\Http\Response
     */
    public function edit(WithdrawalSlip $withdrawalSlip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WithdrawalSlip  $withdrawalSlip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WithdrawalSlip $withdrawalSlip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WithdrawalSlip  $withdrawalSlip
     * @return \Illuminate\Http\Response
     */
    public function destroy(WithdrawalSlip $withdrawalSlip)
    {
        //
    }
}
