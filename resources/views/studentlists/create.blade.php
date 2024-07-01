@extends('layouts.app')

@section('content')
    <form action="{{ route('studentlist.store') }}" method="POST">
        @csrf
        <div class="card" id="formular">
                <div class="card-header d-flex justify-content-around">
                    <h2>Neuen Studierenden anlegen</h2>
                </div>
                <div class="card-body">
                   <table class="table">
                        <tbody>
                            <tr>
                                <th>Profil Bild URL</th>
                                <td>
                                    <input class="form-control" name="profilePic" type="text">
                                        @if ($errors->has('profilePic'))
                                            <ul class="list-group" style="line-height:15px;">
                                                @foreach ($errors->get('profilePic') as $error)
                                                <div class="d-flex justify-content-between rounded">
                                                    <li class="list-group-item list-group-item-danger">
                                                        <span class="text-danger">{{ $error }}</span>
                                                    </li>
                                                </div>
                                                @endforeach
                                            </ul>
                                     @endif
                                </td>
                            <tr>
                            <tr>
                                <th>Vor- und Nachname</th>
                                <td>
                                    <input class="form-control" name="name"type="text">
                                    @if ($errors->has('name'))
                                        <ul class="list-group" style="line-height:15px;">
                                            @foreach ($errors->get('name') as $error)
                                                <div class="d-flex justify-content-between rounded">
                                                    <li class="list-group-item list-group-item-danger">
                                                        <h6> <span class="text-danger">{{ $error }}</span></h6>
                                                    </li>
                                                </div>
                                            @endforeach
                                        </ul>
                                    @endif
                                </td>
                            <tr>
                            <tr>
                                <th>Matrikelnummer</th>
                                <td>
                                    <input class="rounded border-1 form-control" name="matNr"type="text">
                                        @if ($errors->has('matNr'))
                                            <ul class="list-group" style="line-height:15px;">
                                                @foreach ($errors->get('matNr') as $error)
                                                    <div class="d-flex justify-content-between rounded">
                                                        <li class="list-group-item list-group-item-danger">
                                                            <span class="text-danger">{{ $error }}</span>
                                                         </li>
                                                    </div>
                                                @endforeach
                                            </ul>
                                        @endif
                                </td>
                            <tr>
                            <tr>
                                <th>Universität</th>
                                <td>
                                    <div>
                                        <select class="form-select" name="uni" style="width:180px">
                                            <option selected disabled>Uni auswählen</option>
                                            <option value="Uni Würzburg">Uni Würzburg</option>
                                            <option value="THWS">THWS</option>
                                        </select>
                                    </div>
                                        @if ($errors->has('uni'))
                                            <ul class="list-group" style="line-height:15px;">
                                                @foreach ($errors->get('uni') as $error)
                                                    <div class="d-flex justify-content-between rounded">
                                                        <li class="list-group-item list-group-item-danger">
                                                            <h6> <span class="text-danger">{{ $error }}</span></h6>
                                                        </li>
                                                    </div>
                                                @endforeach
                                            </ul>
                                        @endif
                                </td>
                            <tr>    
                            <tr>
                                <th>Studiengang</th>
                                <td>
                                    <div>
                                        <select class="form-select" name="studiengang" style="width:180px">
                                            <option selected disabled>Studiengang auswählen</option>
                                            <option value="Bauingenieurwesen">Bauingenieurwesen</option>
                                            <option value="BWL">BWL</option>
                                            <option value="Business Analytics">Business Analytics</option>
                                            <option value="Digitale Gesellschaft">Digitale Gesellschaft</option>
                                            <option value="Digitales Rettungsmanagement">Digitales Rettungsmanagement</option>
                                            <option value="E-Commerce">E-Commerce</option>
                                            <option value="Elektro- und Informationstechnik">Elektro- und Informationstechnik</option>
                                            <option value="Fachübersetzer">Fachübersetzer</option>
                                            <option value="Geovisualisierung">Geovisualisierung</option>
                                            <option value="Informatik">Informatik</option>
                                            <option value="Informationssicherheit">Informationssicherheit</option>
                                            <option value="Kommunikationsdesign">Kommunikationsdesign</option>
                                        </select>
                                        
                                    </div>
                                        @if ($errors->has('studiengang'))
                                            <ul class="list-group" style="line-height:15px;">
                                                @foreach ($errors->get('studiengang') as $error)
                                                    <div class="d-flex justify-content-between rounded">
                                                        <li class="list-group-item list-group-item-danger">
                                                            <span class="text-danger">{{ $error }}</span>
                                                        </li>
                                                    </div>
                                                @endforeach
                                            </ul>
                                        @endif
                                </td>
                            <tr>
                            <tr>
                                <th>Semester</th>
                                <td>
                                    <input class="form-control" name="semester" type="text">
                                        @if ($errors->has('semester'))
                                            <ul class="list-group" style="line-height:15px;">
                                                @foreach ($errors->get('semester') as $error)
                                                    <div class="d-flex justify-content-between rounded">
                                                        <li class="list-group-item list-group-item-danger">
                                                            <span class="text-danger">{{ $error }}</span>
                                                        </li>
                                                    </div>
                                                @endforeach
                                            </ul>
                                        @endif
                                </td>
                            <tr>
                            <tr>
                                <th>Immatrikulation</th>
                                <td>
                                    <input class="form-control" name="immatrikulation"type="text">
                                        @if ($errors->has('immatrikulation'))
                                            <ul class="list-group" style="line-height:15px;">
                                                @foreach ($errors->get('immatrikulation') as $error)
                                                    <div class="d-flex justify-content-between rounded">
                                                        <li class="list-group-item list-group-item-danger">
                                                            <span class="text-danger">{{ $error }}</span>
                                                        </li>
                                                    </div>
                                                @endforeach
                                            </ul>
                                        @endif
                                </td>
                            <tr>
                            <tr>
                                <th>Exmatrikulation</th>
                                <td>
                                    <input class="form-control" name="exmatrikulation" type="text">
                                        @if ($errors->has('exmatrikulation'))
                                            <ul class="list-group" style="line-height:15px;">
                                                @foreach ($errors->get('exmatrikulation') as $error)
                                                    <div class="d-flex justify-content-between rounded">
                                                        <li class="list-group-item list-group-item-danger">
                                                            <span class="text-danger">{{ $error }}</span>
                                                        </li>
                                                    </div>
                                                @endforeach
                                            </ul>
                                        @endif
                                </td>
                            <tr>
                        </tbody>
                    
                   </table>
                </div>
        </div>
        <div class="submit">
            <a href="{{ route('studentlist.index') }}"class="btn btn-secondary">Zurück</a>
            <input class="btn btn-secondary" type="submit" name="submit" value="Speichern">
        </div>
    </form>
    <div class="card" id="updated">
        <div class="card-header" style="height: 30px">
            <h6>last updated at: </h6>
        </div>
    </div>
@endsection
