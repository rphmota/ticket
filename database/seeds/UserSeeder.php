<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raphael Mota',
            'cpf' => 02233372344,
            'nivel_acesso' => 1,
            'email' => 'rphmota@gmail.com',
            'password' => Hash::make('123'),

        ]);
    }
}
