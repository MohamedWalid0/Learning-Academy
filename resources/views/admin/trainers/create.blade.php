@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Trainers / Add New / </h4>
            </div>
            <div>
                <a href="{{route('trainers')}}" class="btn btn-primary"> Back </a>
            </div>
    </div>

        @include('admin.inc.errors')

        <form action="{{ route ('trainers.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >Trainer Name</label>
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="form-group">
                <label >Speciality</label>
                <input type="text" name="spec" class="form-control" >
            </div>
            <div class="form-group">
                <label >Phone</label>
                <input type="text" name="phone" class="form-control" >
            </div>
            <div class="form-group">
                <input type="file" name="img" class="form-control-file" >
            </div>

            <button type="submit" class="btn btn-primary my-5">Submit</button>
        </form>

    </div>

@endsection
