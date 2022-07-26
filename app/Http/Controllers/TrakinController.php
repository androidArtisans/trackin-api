<?php

namespace App\Http\Controllers;

use App\Models\Trakin;
use App\Models\Travel;
use Illuminate\Http\Request;

class TrakinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trakin = Trakin::all();
        return response()->json($trakin); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$travel = Travel::where('code',$request->code)->get()->first();
        $request['travel_id'] = $travel->id;*/
        
        /*$trakin = Trakin::create($request->post());
        return response()->json([
            'trakin' => $trakin
        ]);*/

        return "hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trakin  $trakin
     * @return \Illuminate\Http\Response
     */
    public function edit(Trakin $trakin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trakin  $trakin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trakin $trakin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trakin  $trakin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trakin $trakin)
    {
        //
    }

    /**
     * Display a listing of the trackin by code travel.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTrackinByTravel(Request $request)
    {
        $travel = Travel::where('code',$request->code)->get()->first();
        
            $trackin = Trakin::where('travel_id',$travel->id)
            ->orderBy('id','desc')
            ->get();
    
        return response()->json($trackin); 
    }

    public function createTrakin(Request $request)
    {
        /*$travel = Travel::where('code',$request->code)->get()->first();
        $request['travel_id'] = $travel->id;*/
        
        /*$trakin = Trakin::create($request->post());
        return response()->json([
            'trakin' => $trakin
        ]);*/

        return "hello";
    }
}
