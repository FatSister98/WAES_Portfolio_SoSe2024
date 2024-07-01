@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('exam.store') }}" method="POST"> 
    @csrf
    <input type="text" name="zettelId" value="{{$zettel->notenzettel->id}}" hidden>

    <h1>{{ $zettel->name }}'s Notenzettel</h1>
    <br>
        <table class="table table-hover">
            <thead>
                
                <th>Fach</th>
                <th>Wertung</th>
                <th>Credit Points</th>
            
            
            </thead>
                <tbody id="examTable">
                    @foreach ($zettel->notenzettel->exams as $exam)
                        <tr>
                            
                            <td>{{ $exam->name }}</td>
                            @if($exam->pivot->wertung == "bestanden")
                            <td class="bg-success">{{ $exam->pivot->wertung }}</td>
                            @else
                            <td class="bg-danger">{{ $exam->pivot->wertung }}</td>
                            @endif
                            <td>{{ $exam->cp }}</td>
                            
                        </tr>
                    @endforeach
            </tbody>
        </table>
        <button class="nav-link" id="examBtn">Neue Prüfung hinzufügen</button>
        <div class="submit">
            <a href="{{ route('studentlist.index') }}"class="btn btn-secondary">Zurück</a>
            <input class="btn btn-secondary" type="submit" name="submit" value="Speichern">
        </div>
</form>
@endsection
