<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request -> validate(
            [
                'title' => 'required',
                'price' => 'numeric',
                'series' => 'alpha_dash'
            ]
        );

        $data = $request -> all();

        $new_comic = new Comic();

        $new_comic -> fill($data);

        $new_comic -> save();

        return redirect() -> route('comics.index') -> with('message', "Il fumetto $new_comic->title è stato creato con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request -> validate(
            [
                'title' => 'required',
                'price' => 'numeric',
                'series' => 'alpha_dash'
            ]
        );

        $data = $request -> all();
        $comic -> update($data);

        return redirect() -> route('comics.index') -> with('message', "Il fumetto $comic->title è stato aggiornato con successo");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic -> delete();

        return redirect() -> route('comics.index') -> with('message', "Il fumetto $comic->title è stato cancellato con successo");;
    }
}
