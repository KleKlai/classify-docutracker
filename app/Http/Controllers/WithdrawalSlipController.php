<?php

namespace App\Http\Controllers;

use App\Models\WithdrawalSlip;
use Illuminate\Http\Request;
use App\Models\Withdrawal;
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
        try{
            $withdrawal = Withdrawal::create($request->all());
            
            $notification = array(
                'message' => 'Product saved successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('dashboard')->with($notification);

        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );

            return redirect()->route('receipt.index')->with($notification);
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
