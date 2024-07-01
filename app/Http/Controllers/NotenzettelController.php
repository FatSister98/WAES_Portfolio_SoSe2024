<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreNotenzettelRequest;
use App\Http\Requests\UpdateNotenzettelRequest;
use App\Models\Notenzettel;
use App\Models\Studentlist;

class NotenzettelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($studentlistId)
    {
        //
        $zettel = Studentlist::with('notenzettel')->findOrFail($studentlistId);
        return view('notenzettels.create', compact('zettel'));
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $studentlist = Studentlist::with('notenzettel')->findOrFail($request->input('studentId'));
        dd($studentlist->notenzettel);
        $names =  $request->input('name');
        $wertung = $request->input('wertung');
        $cp = $request->input('cp');

        foreach($names as $index => $name){

        }


        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $zettel = Studentlist::with('notenzettel.exams')->findOrFail($id);
        return view('notenzettels.show', compact('zettel'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
