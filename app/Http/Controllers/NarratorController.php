<?php

namespace App\Http\Controllers;

use App\narrator;
use Illuminate\Http\Request;

class NarratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $narrators = narrator::get();
        return view('admin/narrator/index', compact('narrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/narrator/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Narrator::create(request(['firstname','tussenvoegsel','lastname']));
        // $narrator = new Narrator;
        // $narrator->firstname = request('firstname');
        // $narrator->tussenvoegsel = request('tussenvoegsel');
        // $narrator->lastname = request('lastname');

        // $narrator->save();

        return redirect('narrator');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\narrator  $narrator
     * @return \Illuminate\Http\Response
     */
    public function show(narrator $narrator)
    {
        return view('admin/narrator/show', compact('narrator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\narrator  $narrator
     * @return \Illuminate\Http\Response
     */
    public function edit(narrator $narrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\narrator  $narrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, narrator $narrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\narrator  $narrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(narrator $narrator)
    {
        //
    }
}
