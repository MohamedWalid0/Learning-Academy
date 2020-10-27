@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Categories / Add New / </h4>
            </div>
            <div>
                <a href="{{route('cats')}}" class="btn btn-primary"> Back </a>
            </div>
    </div>

        @include('admin.inc.errors')

        <form action="{{ route ('cats.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label >Category Name</label>
                <input type="text" name="catName" class="form-control" >
            </div>

            <button type="submit" class="btn btn-primary my-5">Submit</button>
        </form>

    </div>

@endsection
