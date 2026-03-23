<?php

namespace App\Http\Controllers;

use App\Models\OFertas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;

class OFertasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['ofertas'] = OFertas::paginate(5);

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

        $datosOferta = request()->except('_token');

        if ($request->hasFile('Foto')) {
            $datosOferta['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        OFertas::insert($datosOferta);

        return redirect('ofertas');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $oferta = OFertas::findOrFail($id);

        return view('ofertas.show', compact('oferta'));
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

        if ($request->hasFile('Foto')) {

            $oferta = OFertas::findOrFail($id);
            Storage::delete('public/' . $oferta->Foto);

            $datosOferta['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        OFertas::where('id', '=', $id)->update($datosOferta);

        $oferta = OFertas::findOrFail($id);
        return view('ofertas.edit', compact('oferta'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $oferta = OFertas::findOrFail($id);
        if (Storage::delete('public/' . $oferta->Foto)) {
            OFertas::destroy($id);
        }
        OFertas::destroy($id);
        return redirect('ofertas');
    }
}
