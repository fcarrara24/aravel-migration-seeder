<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->Azienda = $faker->company();
            $newTrain->Stazione_di_partenza = $faker->bothify('???-##');
            $newTrain->Stazione_di_arrivo = $faker->bothify('???-##');
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_treno = $faker->bothify('??-####-??');
            $newTrain->Numero_carrozze = $faker->randomNumber(2, false);
            $newTrain->In_orario = $faker->randomElement([true, false]);
            $newTrain->Cancellato = $faker->randomElement([true, false]);
            $newTrain->Giorno_partenza = $faker->dayOfWeek();

            $newTrain->save();
        }
    }
}
