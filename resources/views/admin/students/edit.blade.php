@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>students / Edit / {{$student->name}} </h4>
            </div>
            <div>
                <a href="{{route('students')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-5">


        @include('admin.inc.errors')

        <form action="{{ route ('students.update' ,$student->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >student Name</label>
                <input type="text" name="name" class="form-control" value="{{$student->name}}" >
            </div>

            <div class="form-group">
                <label >Email</label>
                <input type="text" name="email" class="form-control" value="{{$student->email}}" >
            </div>

            <div class="form-group">
                <label >Spec</label>
                <input type="text" name="subject" class="form-control" value="{{$student->spec}}" >
            </div>

            <button type="submit" class="btn btn-primary my-5">Update</button>
        </form>

    </div>

@endsection
