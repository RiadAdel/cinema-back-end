<?php

namespace App\Http\Controllers;

use App\screening;
use Illuminate\Http\Request;

class screeningController extends Controller
{
    public function tickets(Request $request)
    {
        $movie = screening::first()->with('tickets')->find($request->id);
        return response()->json($movie,200);
    }
}
