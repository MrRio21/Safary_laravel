<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;


class produceOrders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Order::create([
            'budget' =>  5000,
            'check_in_d' =>1,
            'check_in_m' =>1,
            'check_in_y' =>2023,
            'check_out_d' =>3,
            'check_out_m' =>2,
            'check_out_y' =>2023,
            'n_of_adults'=> 2,
            'n_of_childeren'=>5,
            'n_of_rooms'=>2
        ]);
    }
}
