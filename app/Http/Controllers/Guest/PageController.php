<?php


namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $trains = Trains::where('departure_date', '2023-05-06')->get();

        
        return view('home', compact('trains'));
    }

}
