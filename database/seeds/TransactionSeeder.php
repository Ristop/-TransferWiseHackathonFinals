<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'wallet_id' => '1',
            'source' => 'USD',
            'target' => 'EUR',
            'sourceAmount' => '116.62',
            'targetAmount' => '100',
            'rate' => '0.88015',
            'fee' => '3'
        ]);

        DB::table('transactions')->insert([
            'wallet_id' => '2',
            'source' => 'GBP',
            'target' => 'EUR',
            'sourceAmount' => '1000',
            'targetAmount' => '1266.51',
            'rate' => '1.27285',
            'fee' => '4.98'
        ]);

        DB::table('transactions')->insert([
            'wallet_id' => '3',
            'source' => 'EUR',
            'target' => 'SEK',
            'sourceAmount' => '109.81',
            'targetAmount' => '1000',
            'rate' => '9.2758667',
            'fee' => '2'
        ]);
    }
}
