<?php

namespace App\Http\Controllers;

use App\Dose;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DosesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Dose::all();

        return view('doses.index', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doses.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $share = new Dose([
            'medication_id' => $request->get('medication_id'),
            'time' => $request->get('time'),
        ]);
        $share->save();
        return  response()->json([
            'added' => 'true'
        ]);
        //return redirect('/doses')->with('success', 'Dose has been added');

    }

    public function storeWeb(Request $request)
    {
        $share = new Dose([
            'medication_id' => $request->get('medication_id'),
            'time' => $request->get('time'),
        ]);
        $share->save();

        return redirect('/doses')->with('success', 'Dose has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $share = Dose::find($id);

        return view('doses.edit', compact('share'));
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
        $share = Dose::find($id);
        $share->time = $request->get('time');
        $share->updated_at = Carbon::now();
        $share->save();


        return  response()->json([
            'updated' => 'true'
        ]);

        return redirect('/doses')->with('success', 'Dose has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Dose::find($id);
        $share->delete();
        return  response()->json([
            'deleted' => 'true'
        ]);
//        return redirect('/doses')->with('success', 'Dose has been deleted Successfully');
    }
}
