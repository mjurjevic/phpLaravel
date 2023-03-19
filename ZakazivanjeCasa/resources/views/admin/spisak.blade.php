@extends('layouts.admin')

@section('sadrzaj')

    <h1>Admin spisak</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ucionica</th>
                <th>Status</th>
                <th>Trajanje</th>
                <th>Termin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($termin as $t)
            <tr>
                <td>{{$t->ucionica->naziv}}</td>
                <td>{{$t->status}}</td>
                <td>{{$t->trajanje}}</td>
                <td>{{$t->termin}}</td>
                <td>
                    <a href="{{route('admin-zakazi',['id'=>$t->id])}}">Detaljnije</a>
                </td> 
            </tr>
            @endforeach
        </tbody>

    </table>

@stop