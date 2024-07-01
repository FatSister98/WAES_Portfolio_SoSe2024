@extends('layouts.app')

@section('content')
<h1>{{ $zettel->name }}'s Notenzettel</h1>
<br>
    <table class="table table-hover">
        <thead>
            
            <th>Fach</th>
            <th>Wertung</th>
            <th>Credit Points</th>
           
         
        </thead>
        @foreach ($zettel->notenzettel->exams as $exam)
            <tbody>
                
                <td>{{ $exam->name }}</td>
                @if($exam->pivot->wertung == "bestanden")
                <td class="bg-success">{{ $exam->pivot->wertung }}</td>
                @else
                <td class="bg-danger">{{ $exam->pivot->wertung }}</td>
                @endif
                <td>{{ $exam->cp }}</td>
                
            </tbody>
        @endforeach
    </table>
@endsection
