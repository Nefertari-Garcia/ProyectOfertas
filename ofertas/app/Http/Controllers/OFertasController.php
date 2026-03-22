<?php

namespace App\Http\Controllers;

use App\Models\OFertas;
use Illuminate\Http\Request;

class OFertasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['ofertas'] = Ofertas::paginate(5);

        return view('ofertas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ofertas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datosOferta = request()->all();
        $datosOferta = request()->except('_token');

        if ($request->hasFile('Foto')) {
            $datosOferta['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Ofertas::insert($datosOferta);

        return response()->json($datosOferta);
    }

    /**
     * Display the specified resource.
     */
    public function show(OFertas $oFertas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $oferta = OFertas::findOrFail($id);

        return view('ofertas.edit', compact('oferta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosOferta = request()->except(['_token', '_method']);
        OFertas::where('id', '=', $id)->update($datosOferta);

        $oferta = OFertas::findOrFail($id);
        return view('ofertas.edit', compact('oferta'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        OFertas::destroy($id);
        return redirect('ofertas');
    }
}
