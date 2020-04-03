<?php

use App\Models\Owner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class OwnerTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // kosongkan data tabel Users
        DB::table('owners')->delete();

        for ($i = 1; $i <= 50; $i++) {
            // buat satu buah data users
            Owner::create([
                'name' => $faker->name
            ]);
        }
    }
}
