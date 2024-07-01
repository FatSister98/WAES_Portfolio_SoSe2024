<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notenzettel;
use App\Models\Exam;
use App\Http\Requests\StoreExamRequest;

class ExamController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamRequest $request)
    {
        //
      
        $notenzettel = Notenzettel::findOrFail($request->input('zettelId'));
        
        $validated = $request->validated();


        $names = $validated['name'];
        $cp = $validated['cp'];
        $wertung = $validated['wertung'];

        foreach($names as $index => $name){
            $exam = new Exam();
            $exam->name = $name;
            $exam->cp = $cp[$index];
            $exam->save();
        
        
            $notenzettel->exams()->attach($exam->id, ['wertung' => $wertung[$index]]);
        };




        return redirect(route('notenzettel.create', $notenzettel));
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
