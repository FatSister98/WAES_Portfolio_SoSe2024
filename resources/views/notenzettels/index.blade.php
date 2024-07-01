@extends('layouts.app')

@section('content')
<h1>Liste aller Fächer</h1>
<br>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Fach</th>
            <th>Creditpoints</th>
         
        </thead>
        @foreach ($zettels as $zettel)
            <tbody>
                <td>{{ $zettel->id }}
                <td>{{ $zettel->name }}</td>
                <td>{{ $zettel->cp }}</td>
               
                
            </tbody>
        @endforeach
    </table>
@endsection
