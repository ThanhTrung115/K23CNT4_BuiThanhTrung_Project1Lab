<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BttNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('bttnhacc')->insert([
                'bttMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'bttTenNCC'=>$faker->sentence(5),
                'bttDiachi'=>$faker->address(),
                'bttDienthoai'=>$faker->phoneNumber(10),
                'bttemail'=>$faker->email(),
                'bttstatus'=>$faker->boolean()
            ]);
        }
    }
}
