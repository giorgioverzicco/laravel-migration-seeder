<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $startDate = date('Y-m-d 00:00:00');
        $endDate = date('Y-m-d 23:59:59');

        $trains = Train::whereBetween('departure_time', [$startDate, $endDate])
            ->get();

        dd($trains);
    }
}
