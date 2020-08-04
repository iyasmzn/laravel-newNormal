<?php

use App\Model\Guardian;
use Faker\Factory;
use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guardian::truncate();
        $faker = Factory::create('id_ID');
        $this->command->getOutput()->progressStart(250);
        for ($i = 0; $i < 250; $i++) {
            $is_male = rand(0, 1);
            Guardian::create([
                'name'       => $faker->name($is_male ? 'male' : 'female'),
                'nik'        => $faker->nik,
                'gender'     => $is_male ? 'l' : 'p',
                'phone'      => $faker->e164PhoneNumber,
                'birth_date' => $faker->date('Y-m-d', '2000-01-01'),
                'address'    => $faker->name,
                'is_parent'  => rand(0, 1),
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
