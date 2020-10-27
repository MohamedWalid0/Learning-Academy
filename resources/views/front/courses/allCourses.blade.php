@extends('front.layouts.layout')
@section('styles')


@endsection
@section('content')



    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Home<span>/</span>All Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                    <div class="mb-5">
                        <input type="text" class="form-control w-100  text-center " placeholder=" &#x1F50E;  Search" id="keyword">
                    </div>
                </div>
            </div>
            <div class="row" id="allCourses">

                @foreach ($courses as $course)

                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="single_special_cource">
                            <img src="{{asset('front/img')}}/{{$course->img}}" class="special_img" alt="">

                            <div class="special_cource_text">
                                <a href="{{route('front.courseCat' , $course->cat->id)}}" class="btn_4">{{$course->cat->name}}</a>
                                <h4>${{$course->price}}</h4>
                                <a href="{{route('front.show' , [ $course->cat->id , $course->id ])}}"><h3>{{$course->name}}</h3></a>
                                <p>{{$course->desc}}</p>

                            </div>

                        </div>
                    </div>

                @endforeach



            </div>





        </div>
    </section>
    <!--::blog_part end::-->




@section('scripts')
<script>
    $('#keyword').keyup(function(){
        let keyword = $(this).val() ;
        let url = "{{route('front.allCourses.search')}}" + "?keyword=" + keyword ;

        $.ajax({
            type : "GET" ,
            url : url ,
            contentType : false ,
            processDate : false ,
            success : function(data){


                $('#allCourses').empty();

                if (data === undefined || data.length == 0) {
                        $('#allCourses').append(`
                            <div class="alert alert-danger w-100 text-center"> No Result found</div>
                        `)
                }


                for (course of data) {

                    $('#allCourses').append(`


                        <div class="col-sm-6 col-lg-4 my-3">
                            <div class="single_special_cource">
                                <img src="<?php echo asset('front/img/${course.img}') ; ?>" class="special_img" alt="">

                                <div class="special_cource_text">

                                    <h4>${course.price}</h4>
                                    <a href="<?php echo URL::to('cat/${course.cat_id}/course/${course.id}') ; ?>"><h3>${course.name}</h3></a>
                                    <p>${course.desc}</p>

                                </div>

                            </div>
                        </div>


                    `)






                }

            }
        })



    })
</script>
@endsection

@endsection
