<?php

use Illuminate\Database\Seeder;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['inventori_name'=>'R 5337 PC', 'detail'=>'Mobil Toyota Fortuner Biru'],
            ['inventori_name'=>'R 1234 AC','detail'=>'Mobil Honda Jazz Merah'],
            ['inventori_name'=>'R 3342 PC','detail'=>'Mobil Honda Jazz Kuning'],            
        ];

        foreach($data as $d){
            DB::table('inventories')->insert([
                'name'    => $d['inventori_name'],
                'detail'        => $d['detail']
            ]);
        }
    }
}
