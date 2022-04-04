<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Driver;

use Illuminate\Support\Str;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'          => 'Joko Susanto',
                'username'      => 'driver@driver.com',
                'password'      => '12345',
                'nomortelepon'  => '0812456782',
                'alamat'        => 'surabaya',
                'kodedriver'    => str::random(5),
                'foto'          => 'joko.png',
            ]
        ];

        foreach ($user as $key => $value) {
            Driver::create($value);
        }
    }
}
