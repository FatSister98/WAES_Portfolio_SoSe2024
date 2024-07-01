@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
        <div class="successAlert alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card" id="karte">
        @if ($uni == 'Uni Würzburg')
            <div class="card-header" id="cardHeadUni">
                <div class="row">
                    <h4 style="margin-top:10px">{{ $uni }}</h4>
                </div>
            </div>
        @else
            <div class="card-header" id="cardHeadTh">
                <div class="row">
                    <h4 style="margin-top:10px">{{ $uni }}</h4>
                </div>
            </div>
        @endif
        <div class="card-body">
            <div class="row ">
                <div class="col-4" style="margin-top:15px">
                    <img src="{{ $studentlist->profilePic }}" style="border-radius: 50%">
                </div>
                <div class="col" id="cardInfo">
                    <h4 style="line-height:20px;">{{ $studentlist->name }}</h4>
                    <h6 style="line-height:10px;">Mat.Nr: {{ $studentlist->matNr }}</h6>
                    <h6 style="line-height:10px;">{{ $studentlist->studiengang }}</h6>
                    <h6 style="line-height:10px;">Fachsemster: {{ $studentlist->semester }}</h6>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="margin-top:20px">
                <div class="col">
                    <h6>ImMat.: {{ $studentlist->immatrikulation }}</h6>
                </div>
                <div class="col">
                    <h6>ExMat.: {{ $studentlist->exmatrikulation }}</h6>
                </div>

            </div>


        </div>
    </div>
    <div class="card" id="updated">
        <div class="card-header" style="height: 30px">
            <h6>last updated at: {{ $studentlist->updated_at }}</h6>
        </div>
    </div>
    <div class="submit">
        <a href="{{ route('studentlist.index') }}"class="btn btn-secondary">Zurück</a>
        <a href="{{ route('studentlist.edit', $studentlist) }}"class="btn btn-secondary">Bearbeiten</a>

    </div>
@endsection
