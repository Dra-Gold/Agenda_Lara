<?php

namespace App\Http\Middleware;

use Closure;
use App\Event;
use Illuminate\Support\Facades\Auth;


class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd utilidad +1
        //dd($request->route('event')->id);
        //obtengo usuario logeado
        $id_usuario=Auth::id();
        //obtengo el id del evento solicitado en el request
        $id_solocitado=$request->route('event')->id;
        // obtengo el evento solocitado
        $event=Event::where('id',$id_solocitado)->first();
        
        //se compara si los id del usuario es distinto al de la bd 
        if($event->user_id != $id_usuario )
        {
            return redirect('/events')->with('error','No tiene permisos para entrar'); 
        }
        
        return $next($request);
       
      
    }
}
