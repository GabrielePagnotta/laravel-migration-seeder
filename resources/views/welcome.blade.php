@extends('layouts.structure')

@section("title","tabella")

@section('table')


    <table>
        <thead>
            <tr>
                <th class="mx-5 bg-slate-500">ID</th>
                <th class="mx-5 bg-slate-500">CITY</th>
                <th class="mx-5 bg-slate-500">HOUR</th>
                <th class="mx-5 bg-slate-500">NAME</th>
                <th class="mx-5 bg-slate-500">BINARY</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table as $elem)
            <tr>
                <td>{{$elem->id}}</td>
                <td>{{$elem->city}}</td>
                <td>{{$elem->hour}}</td>
                <td>{{$elem->name}}</td>
                <td>{{$elem->binary}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection