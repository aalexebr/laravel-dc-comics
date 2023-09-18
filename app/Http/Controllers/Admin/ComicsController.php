<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
        return view('admin.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:64',
            'description'=>'nullable',
            'src'=>'nullable',
            'price'=>'required|decimal:0,2|min:0.01',
            'series'=>'nullable|max:64'
        ],
        [
            'price.min'=>'price must be above 0.01'
        ]
        );

        $formData = $request->all();
        
        $comic = new Comic();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->src = $formData['src'];
        $comic->series = $formData['series'];
        $comic->price = $formData['price'];
        $comic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findorFail($id);
        $artistArr = explode('|', $comic->artists);
        $writerArr = explode('|', $comic->writers);
        // dd($artistArr);
        return view('admin.show',compact('comic','artistArr','writerArr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $object= Comic::findOrFail($id);
        // dd($object);
        return view('admin.update', compact('object'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required|max:64',
            'description'=>'nullable',
            'src'=>'nullable',
            'price'=>'required|decimal:0,2|min:0.01',
            'series'=>'nullable|max:64'
        ],
        [
            'price.min'=>'price must be above 0.01'
        ]
        );

        
        $comic = Comic::findOrFail($id);
        $formData = $request->all();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->src = $formData['src'];
        $comic->series = $formData['series'];
        $comic->price = $formData['price'];
        $comic->save();
        return redirect()->route('comics.show',['comic'=>$comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $object = Comic::findOrFail($id);
        $object->delete();
        return redirect()->route('comics.index');
    }

    public function preDelete(string $id)
    {
        $comic = Comic::findorFail($id);
        $artistArr = explode('!', $comic->artists);
        $writerArr = explode('!', $comic->writers);
        // dd($artistArr);
        return view('admin.deletee',compact('comic','artistArr','writerArr'));
    }
}
