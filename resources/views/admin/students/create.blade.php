@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>students / Add New / </h4>
            </div>
            <div>
                <a href="{{route('students')}}" class="btn btn-primary"> Back </a>
            </div>
    </div>

        @include('admin.inc.errors')

        <form action="{{ route ('students.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >Student Name</label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >email</label>
                <input type="text" name="email" class="form-control" >
            </div>
            <div class="form-group">
                <label >Spec</label>
                <input type="text" name="subject" class="form-control" >
            </div>

            <button type="submit" class="btn btn-primary my-5">Submit</button>
        </form>

    </div>

@endsection
