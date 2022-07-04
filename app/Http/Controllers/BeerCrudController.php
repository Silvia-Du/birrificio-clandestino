<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::orderBy('id', 'desc')->get();
        return view('beer.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beer.create');
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
            "name" => "required|max:255|min:3",
            "company" => "required|max:255|min:3",
            "type" => "required|max:255|min:3",
            "alcohol_content" => "required|numeric|max:100|min:0",
            "description" => "required|min:10",
            "hops" => "numeric"
            ],
            [
                "name.required" => "Il campo Nome è obbligatorio!",
                "name.max" => "Il nome non può essere più lungo di :max caratteri!",
                "nome.min" => "Il nome deve avere almeno :min caratteri!",
                "company.required" => "Il campo Company è obbligatorio!",
                "company.max" => "Il nome della company non può essere più lungo di :max caratteri!",
                "company.min" => "Il nome della company deve avere almeno :min caratteri!",
                "type.required" => "Il campo Type è obbligatorio!",
                "type.max" => "Il tipo non può essere più lungo di :max caratteri!",
                "type.min" => "Il tipo deve avere almeno :min caratteri!",
                "alcohol_content.required" => "Il campo Alcohol Content è obbligatorio!",
                "alcohol_content.numeric" => "Il campo Alcohol Content deve essere un numero!",
                "alcohol_content.max" => "L'alcohol content non può essere superiore a :max!",
                "alcohol_content.min" => "L'alcohol content non può essere inferiore a :min!",
                "description.required" => "La descrizione è un campo obbligatorio!",
                "description.min" => "La descrizione deve avere almeno :min caratteri!",
                "hops.numeric" => "Il campo Hops deve essere un numero!"
            ]
        );

        $data = $request->all();

        // dd($data);

        // creare dati fillabili nel model
        // salvare nel db il contenuto della request
        // reindirizzare alla show del nuovo elemento creato

        $new_beer = new Beer();
        $new_beer-> fill($data);

        $new_beer->save();

        return redirect()->route('beers.show', $new_beer);




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beer = Beer::find($id);
        return view('beer.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beer = Beer::find($id);

        return view('beer.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $request->validate([
            "name" => "required|max:255|min:3",
            "company" => "required|max:255|min:3",
            "type" => "required|max:255|min:3",
            "alcohol_content" => "required|numeric|max:100|min:0",
            "description" => "required|min:10",
            "hops" => "numeric"
            ],
            [
                "name.required" => "Il campo Nome è obbligatorio!",
                "name.max" => "Il nome non può essere più lungo di :max caratteri!",
                "nome.min" => "Il nome deve avere almeno :min caratteri!",
                "company.required" => "Il campo Company è obbligatorio!",
                "company.max" => "Il nome della company non può essere più lungo di :max caratteri!",
                "company.min" => "Il nome della company deve avere almeno :min caratteri!",
                "type.required" => "Il campo Type è obbligatorio!",
                "type.max" => "Il tipo non può essere più lungo di :max caratteri!",
                "type.min" => "Il tipo deve avere almeno :min caratteri!",
                "alcohol_content.required" => "Il campo Alcohol Content è obbligatorio!",
                "alcohol_content.numeric" => "Il campo Alcohol Content deve essere un numero!",
                "alcohol_content.max" => "L'alcohol content non può essere superiore a :max!",
                "alcohol_content.min" => "L'alcohol content non può essere inferiore a :min!",
                "description.required" => "La descrizione è un campo obbligatorio!",
                "description.min" => "La descrizione deve avere almeno :min caratteri!",
                "hops.numeric" => "Il campo Hops deve essere un numero!"
            ]);
        $data = $request->all();

        $beer->update($data);

        //return route('beers.show', $beer);

        return redirect()->route('beers.show', $beer);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();

        return redirect()->route('beers.index')->with('prodotto_cancellato', "La Birra $beer->name è stata eliminata correttamente");
    }
}
