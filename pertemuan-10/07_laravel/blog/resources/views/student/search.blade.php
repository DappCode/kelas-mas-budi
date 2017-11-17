@extends('layouts.default')

@section('title', 'student')

@section('content')
    @if(Session::get('succses_message'))
        <div class="alert alert-block alert-info">
        {{Session::get('succses_message')}}
        </div>
    @endif
  

    <h1 class="mr-auto">Data Siswa</h1>
    <div class="form-inline my-2 my-lg-0">
      <a href="{{route('student.create')}}"  class="btn btn-primary my-2 my-sm-0" type="submit">Add Student</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
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
                    <td>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                            <input type="hidden" name="_method" value="delete" />
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('kamu yakin ingin menghapus {{ $student->nama }} ?')" >Deleted</button>
                        </form>
                        <a href="{{ route('student.edit', $student->id)}}" class="btn btn-primary">Update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
    @if ($students->lastPage() > 1)
    <ul class="pagination ml-auto">
        <li class="{{ ($students->currentPage() == 1) ? ' disabled' : '' }} page-item">
            <a class=" page-link " href="{{ $students->url(1) }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @for ($i = 1; $i <= $students->lastPage(); $i++)
            <li class="{{ ($students->currentPage() == $i) ? ' active' : '' }} page-item">
                <a class=" page-link " href="{{ $students->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($students->currentPage() == $students->lastPage()) ? ' disabled' : '' }} page-item">
            <a href="{{ $students->url($students->currentPage()+1) }}" class="page-link" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
@endif


    
@stop