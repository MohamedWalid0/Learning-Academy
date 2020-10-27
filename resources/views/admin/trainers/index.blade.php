@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Trainers</h4>
            </div>
            <div>
                <a href="{{route('trainers.create')}}" class="btn btn-primary">Add Trainer</a>
            </div>
        </div>


        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Spec</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)

                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>
                        <img src="{{asset('front/img/' . $trainer->img)}}" width="70px" height="70px" class="rounded-circle" alt="">
                    </td>
                    <td>{{$trainer->name}}</td>

                    <td>
                        @if ( $trainer->phone !== null )
                            {{$trainer->phone}}
                        @else
                            Not Exist
                        @endif
                    </td>
                    <td>
                        @if ( $trainer->spec !== null )
                            {{$trainer->spec}}
                        @else
                            Not Exist
                        @endif
                    </td>



                    <td>
                        <a href="{{route('trainers.edit' , $trainer->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('trainers.delete' , $trainer->id)}}" class="btn btn-danger">Delete</a>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>


@endsection
