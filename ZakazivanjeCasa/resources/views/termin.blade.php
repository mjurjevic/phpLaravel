@extends('layouts.javni')

@section('sadrzaj')

    <h1>Zakazi termin</h1>

    <form action="{{route('prihvati-zakazi')}}" method='post'>
        @csrf

        <div class="form-group">
            <label>Nastavnik</label>
            <input type="text" name='nastavnik'>
        </div>

        <div class="form-group">
            <label>Predmet</label>
            <input type="text" name='predmet'>
        </div>

        <div class="form-group">
            <label>Trajanje(unesite broj)</label>
            <input type="number" name='trajanje'>
        </div>

        <div class="form-group">
            <label>Ucionica</label>
            <select name="ucionica_id">
                @foreach($zakazi as $z)
                    <option value="{{$z->id}}">{{$z->naziv}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="termin">Zeljeni datum termina:</label>
            <input type="datetime-local" name='termin'>
        </div>
        <button class='btn btn-primary'>Zakazi</button>
    </form>

@stop