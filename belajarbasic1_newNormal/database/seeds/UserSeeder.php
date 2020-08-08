<?php

use App\Model\User;
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
        User::truncate();
        User::create([
            'name'     => 'admin',
            'email'    => 'admin@admin',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name'     => 'author',
            'email'    => 'author@author',
            'password' => bcrypt('author'),
        ]);
        User::create([
            'name'     => 'ilyah',
            'email'    => 'ilyah@ilyah',
            'password' => bcrypt('ilyahBe'),
        ]);
    }
}
