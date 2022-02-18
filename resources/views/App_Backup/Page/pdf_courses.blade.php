@extends("App.layout")
@section('content')

<!-- start revolution slider -->
        <section class="p-5 example home-startup bg-dark-slate-blue">
            <article class="content">
                <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                    
                </div>
            </article>
        </section>
<!-- end revolution slider -->


<!-- start section --> 
        <section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                     
                            @if(!empty($pdfCourses))
                            @foreach($pdfCourses as $pdfCourse)
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="{{$pdfCourse->book_url}}" title="" target="_blank"><img src="https://via.placeholder.com/800x560" alt=""></a>
                                        <a class="blog-category alt-font">{{$pdfCourse->language->language_name}}</a>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a class="alt-font text-small d-inline-block margin-10px-bottom">{{$pdfCourse->edition}}</a>
                                        <a class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray margin-15px-bottom d-block">{{$pdfCourse->book_name}}</a>
                                        <p>This Book Publish By {{$pdfCourse->publisher_name}} and Post on {{$pdfCourse->created_at->diffForHumans()}}</p>
                                        <div class="d-flex align-items-center">
                                            <img class="avtar-image" src="https://via.placeholder.com/125x125" alt=""/>
                                            <span class="alt-font text-small me-auto">By <a href="#" class="text-sky-blue-hover">{{$pdfCourse->author_name}}</a></span>
                                            <a href="{{$pdfCourse->book_url}}" class="blog-like alt-font text-large" target="_blank"><i class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            @endforeach
                            @endif
                        </ul>
                        <!-- start pagination -->
                        <div class="col-12 d-flex justify-content-center margin-7-half-rem-top md-margin-5-rem-top wow animate__fadeIn">
                            <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right icon-extra-small  d-xs-none"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> 

@endsection