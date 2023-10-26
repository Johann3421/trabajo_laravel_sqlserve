<?php

namespace App\Http\Controllers;

use App\Models\Nosotros1;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        $nosotros = Nosotros1::paginate(10);

        return view('Nosotros.index', compact('nosotros'))
            ->with('i', (request()->input('page', 1) - 1) * $nosotros->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $nosotros = new Nosotros1();
    return view('Nosotros.create', compact('nosotros'));
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nosotros1::$rules);

        $nosotros = Nosotros1::create($request->all());

        return redirect()->route('nosotros.index')
            ->with('success', 'Nosotros created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $nosotros = Nosotros1::find($id);

    return view('Nosotros.show', compact('nosotros'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nosotros = Nosotros1::find($id);

        return view('Nosotros.edit', compact('nosotros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nosotros1 $nosotros)
    {
        request()->validate(Nosotros1::$rules);

        $nosotros->update($request->all());

        return redirect()->route('nosotros.index')
            ->with('success', 'Products updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nosotros = Nosotros1::find($id)->delete();

        return redirect()->route('nosotros.index')
            ->with('success', 'Products deleted successfully');
    }
}
