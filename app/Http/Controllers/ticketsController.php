<?php

namespace App\Http\Controllers;

use App\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ticketsController extends Controller
{
    
    public function screeningTickets(Request $request){
        return response()->json(ticket::where('screening_id',$request->screening_id)->with('seat')->get(),200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'user_username'=>'required|exists:users,username',
            'screening_id'=>'required|exists:halls,id',
            'seat_id'=>'required|exists:seats,id|unique_with:tickets,screening_id',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $ticket = $request->all();
        ticket::create($ticket);
        $success = ticket::where('screening_id',$request->screening_id)->with('seat')->get();
        return response()->json($success, 200);

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
