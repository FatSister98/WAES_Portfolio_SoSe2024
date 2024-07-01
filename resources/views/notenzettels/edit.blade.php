@extends('layouts.app')

@section('content')
    <form action="{{ route('studentlist.update', $studentlist) }}" method="POST">
        @csrf
        @method('put')
        <div class="card" id="formular">
                <div class="card-header d-flex justify-content-around">
                    <h2>Daten von {{$studentlist->name}} bearbeiten</h2>
                </div>
                <div class="card-body d-flex justify-content-end">
                   <table class="table">
                        <tbody>
                            <tr>
                                <th>
                                    <img id  ="pb"src="{{ $studentlist->profilePic }}" style="border-radius: 50%">
                                </th>
                                <td>
                                    <input class="rounded border-1" name="profilePic" type="text" value="{{ $studentlist->profilePic}}" style="margin-top: 25px">
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
                                    <input class="rounded border-1" name="name" type="text" value="{{$studentlist->name}}">
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
                                    <input class="rounded border-1" name="matNr" type="text" value="{{$studentlist->matNr}}">
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
                                        <select class="custom-select" name="uni" style="width:180px" value="{{$uni}}">
                                            <option selected disabled>Uni auswählen</option>
                                            <option value="Uni Würzburg" {{$uni == "Uni Würzburg" ? "selected":""}}>Uni Würzburg</option>
                                            <option value="THWS" {{$uni == "THWS" ? "selected":""}}>THWS</option>
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
                                        <select class="custom-select" name="studiengang" style="width:180px">
                                            <option disabled>Studiengang auswählen</option>
                                        <option value="Bauingenieurwesen" {{ $studentlist->studiengang == 'Bauingenieurwesen' ? 'selected' : '' }}>Bauingenieurwesen</option>
                                        <option value="BWL" {{ $studentlist->studiengang == 'BWL' ? 'selected' : '' }}>BWL</option>
                                        <option value="Business Analytics" {{ $studentlist->studiengang == 'Business Analytics' ? 'selected' : '' }}>Business Analytics</option>
                                        <option value="Digitale Gesellschaft" {{ $studentlist->studiengang == 'Digitale Gesellschaft' ? 'selected' : '' }}>Digitale Gesellschaft</option>
                                        <option value="Digitales Rettungsmanagement" {{ $studentlist->studiengang == 'Digitales Rettungsmanagement' ? 'selected' : '' }}>Digitales Rettungsmanagement</option>
                                        <option value="E-Commerce" {{ $studentlist->studiengang == 'E-Commerce' ? 'selected' : '' }}>E-Commerce</option>
                                        <option value="Elektro- und Informationstechnik" {{ $studentlist->studiengang == 'Elektro- und Informationstechnik' ? 'selected' : '' }}>Elektro- und Informationstechnik</option>
                                        <option value="Fachübersetzer" {{ $studentlist->studiengang == 'Fachübersetzer' ? 'selected' : '' }}>Fachübersetzer</option>
                                        <option value="Geovisualisierung" {{ $studentlist->studiengang == 'Geovisualisierung' ? 'selected' : '' }}>Geovisualisierung</option>
                                        <option value="Informatik" {{ $studentlist->studiengang == 'Informatik' ? 'selected' : '' }}>Informatik</option>
                                        <option value="Informationssicherheit" {{ $studentlist->studiengang == 'Informationssicherheit' ? 'selected' : '' }}>Informationssicherheit</option>
                                        <option value="Kommunikationsdesign" {{ $studentlist->studiengang == 'Kommunikationsdesign' ? 'selected' : '' }}>Kommunikationsdesign</option>
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
                                    <input class="rounded border-1" name="semester" type="text" value="{{$studentlist->semester}}">
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
                                    <input class="rounded border-1" name="immatrikulation" type="text" value="{{$studentlist->immatrikulation}}">
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
                                    <input class="rounded border-1" name="exmatrikulation" type="text" value="{{$studentlist->exmatrikulation}}">
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
