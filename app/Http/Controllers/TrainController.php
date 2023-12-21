<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }
    public function today(Faker $faker)
    {
        $giorno_odierno = $faker->dayOfWeek();
        $trains = Train::where('Giorno_partenza', '=', $giorno_odierno)->get();
        return view('trains.today', compact('trains'));
    }
    public function details($id)
    {
        $train = Train::where('id', '=', $id)->get();

        return view('trains.details', compact('train'));
    }
}
