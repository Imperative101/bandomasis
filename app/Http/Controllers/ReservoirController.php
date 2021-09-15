<?php

namespace App\Http\Controllers;
use App\Models\Reservoir;
use Illuminate\Http\Request;

class ReservoirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservoirs = Reservoir::all();
       return view('reservoir.index', ['reservoirs' => $reservoirs]);

    //   edit();
    //    return view('reservoir.edit', ['reservoir' => $reservoirs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservoir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservoir = new Reservoir;
        $reservoir->title = $reservoir->title;
        $reservoir->area = $reservoir->area;
        $reservoir->about = $reservoir->about;
        $reservoir->save();
        return redirect()->route('reservoir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservoir  $reservoir
     * @return \Illuminate\Http\Response
     */
    public function show(Reservoir $reservoir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservoir  $reservoir
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservoir $reservoir)
    {

        return view('reservoir.edit', ['reservoir' => $reservoir]);
    //    $members = Member::all();
    //   return view('reservoir.edit', ['reservoir' => $reservoir, 'members' => $members]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservoir  $reservoir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservoir $reservoir)
    {
        $reservoir->title = $reservoir->title;
        $reservoir->area = $reservoir->area;
        $reservoir->about = $reservoir->about;
        $reservoir->save();
       return redirect()->route('reservoir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservoir  $reservoir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservoir $reservoir)
    {
        $reservoir->delete();
        return redirect()->route('reservoir.index');
 
    }
}
