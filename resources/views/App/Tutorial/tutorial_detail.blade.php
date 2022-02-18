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
        
        <!-- start page title -->
        <section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('app/images/portfolio-bg.jpg');">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-10 col-lg-10 col-md-10 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block" style="text-transform: uppercase">Categorey : {{$documentation["language"]->language_name ?? ""}}</h1>
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="text-transform: uppercase">{{$documentation->title ?? "Every new print and color of the season"}}</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->



        <!-- start section -->
        <section class="shopping-right-side-bar pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 col-md-8 shopping-content padding-55px-right md-padding-15px-right sm-margin-30px-bottom">
                       
                       <!-- <embed src="{{asset('cv.pdf#toolbar=0')}}" type="application/pdf" width="100%" height="1024px" /> -->
                       <?php echo $documentation->content; ?>
                    </div>



                    <!-- start sidebar -->
                    <aside class="col-12 col-lg-3 col-md-4 shopping-sidebar">
                        <div class="border-bottom border-color-medium-gray padding-3-rem-bottom margin-3-rem-bottom">
                            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by Language</span>
                            <ul class="list-style-07 filter-category">
                                @if(!empty($languages))
                                @foreach($languages as $language)
                                    <li><a href="{{url('tutorial',$language->id)}}" style="text-transform: uppercase"><span class="product-cb product-category-cb"></span>{{$language->language_name}}</a></li>
                                @endforeach
                                @endif
                                <!-- <li><a href="#"><span class="product-cb product-category-cb"></span>CSS</a></li>
                               <li><a href="#"><span class="product-cb product-category-cb"></span>Bootstrap</a></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>PHP Laravel</a></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Theme Development</a></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Plugins</a></li> -->
                            </ul>
                        </div>
                    </aside>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
        <!-- end section -->

        @endsection