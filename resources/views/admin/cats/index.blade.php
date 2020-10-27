@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Categories</h4>
            </div>
            <div>
                <a href="{{route('cats.create')}}" class="btn btn-primary">Add Category</a>
            </div>
        </div>


        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $category)

                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{route('cats.edit' , $category->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('cats.delete' , $category->id)}}" class="btn btn-danger">Delete</a>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>


@endsection
