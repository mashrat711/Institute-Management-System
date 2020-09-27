<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->eventsToArray(Event::all());
    }
    public function eventsToArray($events){
    $eventArray=[];
    foreach ($events as $event){
        $data=[
            "title"=>$event->title,
            "start"=>$event->start_date,
            "end"=>$event->end_date,
            "color"=>$event->color,

        ];
        array_push($eventArray,$data);
    }
    return response()->json($eventArray);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Backend.Calendar.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $data=$request->all();
        Event::create($data);
        return view('Backend.Calendar.home');
        //return redirect()->route('/Calender')->with('message','Data has been inserted successfully');
       // dd($data);
//        try{
//            $event=$request->all();
//            Event::create($event);
//            return response()->json(['success' => 'added']);
//        }catch (QueryException $e){
//
//        }
        //dd($request->all());
//      Event::create([
//
//            "title" => $request-> title,
//           "start_date" => $request-> start,
//            "end_date" => $request-> end
//
//      ]);
//
//
   // return response()->json(['success' => 'added']);

   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
