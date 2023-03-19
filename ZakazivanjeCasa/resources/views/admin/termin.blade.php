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
            <tr>
                <th>{{$zakazi->ucionica->naziv}}</th>
                <th>
                    <form action="{{route('admin-izmeni',['id'=>$zakazi->id])}}" method="post">
                        @csrf

                        <label>
                            <input type="radio" 
                            @if($zakazi->status==-1)
                                checked
                            @endif
                            name='status' value='-1'>
                            Kreirana
                        </label>

                        <label>
                            <input type="radio" 
                            @if($zakazi->status==0)
                                checked
                            @endif
                            name='status' value='0'>
                            Odbijena
                        </label>

                        <label>
                            <input type="radio" 
                            @if($zakazi->status==1)
                                checked
                            @endif
                            name='status' value='1'>
                            Prihvacena
                        </label>
                        <button class='btn btn-primary'>Izmeni</button>
                    </form>
                </th>
                <th>{{$zakazi->trajanje}}</th>
                <th>{{$zakazi->termin}}</th>
            </tr>
        </tbody>

    </table>

@stop