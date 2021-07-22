<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;
use DB;

class FinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        return view('index', compact('events'));
    }

    public function categories()
    {
        //
        $events = Event::all();

        $categories = Category::all();

        return view('categories', compact('events', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return Booking::create([
            'categories_id' => $data['categories_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
            'type' => $data['type'],
            'location' => $data['location'],
            'when' => $data['when'],
            'starts' => $data['starts'],
            'duration' => $data['duration'],
            'status' => $data['status'],
            'store' => $data['store'],
            'pkids' => $data['pkids'],
            'padults' => $data['padults'],
        ]);
        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'categories_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required',
            'location' => 'required',
            'when' => 'required',
            'starts' => 'required',
            'duration' => 'required',
            'status' => 'required',
            'store' => 'required',
            'pkids' => 'required',
            'padults' => 'required',
        ]);

        //
        $data = $request->all();
        $file = $request->file('image');

        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = 'event-photo-' . time() . '.' . $file->getClientOriginalExtension();
        $data['image'] = $filename;
        
        // save to storage/app/public/imgs as the new $filename
        $path = $file->storeAs('public/img', $filename);
        //
    
        Event::create($data);
     
        return redirect()->route('events.index')
                        ->with('success', 'Event registered');
       
    }//FIN DEL METODO STORE

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $event = Event::find($id);
        return view('details', compact('event'));

        return view('categories', compact('event'));

        return view('register', compact('event'));

        
    }

    public function book($id)
    {
        //
        $event = Event::find($id);
        return view('reservation', compact('event'));

       
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
