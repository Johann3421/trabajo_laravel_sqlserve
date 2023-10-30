<?php

namespace App\Http\Controllers;

use App\Models\Usp;
use Illuminate\Http\Request;

/**
 * Class UspController
 * @package App\Http\Controllers
 */
class UspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usps = Usp::paginate(10);

        return view('usp.index', compact('usps'))
            ->with('i', (request()->input('page', 1) - 1) * $usps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usp = new Usp();
        return view('usp.create', compact('usp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Usp::$rules);

        $usp = Usp::create($request->all());

        return redirect()->route('usp.index')
            ->with('success', 'Usp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usp = Usp::find($id);

        return view('usp.show', compact('usp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usp = Usp::find($id);

        return view('usp.edit', compact('usp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usp $usp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usp $usp)
    {
        request()->validate(Usp::$rules);

        $usp->update($request->all());

        return redirect()->route('usps.index')
            ->with('success', 'Usp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usp = Usp::find($id)->delete();

        return redirect()->route('usp.index')
            ->with('success', 'Usp deleted successfully');
    }
}
