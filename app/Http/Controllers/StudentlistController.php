<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentlistRequest;
use App\Http\Requests\UpdateStudentlistRequest;
use App\Models\Studentlist;
use App\Models\Exam;
use App\Models\Notenzettel;
use Faker\Factory as Faker; 

class StudentlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $studentlists = Studentlist::all();
        return view('studentlists.index', ['studentlists' => $studentlists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      
        return view('studentlists.create');

    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentlistRequest $request)
    {
        //
        $validated = $request->validated();

        $studentlist = new Studentlist($validated);
        $studentlist->save();

        $notenzettel = new Notenzettel(['studentlist_id' => $studentlist->id]);
        $notenzettel->save();

        $faker = Faker::create();
        $exams = Exam::all();

        foreach ($exams as $exam) {
        $notenzettel->exams()->attach($exam->id, 
            ['wertung' => $faker->randomElement(['bestanden', 'nicht bestanden'])]);
    }



        return redirect(route('studentlist.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Studentlist $studentlist)
    {
        //
        $uni = strval($studentlist->uni);
        return view('studentlists.show', ['studentlist' => $studentlist, 'uni' => $uni]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Studentlist $studentlist)
    {
        //
        $uni = strval($studentlist->uni);
        return view('studentlists.edit', ['studentlist' => $studentlist,  'uni' => $uni]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentlistRequest $request, Studentlist $studentlist)
    {
        //
        $validated = $request->validated();
        $studentlist->update($validated);
       return redirect()->route('studentlist.show', $studentlist)->withSuccess('Aktualisierung erfolgreich');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studentlist $studentlist)
    {
        //
    }
}
