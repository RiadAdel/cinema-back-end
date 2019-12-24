<?php

namespace App\Http\Controllers;

use App\genre;
use Illuminate\Http\Request;
use App\movie;
use Illuminate\Support\Facades\Validator;

class moviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(movie::with('genres')->get(),200);
    }

    public function screening(Request $request)
    {
        $movie = movie::first()->with('hall')->find($request->id);
        return response()->json($movie,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        error_log( $request);
        try {
            $movie = new movie;
            $movie->name = $request->name;
            $movie->length = $request->length;
            $movie->year = $request->year;
            $movie->poster = $request->poster;
            $movie->screenshot = $request->screenshot;
            $checkMovie = empty(movie::where('name',$movie->name)->where('year',$movie->year)->first());
            if(!$checkMovie){
                return response()->json('Already inserted',200);
            }
            $movie->save();
            $movieGenries = [];
            foreach($request->genres as $genre){
                array_push($movieGenries,genre::where('type',$genre)->first('id')->id);
            }
            $movie->genres()->attach($movieGenries);
        }catch (\Throwable $th) {
            error_log($th);
            return response()->json('error',404);
        }
    
        return response()->json('done',200);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addScreening(Request $request)
    {  
        $validator = Validator::make($request->all(),[
            'movie_id'=>'required|exists:movies,id',
            'hall_id'=>'required|exists:halls,id|unique_with:screening,screening_time,screening_day',
            'screening_time'=>'required',
            'screening_day'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $screening = $request->all();
        $movie = movie::find($screening['movie_id']);
        $movie->hall()->attach([$screening],['screening_time'=>$screening['screening_time'],'screening_day'=>$screening['screening_day']]);
        $success['info'] = "The screening has been added successfully";
        return response()->json($success,200);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
