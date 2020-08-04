<?php

use App\Model\Guardian;
use App\Model\Student;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        $faker           = Factory::create('id_ID');
        $guardians_count = Guardian::count();
        $this->command->getOutput()->progressStart(300);
        for ($i = 0; $i < 300; $i++) {
            $is_male = rand(0, 1);
            Student::create([
                'name'        => $faker->firstName($is_male ? 'male' : 'female') . ' ' . $faker->lastName,
                'gender'      => $is_male ? 'l' : 'p',
                'nis'         => $faker->nik,
                'class'       => $faker->randomElement(['10', '11', '12']),
                'address'     => $faker->address,
                'birth_date'  => $faker->date('Y-m-d', '2013-01-01'),
                'major'       => $faker->randomElement(['IPA', 'IPS', 'Agama', 'Bahasa']),
                'height'      => rand(100, 180),
                'weight'      => rand(30, 100),
                'guardian_id' => ($i % $guardians_count) + 1,
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
