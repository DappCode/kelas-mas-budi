@extends('layouts.default')

@section('title', 'Tambah Siswa')

@section('content')
<div class="container">
    <!-- enctype = untuk mengupload file -->
    <form enctype="multipart/form-data" method="POST" action="{{ route('student.store') }}">

    <!-- Wajib di isi setiap kali ingin menginput data -->
    {{ csrf_field() }}   
    <div class="form-group">
        <label for="exampleInputEmail1">Name: </label>
        <input name="nama" type="text" class="form-control" placeholder="Your Name"> 
        @if($errors->first('nama'))
            <p class="text-danger  "> {{ $errors->first('nama') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Address: </label>
        <input name="address" type="text" class="form-control" placeholder="Your Address">
        @if($errors->first('address'))
            <p class="text-danger  "> {{ $errors->first('address') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Age: </label>
        <input name="age" type="number" class="form-control" placeholder="Your Age">
        @if($errors->first('age'))
            <p class="text-danger  "> {{ $errors->first('age') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Email: </label>
        <input name="email" type="email" class="form-control" placeholder="Your Email">
        @if($errors->first('email'))
            <p class="text-danger  "> {{ $errors->first('email') }} </p>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Your Picture: </label>
        <input name="photo" type="file" class="form-control" placeholder="Your photo">
        
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
 <!-- Untuk Menampilkan error -->
<!-- @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif -->  
@stop

</div>

