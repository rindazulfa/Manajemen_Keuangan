<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenseCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expense_categories')->insert(
            [
                [
                    'name' => 'Makan'
                ],
                [
                    'name' => 'Tagihan'
                ],
                [
                    'name' => 'Belanja'
                ],
                [
                    'name' => 'Travel '
                ],
                [
                    'name' => 'Pendidikan'
                ],
                [
                    'name' => 'Hiburan'
                ],
                [
                    'name' => 'Kartu Kredit'
                ],
                [
                    'name' => 'Kesehatan'
                ],
                [
                    'name' => 'Menyewa'
                ],
                [
                    'name' => 'Pajak'
                ],
                [
                    'name' => 'Kendaraan'
                ],

            ]
        );
    }
}
