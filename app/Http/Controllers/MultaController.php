<?php

namespace App\Http\Controllers;
use App\Models\Multa;
use Illuminate\Http\Request;

class MultaController extends Controller
{
    
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multas = Multa::all();

        return view('multas/show_multas', ['multas' => $multas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'motivo' => 'required|string',
            'cantidad' => 'required|numeric',
            'estado' => 'required',
            'id_prestamo' => 'required|numeric'
        ]);*/

        //Multa::create($request->all());
        //return redirect()->route();
    }

    /**
     * Display the specified resource.
     */
    public function show(Multa $multa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Multa $multa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Multa $multa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Multa $multa)
    {
        //
    }
}
