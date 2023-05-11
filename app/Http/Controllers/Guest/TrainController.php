<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function home() {
        $trains = Train::all();

        $currentDate = new DateTime();
        $currentDateFormatted = $currentDate->format('Y-m-d H:i:s');

        $trains = Train::query()->where('departure_time', '>=', $currentDateFormatted)->get();

        $curDt = $currentDate->format('d/m/Y');
        return view('home', compact('trains', 'curDt'));
    }
}
