@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Courses / Edit / {{$course->name}} </h4>
            </div>
            <div>
                <a href="{{route('trainers')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-5">


        @include('admin.inc.errors')

        <form action="{{ route ('courses.update' ,$course->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >Course Name</label>
                <input type="text" name="name" class="form-control" value="{{$course->name}}" >
            </div>
            <div class="form-group">
                <label >Category Name</label>
                <select class="custom-select" name="cat_id" >
                    @foreach ($cats as $cat)
                        <option value="{{$cat->id}}" @if ($cat->id == $course->cat_id) selected @endif  >{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label >Trainer Name</label>
                <select class="custom-select" name="trainer_id">
                    @foreach ($trainers as $trainer)
                        <option value="{{$trainer->id}}" @if ($trainer->id == $course->trainer_id) selected @endif >{{$trainer->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label >Description</label>
            <textarea type="text" name="desc" class="form-control" > {{ $course->desc }}</textarea>
            </div>
            <div class="form-group">
                <label >Content</label>
                <textarea type="text" name="content" class="form-control" >{{ $course->content }}</textarea>
            </div>
            <div class="form-group">
                <label >Price</label>
                <input type="text" name="price" class="form-control" value="{{$course->price}}" >
            </div>
            <div class="form-group">
                <input type="file" name="img" class="form-control-file" >
            </div>

            <button type="submit" class="btn btn-primary my-5">Update</button>
        </form>

    </div>

@endsection
