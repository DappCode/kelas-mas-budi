@extends('layouts.default')

@section('title', 'Edit Siswa')

@section('content')
<div class="container">
    <form method="POST" enctype="multipart/form-data" action="{{ route('student.bla', $student->id) }}">
    <input type="hidden" name="_method" value="put" />
    {{ csrf_field() }}
    <!-- Wajib di isi setiap kali ingin menginput data -->   
    <div class="form-group">
        <label>Name: </label>
        <input name="nama" type="text" value=" {{ $student->nama }} " class="form-control" placeholder="Your Name"> 
        @if($errors->first('nama'))
            <p class="text-danger  "> {{ $errors->first('nama') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label>Address: </label>
        <input value=" {{ $student->address }} " name="address" type="text" class="form-control" placeholder="Your Address">
        @if($errors->first('address'))
            <p class="text-danger  "> {{ $errors->first('address') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label>Age: </label>
        <input value=" {{ $student->age }} " name="age" type="text" class="form-control" placeholder="Your Age">
        @if($errors->first('age'))
            <p class="text-danger  "> {{ $errors->first('age') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label>Email: </label>
        <input value=" {{ $student->email }} " name="email" type="email" class="form-control" placeholder="Your Email">
        @if($errors->first('email'))
            <p class="text-danger  "> {{ $errors->first('email') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label>Photo:(Kosongkan jika tidak diganti) </label>
        <input value=" {{ $student->email }} " name="photo" type="file" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <br>
@stop

</div>

