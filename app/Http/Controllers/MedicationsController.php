<?php

namespace App\Http\Controllers;

use App\Medication;
use Illuminate\Http\Request;

class MedicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Medication::all();

        return view('medications.index', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medications.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $share = new Medication([
            'name' => $request->get('name'),
            'user_id' => $request->get('user_id'),
            'start' => $request->get('start'),
            'end' => $request->get('end')
        ]);
        $share->save();
        return  response()->json([
            'added' => 'true'
        ]);

    }
    public function storeWeb(Request $request)
    {
        $share = new Medication([
            'name' => $request->get('name'),
            'user_id' => $request->get('user_id'),
            'start' => $request->get('start'),
            'end' => $request->get('end')
        ]);
        $share->save();
        return  response()->json([
            'added' => 'true'
        ]);
        return redirect('/medications')->with('success', 'User has been added');

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

        $share = Medication::find($id);

        return view('medications.edit', compact('share'));
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
        $share = Medication::find($id);
        $share->name = $request->get('name');
        $share->start = $request->get('start');
        $share->end = $request->get('end');

        $share->save();
        return  response()->json([
            'updated' => 'true'
        ]);

       // return redirect('/medications')->with('success', 'Medication has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Medication::find($id);
        $share->delete();
        return  response()->json([
            'deleted' => 'true'
        ]);

        //return redirect('/medications')->with('success', 'User has been deleted Successfully');
    }
}
