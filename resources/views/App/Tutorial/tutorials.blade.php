
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
        <section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr lg-no-padding-lr">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-md-8 col-sm-10 blog-content sm-no-padding-lr">
                        @if(!empty($documentations))
                            <h4 class="text-center mt-5" style="text-transform:uppercase;">All {{$documentations[0]["language"]->language_name ?? ""}} Posts</h4>
                        @endif
                        <ul class="blog-widget blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>
                            @if(!empty($documentations))
                            @foreach($documentations as $documentation)
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="d-flex box-shadow-medium bg-white padding-30px-all xs-padding-15px-all border-radius-4px">
                                    <div class="media-body flex-grow-1">
                                        <!-- <a href="blog-masonry.html" class="text-extra-small alt-font d-block margin-5px-bottom">11 February 2019</a> -->
                                        <a href="{{url('documentation',$documentation->id)}}" class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-22px">{{$documentation->title}}</a>
                                        <!-- <span class="text-extra-small alt-font">By <a href="blog-masonry.html">Stefano shane</a></span> -->
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            @endforeach
                            @endif 
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->



        @endsection