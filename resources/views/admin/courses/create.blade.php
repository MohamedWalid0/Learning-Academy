@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Courses / Add New / </h4>
            </div>
            <div>
                <a href="{{route('courses')}}" class="btn btn-primary"> Back </a>
            </div>
    </div>

        @include('admin.inc.errors')

        <form action="{{ route ('courses.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >Course Name</label>
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="form-group">
                <label >Category Name</label>
                <select class="custom-select" name="cat_id">
                    @foreach ($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label >Trainer Name</label>
                <select class="custom-select" name="trainer_id">
                    @foreach ($trainers as $trainer)
                        <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label >Description</label>
                <textarea type="text" name="desc" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label >Content</label>
                <textarea type="text" name="content" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label >Price</label>
                <input type="text" name="price" class="form-control" >
            </div>
            <div class="form-group">
                <input type="file" name="img" class="form-control-file" >
            </div>

            <button type="submit" class="btn btn-primary my-5">Submit</button>
        </form>

    </div>

@endsection
