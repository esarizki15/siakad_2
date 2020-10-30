<?php

use Illuminate\Database\Seeder;
use App\User;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 100; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('siswa')->insert([ //mengisi datadi database
                'nis' => "123",
                'nisn' => "123",
                'nama_siswa' => $faker->name,
                'password' => $faker->address,
            ]);
        }
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->save();
    }
}
