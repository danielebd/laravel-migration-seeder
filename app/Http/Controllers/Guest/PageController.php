<?php


namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class PageController extends Controller
{
    public function index()
    {

        $trains = Trains::where('departure_time', SupportCarbon::today()->format('Y-m-d'))->get();
        
        
        return view('home', compact('trains'));
    }

}
