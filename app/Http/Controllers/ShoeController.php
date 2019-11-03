<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $shoes = Shoe::all();
    return view('shoes.index', array('shoes' => $shoes));    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shoe = new Shoe;
        $shoe->name = $request->name;
        $shoe->price = $request->price;
        $shoe->description =  $request->description;
        $shoe->produced_on = now();
        $shoe->save();
        return redirect('/shoes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shoe = Shoe::find($id);
        return view('shoes.show', array('shoe' => $shoe));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shoe = Shoe::find($id);
        return view('shoes.edit', array('shoe' => $shoe));

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
        $shoe = Shoe::find($id);
        $shoe->name = $request->name;
        $shoe->price = $request->price;
        $shoe->description = $request->description;
        $shoe->save();
        
        return redirect('/shoes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shoe = Shoe::find($id);
        $shoe->delete();
    }
}
