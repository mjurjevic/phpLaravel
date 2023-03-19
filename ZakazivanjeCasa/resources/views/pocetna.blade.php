@extends('layouts.javni')

@section('sadrzaj')

    <h1>Spisak predmeta i termina</h1>
    <a href="{{route('zakazi')}}">Zakazite termin</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ucionica</th>
                <th>Predmet</th>
                <th>Termin</th>
                <th>Trajanje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($termin as $t)
            <tr>
                <td>{{$t->ucionica->naziv}}</td>
                <td>{{$t->predmet}}</td>
                <td>{{$t->termin}}</td>
                <td>{{$t->trajanje}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

@stop