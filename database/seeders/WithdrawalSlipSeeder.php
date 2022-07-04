<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WithdrawalSlip;
use App\Models\Item;

class WithdrawalSlipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WithdrawalSlip::factory(3)
            ->create()
            ->each(function ($withdrawalslip) {
                Item::factory(3)
                    ->create(['withdrawal_slip_id' => $withdrawalslip->id]);
            });
    }
}
