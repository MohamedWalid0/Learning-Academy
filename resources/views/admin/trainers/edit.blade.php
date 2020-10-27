@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Trainers / Edit / {{$trainer->name}} </h4>
            </div>
            <div>
                <a href="{{route('trainers')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-5">


        @include('admin.inc.errors')

        <form action="{{ route ('trainers.update' ,$trainer->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label >Trainer Name</label>
                <input type="text" name="name" class="form-control" value="{{$trainer->name ?? ''}}" >
            </div>

            <div class="form-group">
                <label >Speciality</label>
                <input type="text" name="spec" class="form-control" value="{{$trainer->spec ?? ''}}" >
            </div>
            <div class="form-group">
                <label >Phone</label>
                <input type="text" name="phone" class="form-control"  value="{{$trainer->phone ?? ''}}" >
            </div>

            <img src="{{asset('front/img/' . $trainer->img)}}" width="70px" height="70px" class="rounded-circle my-5" alt="">

            <div class="form-group">
                <input type="file" name="img" class="form-control-file" >
            </div>

            <button type="submit" name="submit" class="btn btn-success my-5">Update</button>
        </form>

    </div>

@endsection
