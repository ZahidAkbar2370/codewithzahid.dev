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


<!-- start blog content section --> 
        <section class="blog-right-side-bar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                        <div class="row">
                            <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                                <ul class="list-unstyled margin-2-rem-bottom">
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a>{{$lecture->created_at}}</a></li>
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="{{$lecture->document_url}}" target="_blank">Document URL</a></li>
                                    <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>By <a>Zahid Akbar</a></li>
                                </ul>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">{{$lecture->title}}</h5>

                                <h6 class="alt-font font-weight-300 text-extra-dark-gray margin-4-half-rem-bottom" >{{$lecture->language->language_name}}</h6>
                                <!-- start youtube video -->
                                <div class="blog-post-content margin-4-half-rem-bottom">
                                    <div class="fit-videos">
                                        <iframe width="560" height="315" src="{{$lecture->video_link}}" allowfullscreen></iframe>
                                    </div> 
                                </div>
                                <!-- end youtube video -->
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                            
                            <div class="col-12 mx-auto margin-50px-bottom md-margin-30px-bottom wow animate__fadeIn">
                                <div class="d-block d-md-flex box-shadow-small align-items-center border-radius-5px padding-4-rem-all">
                                    <div class="w-130px text-center margin-60px-right sm-margin-auto-lr">
                                        <img src="https://via.placeholder.com/125x125" class="rounded-circle w-110px" alt=""/>
                                        <a href="blog-grid.html" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">Zahid AKbar</a>
                                        <span class="text-medium d-block line-height-18px sm-margin-15px-bottom">CEO CWZ</span>
                                    </div>
                                    <div class="w-75 sm-w-100 last-paragraph-no-margin text-center text-md-start">
                                        <p>Aslam o Alaikum/Hi, I'm Zahid Akbar Founder & CEO of Code With Zahid. I Worked on Different Technologies are given, <b>HTMl, CSS, BOOTSTRAP, JAVA, CSHARP, JQUERY, PHP LARAVEL, FLUTTER, WORDPRESS, VUE JS, REACT JS & C++.</b></p>
                                        <a href="cv.pdf" class="btn btn-link btn-large text-extra-dark-gray margin-20px-top">My Resume</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <!-- start sidebar -->
                   <!--  <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                        <div class="d-inline-block w-100 margin-5-rem-bottom">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Search posts</span>
                            <form id="search-form" role="search" method="get" action="search-result.html">
                                <div class="position-relative">
                                    <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off" />
                                    <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ms-0"></i></button>
                                </div> 
                            </form>
                        </div>
                        <div class="border-all border-color-medium-gray border-radius-4px padding-40px-all text-center margin-5-rem-bottom xs-margin-35px-bottom">
                            <a href="about-me.html"><img src="https://via.placeholder.com/125x125" alt="" class="rounded-circle margin-5px-bottom w-100px d-block mx-auto"/></a>
                            <a href="blog-grid.html" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">Colene Landin</a>
                            <span class="text-medium d-block line-height-18px margin-20px-bottom">Co-founder</span>
                            <p>Lorem ipsum is simply dummy text of the printing and industry lorem ipsum has been standard.</p>
                            <div class="social-icon-style-02 text-center">
                                <ul class="extra-small-icon">
                                    <li class="mx-0"><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                    <li class="mx-0"><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                                    <li class="mx-0"><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                    <li class="mx-0"><a class="instagram" href="http://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categories</span>
                            <ul class="list-style-07 list-unstyled">
                                <li><a href="blog-masonry.html">Entertainment</a><span class="item-qty">10</span></li>
                                <li><a href="blog-masonry.html">Business</a><span class="item-qty">05</span></li>
                                <li><a href="blog-masonry.html">Creative</a><span class="item-qty">03</span></li>
                                <li><a href="blog-masonry.html">Lifestyle</a><span class="item-qty">02</span></li>
                                <li><a href="blog-masonry.html">Fashion</a><span class="item-qty">19</span></li>
                                <li><a href="blog-masonry.html">Design</a><span class="item-qty">21</span></li>
                            </ul>
                        </div>
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                            <ul class="latest-post-sidebar position-relative">
                                <li class="d-flex wow animate__fadeIn" data-wow-delay="0.2s">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-post-layout-01.html"><img class="border-radius-3px" src="https://via.placeholder.com/940x940" alt=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1">
                                        <a href="blog-post-layout-01.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Fashion is anything</a>
                                        <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                                    </div>
                                </li>
                                <li class="d-flex wow animate__fadeIn" data-wow-delay="0.4s">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-post-layout-02.html"><img class="border-radius-3px" src="https://via.placeholder.com/800x800" alt=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1">
                                        <a href="blog-post-layout-02.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Design transcends </a>
                                        <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                                    </div>
                                </li>
                                <li class="d-flex wow animate__fadeIn" data-wow-delay="0.6s">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-post-layout-03.html"><img class="border-radius-3px" src="https://via.placeholder.com/800x800" alt=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1">
                                        <a href="blog-post-layout-03.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Never give in except</a>
                                        <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom md-padding-3-rem-top wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Tags cloud</span>
                            <div class="tag-cloud">
                                <a href="blog-grid.html">Development</a>
                                <a href="blog-grid.html">Mountains</a>
                                <a href="blog-grid.html">Lifestyle</a>
                                <a href="blog-grid.html">Hotel</a>
                                <a href="blog-grid.html">Event</a>
                                <a href="blog-grid.html">Multimedia </a>
                                <a href="blog-grid.html">Fashion</a>
                            </div>
                        </div>
                        <div class="wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Instagram</span>
                            <ul class="instafeed-grid instafeed-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-3col sm-grid-3col xs-grid-3col gutter-small" data-total="6">
                                <li class="grid-item"><figure><a href="#" data-href="" target="_blank"><img src="#" data-src="" class="insta-image" alt="" /><span class="insta-counts"><i class="fab fa-instagram"></i></span></a></figure></li>
                            </ul>
                        </div>
                    </aside> -->
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
        <!-- end blog content section -->


@endsection