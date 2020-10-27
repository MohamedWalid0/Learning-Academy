@if($errors->any())

    <ul class="list-unstyled my-4 alert alert-danger">

        @foreach ($errors->all() as $error)
            <li class="my-3">{{$error}}</li>
        @endforeach

    </ul>



@endif
