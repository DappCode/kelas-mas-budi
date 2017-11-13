@extends('layouts.default')

@section('title', 'student')

@section('content')
    
    <h1>Data Siswa</h1>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }} </td>
                    <td> {{ $student->nama }} </td>
                    <td> {{ $student->address }} </td>
                    <td> {{ $student->age }} </td>
                    <td> {{ $student->email }} </td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    
@stop