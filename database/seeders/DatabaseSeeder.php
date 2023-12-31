<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
        [
            'id'=> 1,
            'last_name'=> 'Despatie',
            'first_name'=> 'Jack',
            'address'=> '123 rue Laravel',
            'age'=>18,
            'phone_number'=>'999-999-9999',
            'email'=>'jackdespatie@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('12345678'),
            'remember_token'=>'',
            'created_at'=> now(),
            'updated_at'=> now()
        ]
        );

        \App\Models\Vehicle::create(
        [
            'id'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
            'user_id'=>1,
            'brand'=>'Toyota',
            'model'=>'F-150 2021',
            'license_plate'=>'156 AJK',
            'kilometers'=>80000,
            'image'=>null
        ]
        );

        \App\Models\Repair::create(
        [
            'id'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
            'vehicle_id'=>1,
            'date_start'=>'2023-09-29',
            'date_end'=>'2023-09-29',
            'description'=>"Changement d'huile",
            'amount_paid'=>80,
            'mechanic'=>'Hugo Montreuil',
            'deleted'=>0
        ]
        );

    }
}
