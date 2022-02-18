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
        <section class="bg-light-gray pt-5 padding-ten-lr xl-padding-two-lr lg-padding-three-lr sm-no-padding-lr">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="text-black">All Programming Lectures</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-clean blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @if(!empty($lectures))
                            @foreach($lectures as $lecture)
                            <li class="grid-item fashion wow animate__fadeIn">
                                <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <!-- https://via.placeholder.com/850x885 -->
                                        <a href="{{url('lecture-detail',$lecture->id)}}"><img src="Images/LectureThumbnail\{{$lecture->thumbnail}}" alt="">
                                            <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                                <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-details padding-30px-all xl-padding-25px-lr">
                                        <a href="#" class="post-author text-medium text-uppercase">{{$lecture['language']->language_name}}</a>
                                        <a href="#" class="text-extra-dark-gray font-weight-500 alt-font d-block">{{$lecture->title}}</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @endif
                            <!-- end blog item -->
                            
                        </ul>
                    </div>                    
                    <!-- start pagination -->
                    <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top wow animate__fadeIn">
                        {{ $lectures->links() }}
                    </div>
                    <!-- end pagination -->
                </div>
            </div>
        </section>
        <!-- end section --> 

@endsection