@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Categories / Edit / {{$cat->name}} </h4>
            </div>
            <div>
                <a href="{{route('cats')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-5">


        @include('admin.inc.errors')

        <form action="{{ route ('cats.update' ,$cat->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label >Category Name</label>
                <input type="text" name="catName" class="form-control" value="{{$cat->name ?? ''}}" >
            </div>

            <button type="submit" name="submit" class="btn btn-success my-5">Update</button>
        </form>

    </div>

@endsection
