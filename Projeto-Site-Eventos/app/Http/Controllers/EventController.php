<?php

namespace App\Http\Controllers;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {

            $events = Events::where([
                ['title', 'like', '%' . $search . '%']

            ])->get();
        } else {
            $events = Events::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Events;
        $event->title = $request->title;
        //campo de data
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        //isto é um array
        $event->items = $request->items;

        //imagem upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);
            $requestImage->move(public_path('imgs/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento Criado com Sucesso!');
    }


    public function show($id)
    {

        $events = Events::findOrFail($id);

        return view("events.show", ['events' => $events]);
    }
}
