<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //obtiene el id del usuario logeado
       $id=Auth::id();
       //obtienen todos los eventos del usuario logeado
       $events=Event::where('user_id',$id)->latest()->paginate(3);
       //se rentorna a la vista y se envian los eventos
       return view('event.index',  ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //se rentorna a la vista 
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //obtiene el id del usuario logeado
        $id=Auth::id();
        //se crea el evento con los datos obtenidos del request
        Event::create(['nombre'=>$request['Nombre'],
        'fecha'=>$request['Fecha'],
        'horai'=>$request['HoraI'],
        'horat'=>$request['HoraT'],
        'direccion'=>$request['Lugar'],
        'lat'=>$request['lat'],
        'lng'=>$request['lng'],
        'user_id'=>$id
        ]);
         //se rentorna a la vista  y se envia mensaje
        return redirect('/events')->with('success','Evento Agregado Correctamente'); 
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
