@extends('layouts.app')

@section('content')
<h1>Liste aller Studierenden</h1>
<br>
    <table class="table table-hover">
        <thead>
            
            <th>Profile Picture</th>
            <th>Name</th>
            <th>MatNr</th>
            <th>Uni</th>
            <th>Studiengang</th>
            <th>Semester</th>
            <th>Notenzettel</th>
            <th>Immatrikulation</th>
            <th>Exmatrikulation</th>
         
        </thead>
        @foreach ($studentlists as $studentlist)
            <tbody>
                
                <td><img id  ="pb"src="{{ $studentlist->profilePic }}" style="border-radius: 50%">
                <td>
                    <a class="link-hover"href="{{route('studentlist.show', $studentlist)}}">{{ $studentlist->name }}</a>
                </td>
                <td>{{ $studentlist->matNr }}</td>
                <td>{{ $studentlist->uni }}</td>
                <td>{{ $studentlist->studiengang }}</td>
                <td>{{ $studentlist->semester }}</td>
                <td><a class="link-hover" href="{{ route('notenzettel.create', $studentlist)}}">Notenzettel</a>
                <td>{{ $studentlist->immatrikulation }}</td>
                <td>{{ $studentlist->exmatrikulation }}</td>
                
            </tbody>
        @endforeach
    </table>
@endsection
