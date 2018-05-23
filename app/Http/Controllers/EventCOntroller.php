<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventCOntroller extends Controller
{
    public function __construct()
    {
        //solo usuario logeado
        $this->middleware('auth');
        //solo si el evento correspondo al usuario 
        $this->middleware('eventper')->only('show','edit');
    }
    public function getUsuario()
    {
       $id=Auth::id();
       return $id;
    }
    //metodo que busca el evento del usuario especifico
    public function buscar(Event $event)
    {
        //nota mental get() retorna una collecion mientras first solo uno
        $evento=Event::where('id',$event->id)->first();
        return $evento;
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       //obtienen todos los eventos del usuario logeado
       $events=Event::UsersCorrecto()->paginate(3);
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
        $id=$this->getUsuario();
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
        $evento=$this->buscar($event);
        return view('event.show',  ['evento' => $evento]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $evento=$this->buscar($event);
        return view('event.edit',  ['evento' => $evento]);
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
        $id=$this->getUsuario();
        $evento=Event::find($event->id);
        //dd($request->all());
        $evento->update(['nombre'=>$request['Nombre'],
        'fecha'=>$request['Fecha'],
        'horai'=>$request['HoraI'],
        'horat'=>$request['HoraT'],
        'direccion'=>$request['Lugar'],
        'lat'=>$request['lat'],
        'lng'=>$request['lng'],
        'user_id'=>$id
        ]);

        return redirect('/events')->with('success','Evento Moficado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $id=$this->getUsuario();
        //nota mental get() retorna una collecion mientras first solo uno
        $evento=Event::where('id',$event->id)->delete();
        return redirect('/events')->with('success','Evento Eliminado Correctamente');
    }

    
}
