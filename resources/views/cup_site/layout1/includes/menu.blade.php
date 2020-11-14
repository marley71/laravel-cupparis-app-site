
@foreach($menu as $item)
    <li class="nav-item dropdown active">
        @if (count(Arr::get($item,'children',[])) == 0)
            <a href="/{{$route_prefix}}/{{Arr::get($item,'menu_it')}}" id="{{Arr::get($item,'menu_it')}}" class="nav-link"
               aria-haspopup="true"
               aria-expanded="false">
                {{Arr::get($item,'menu_it')}}
            </a>
        @else
            <a href="/{{$route_prefix}}/{{Arr::get($item,'menu_it')}}" id="{{Arr::get($item,'menu_it')}}" class="nav-link dropdown-toggle"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false">
                {{Arr::get($item,'menu_it')}}
            </a>

            <div aria-labelledby="mainNavHome" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover">
                <ul class="list-unstyled m-0 p-0">
                    @foreach($item['children'] as $child)
                    <li class="">
                        <a href="/{{$route_prefix}}/{{Arr::get($child,'menu_it')}}" class="" data-toggle="">{{$child['menu_it']}}</a>
                    </li>
                    @endforeach
{{--                    <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Niche</a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                            <li class="dropdown-item"><a href="niche.classifieds.html" class="dropdown-link">Classifieds</a></li>--}}
{{--                            <li class="dropdown-item"><a href="niche.realestate.html" class="dropdown-link">Real Estate</a></li>--}}
{{--                            <li class="dropdown-item"><a href="niche.restaurant.html" class="dropdown-link">Restaurant</a></li>--}}
{{--                            <li class="dropdown-item"><a href="niche.caffe.html" class="dropdown-link">Caffe</a></li>--}}
{{--                            <li class="dropdown-item"><a href="niche.lawyer.html" class="dropdown-link">Lawyer</a></li>--}}
{{--                            <li class="dropdown-item"><a href="niche.tattoo.html" class="dropdown-link">Tattoo</a></li>--}}
{{--                            <li class="dropdown-item"><a href="niche.hosting.html" class="dropdown-link">Hosting</a></li>--}}
{{--                            <li class="dropdown-item"><a href="#" class="dropdown-link disabled">More : Soon</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown-item"><a href="help-center-1-index.html" class="dropdown-link">Help Center 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="help-center-2-index.html" class="dropdown-link">Help Center 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="fullajax-index.html" class="dropdown-link" target="_blank">--}}
{{--                            <span class="badge badge-secondary float-end">new</span>--}}
{{--                            Full Ajax--}}
{{--                        </a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="https://theme.stepofweb.com/Smarty/v2.3.1/HTML_BS4/start_v4.html" class="dropdown-link" target="_blank">Smarty v2.x <i class="fi fi-emoji-smile text-muted"></i> <span class="d-block text-muted pt--6 fs--13 font-weight-light">You also get previous <br> Smarty version. Eh?</span></a></li>--}}
                </ul>
            </div>
        @endif
    </li>
@endforeach






<!-- mobile only image + simple search (d-block d-sm-none) -->
<li class="nav-item d-block d-sm-none">

    <!-- image -->
    <div class="mb-4">
{{--        <img width="600" height="600" class="img-fluid" src="demo.files/svg/artworks/people_crossbrowser.svg" alt="...">--}}
    </div>

    <!-- search -->
    <form method="get" action="#!search" class="input-group-over mb-5 bg-light p-2 form-control-pill">
        <input type="text" name="keyword" value="" placeholder="Quick search..." class="form-control border-dashed">
        <button class="btn btn-primary fi fi-search p-0 ml-2 mr-2 w--50 h--50"></button>
    </form>

</li>


{{--<!-- home -->--}}
{{--<li class="nav-item dropdown active">--}}

{{--    <a href="#" id="mainNavHome" class="nav-link dropdown-toggle"--}}
{{--       data-toggle="dropdown"--}}
{{--       aria-haspopup="true"--}}
{{--       aria-expanded="false">--}}
{{--        Home--}}
{{--    </a>--}}

{{--    <div aria-labelledby="mainNavHome" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover">--}}
{{--        <ul class="list-unstyled m-0 p-0">--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Home Landing</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="landing-1.html" class="dropdown-link">Landing 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="landing-2.html" class="dropdown-link">Landing 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="landing-3.html" class="dropdown-link">Landing 3</a></li>--}}
{{--                    <li class="dropdown-item"><a href="landing-4.html" class="dropdown-link">Landing 4</a></li>--}}
{{--                    <li class="dropdown-item"><a href="landing-5.html" class="dropdown-link">Landing 5</a></li>--}}
{{--                    <li class="dropdown-item"><a href="landing-6.html" class="dropdown-link">Landing 6</a></li>--}}
{{--                    <li class="dropdown-item">--}}
{{--                        <a href="landing-7.html" class="dropdown-link">--}}
{{--                            <span class="badge badge-secondary float-end">new</span>--}}
{{--                            Landing 7 (SAAS)--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Niche</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="niche.classifieds.html" class="dropdown-link">Classifieds</a></li>--}}
{{--                    <li class="dropdown-item"><a href="niche.realestate.html" class="dropdown-link">Real Estate</a></li>--}}
{{--                    <li class="dropdown-item"><a href="niche.restaurant.html" class="dropdown-link">Restaurant</a></li>--}}
{{--                    <li class="dropdown-item"><a href="niche.caffe.html" class="dropdown-link">Caffe</a></li>--}}
{{--                    <li class="dropdown-item"><a href="niche.lawyer.html" class="dropdown-link">Lawyer</a></li>--}}
{{--                    <li class="dropdown-item"><a href="niche.tattoo.html" class="dropdown-link">Tattoo</a></li>--}}
{{--                    <li class="dropdown-item"><a href="niche.hosting.html" class="dropdown-link">Hosting</a></li>--}}
{{--                    <li class="dropdown-item"><a href="#" class="dropdown-link disabled">More : Soon</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item"><a href="help-center-1-index.html" class="dropdown-link">Help Center 1</a></li>--}}
{{--            <li class="dropdown-item"><a href="help-center-2-index.html" class="dropdown-link">Help Center 2</a></li>--}}
{{--            <li class="dropdown-item"><a href="fullajax-index.html" class="dropdown-link" target="_blank">--}}
{{--                    <span class="badge badge-secondary float-end">new</span>--}}
{{--                    Full Ajax--}}
{{--                </a></li>--}}
{{--            <li class="dropdown-divider"></li>--}}
{{--            <li class="dropdown-item"><a href="https://theme.stepofweb.com/Smarty/v2.3.1/HTML_BS4/start_v4.html" class="dropdown-link" target="_blank">Smarty v2.x <i class="fi fi-emoji-smile text-muted"></i> <span class="d-block text-muted pt--6 fs--13 font-weight-light">You also get previous <br> Smarty version. Eh?</span></a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--</li>--}}


{{--<!-- pages -->--}}
{{--<li class="nav-item dropdown">--}}

{{--    <a href="#" id="mainNavPages" class="nav-link dropdown-toggle"--}}
{{--       data-toggle="dropdown"--}}
{{--       aria-haspopup="true"--}}
{{--       aria-expanded="false">--}}
{{--        Pages--}}
{{--    </a>--}}

{{--    <div aria-labelledby="mainNavPages" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover">--}}
{{--        <ul class="list-unstyled m-0 p-0">--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">About</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="about-us-1.html" class="dropdown-link">About Us 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="about-us-2.html" class="dropdown-link">About Us 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="about-us-3.html" class="dropdown-link">About Us 3</a></li>--}}
{{--                    <li class="dropdown-item"><a href="about-us-4.html" class="dropdown-link">About Us 4</a></li>--}}
{{--                    <li class="dropdown-item"><a href="about-us-5.html" class="dropdown-link">About Us 5</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="about-me-1.html" class="dropdown-link">About Me 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="about-me-2.html" class="dropdown-link">About Me 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Services</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="services-1.html" class="dropdown-link">Services 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="services-2.html" class="dropdown-link">Services 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="services-3.html" class="dropdown-link">Services 3</a></li>--}}
{{--                    <li class="dropdown-item"><a href="services-4.html" class="dropdown-link">Services 4</a></li>--}}
{{--                    <li class="dropdown-item"><a href="services-5.html" class="dropdown-link">Services 5</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Contact</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="contact-1.html" class="dropdown-link">Contact 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="contact-2.html" class="dropdown-link">Contact 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="contact-3.html" class="dropdown-link">Contact 3</a></li>--}}
{{--                    <li class="dropdown-item"><a href="contact-4.html" class="dropdown-link">Contact 4</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Pricing</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="pricing-1.html" class="dropdown-link">Pricing 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="pricing-2.html" class="dropdown-link">Pricing 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="pricing-3.html" class="dropdown-link">Pricing 3</a></li>--}}
{{--                    <li class="dropdown-item"><a href="pricing-4.html" class="dropdown-link">Pricing 4</a></li>--}}
{{--                    <li class="dropdown-item"><a href="pricing-5.html" class="dropdown-link">Pricing 5</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">FAQ</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="faq-1.html" class="dropdown-link">FAQ 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="faq-2.html" class="dropdown-link">FAQ 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="faq-3.html" class="dropdown-link">FAQ 3</a></li>--}}
{{--                    <li class="dropdown-item"><a href="faq-4.html" class="dropdown-link">FAQ 4</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Team</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="team-1.html" class="dropdown-link">Team 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="team-2.html" class="dropdown-link">Team 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Account</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="account-full-signin-1.html" class="dropdown-link">Sign In/Up : Full 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="account-full-signin-2.html" class="dropdown-link">Sign In/Up : Full 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="account-onepage-signin.html" class="dropdown-link">Sign In/Up : Onepage</a></li>--}}
{{--                    <li class="dropdown-item"><a href="account-simple-signin.html" class="dropdown-link">Sign In/Up : Simple</a></li>--}}
{{--                    <li class="dropdown-item"><a href="account-modal-signin.html" class="dropdown-link">Sign In/Up : Modal</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="account-orders.html" class="dropdown-link">Account : Orders</a></li>--}}
{{--                    <li class="dropdown-item"><a href="account-favourites.html" class="dropdown-link">Account : Favourites</a></li>--}}
{{--                    <li class="dropdown-item"><a href="account-settings.html" class="dropdown-link">Account : Settings</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Clients / Career</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="clients.html" class="dropdown-link">Clients</a></li>--}}
{{--                    <li class="dropdown-item"><a href="career.html" class="dropdown-link">Career</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Portfolio</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="portfolio-columns-2.html" class="dropdown-link">2 Columns</a></li>--}}
{{--                    <li class="dropdown-item"><a href="portfolio-columns-3.html" class="dropdown-link">3 Columns</a></li>--}}
{{--                    <li class="dropdown-item"><a href="portfolio-columns-4.html" class="dropdown-link">4 Columns</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="portfolio-single-1.html" class="dropdown-link">Single Item 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="portfolio-single-2.html" class="dropdown-link">Single Item 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="portfolio-single-3.html" class="dropdown-link">Single Item 3</a></li>--}}
{{--                    <li class="dropdown-item"><a href="portfolio-single-4.html" class="dropdown-link">Single Item 4</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Search Result</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="search-result-1.html" class="dropdown-link">Search Result 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="search-result-2.html" class="dropdown-link">Search Result 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item">--}}
{{--                <a href="forum-index.html" class="dropdown-link">Forum / Comunity</a>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Utility</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-up dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="404-1.html" class="dropdown-link">Error 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="404-2.html" class="dropdown-link">Error 2</a></li>--}}
{{--                    <li class="dropdown-item"><a href="404-3.html" class="dropdown-link">Error 3</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="maintenance-1.html" class="dropdown-link">Maintenance 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="maintenance-2.html" class="dropdown-link">Maintenance 2</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="comingsoon-1.html" class="dropdown-link">Coming Soon 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="comingsoon-2.html" class="dropdown-link">Coming Soon 2</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="page-cookie.html" class="dropdown-link">GDPR Page &amp; Cookie Window</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-divider"></li>--}}
{{--            <li class="dropdown-item"><a href="__junkyard.html" class="dropdown-link text-gray-500" target="smarty">Smarty Junkyard</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--</li>--}}


{{--<!-- features -->--}}
{{--<li class="nav-item dropdown">--}}

{{--    <a href="#" id="mainNavFeatures" class="nav-link dropdown-toggle"--}}
{{--       data-toggle="dropdown"--}}
{{--       aria-haspopup="true"--}}
{{--       aria-expanded="false">--}}
{{--        Features--}}
{{--    </a>--}}

{{--    <div aria-labelledby="mainNavFeatures" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover">--}}
{{--        <ul class="list-unstyled m-0 p-0">--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Header</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item dropdown"><a href="#" class="dropdown-link font-weight-bold" data-toggle="dropdown">Variants</a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                            <li class="dropdown-item"><a href="header-variant-1.html" class="dropdown-link">Header : Variant : 1</a></li>--}}
{{--                            <li class="dropdown-item"><a href="header-variant-2.html" class="dropdown-link">Header : Variant : 2</a></li>--}}
{{--                            <li class="dropdown-item"><a href="header-variant-3.html" class="dropdown-link">Header : Variant : 3</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-light.html" class="dropdown-link">Header : Light <small class="text-muted">(default)</small></a></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-dark.html" class="dropdown-link">Header : Dark</a></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-color.html" class="dropdown-link">Header : Color</a></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-transparent.html" class="dropdown-link">Header : Transparent</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-centered.html" class="dropdown-link">Header : Centered</a></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-bottom.html" class="dropdown-link">Header : Bottom</a></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-floating.html" class="dropdown-link">Header : Floating</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-fixed.html" class="dropdown-link">Header : Fixed</a></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-reveal.html" class="dropdown-link">Header : Reveal on Scroll</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-ajax-search-json.html" class="dropdown-link">Ajax Search : Json</a></li>--}}
{{--                    <li class="dropdown-item"><a href="header-option-ajax-search-html.html" class="dropdown-link">Ajax Search : Html</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Footer</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item dropdown"><a href="#" class="dropdown-link font-weight-bold" data-toggle="dropdown">Variants</a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                            <li class="dropdown-item"><a href="footer-variant-1.html#footer" class="dropdown-link">Footer : Variant : 1</a></li>--}}
{{--                            <li class="dropdown-item"><a href="footer-variant-2.html#footer" class="dropdown-link">Footer : Variant : 2</a></li>--}}
{{--                            <li class="dropdown-item"><a href="footer-variant-3.html#footer" class="dropdown-link">Footer : Variant : 3</a></li>--}}
{{--                            <li class="dropdown-item"><a href="footer-variant-4.html#footer" class="dropdown-link">Footer : Variant : 4</a></li>--}}
{{--                            <li class="dropdown-item"><a href="footer-variant-5.html#footer" class="dropdown-link">Footer : Variant : 5</a></li>--}}
{{--                            <li class="dropdown-item"><a href="footer-variant-6.html#footer" class="dropdown-link">Footer : Variant : 6</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="footer-option-light.html" class="dropdown-link">Footer : Light</a></li>--}}
{{--                    <li class="dropdown-item"><a href="footer-option-dark.html" class="dropdown-link">Footer : Dark <small class="text-muted">(default)</small></a></li>--}}
{{--                    <li class="dropdown-item"><a href="footer-option-image.html" class="dropdown-link">Footer : Image</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Sliders</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="slider-swiper.html" class="dropdown-link">Swiper Slider</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Page Title</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="page-title-classic.html" class="dropdown-link">Page Title : Classic</a></li>--}}
{{--                    <li class="dropdown-item"><a href="page-title-alternate.html" class="dropdown-link">Page Title : Alternate</a></li>--}}
{{--                    <li class="dropdown-item"><a href="page-title-color.html" class="dropdown-link">Page Title : Color + Nav</a></li>--}}
{{--                    <li class="dropdown-item"><a href="page-title-clean.html" class="dropdown-link">Page Title : Clean</a></li>--}}
{{--                    <li class="dropdown-item"><a href="page-title-parallax-1.html" class="dropdown-link">Page Title : Parallax 1</a></li>--}}
{{--                    <li class="dropdown-item"><a href="page-title-parallax-2.html" class="dropdown-link">Page Title : Parallax 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-toggle="dropdown">Sidebar</a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg b-0 m-0">--}}
{{--                    <li class="dropdown-item"><a href="sidebar-float-dark.html" class="dropdown-link">Sidebar : Float : Dark</a></li>--}}
{{--                    <li class="dropdown-item"><a href="sidebar-float-light.html" class="dropdown-link">Sidebar : Float : Light</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><a href="sidebar-static-dark.html" class="dropdown-link">Sidebar : Static : Dark</a></li>--}}
{{--                    <li class="dropdown-item"><a href="sidebar-static-light.html" class="dropdown-link">Sidebar : Static : Light</a></li>--}}
{{--                    <li class="dropdown-divider"></li>--}}
{{--                    <li class="dropdown-item"><span class="d-block text-muted py-2 px-4 fs--13 font-weight-bold">Same as admin</span></li>--}}
{{--                    <li class="dropdown-item"><a href="sidebar-float-admin-color.html" class="dropdown-link">Sidebar : Float</a></li>--}}
{{--                    <li class="dropdown-item"><a href="sidebar-static-admin-color.html" class="dropdown-link">Sidebar : Static</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown-divider"></li>--}}
{{--            <li class="dropdown-item"><a href="layout-boxed-1.html" class="dropdown-link">Boxed Layout</a></li>--}}
{{--            <li class="dropdown-item"><a href="layout-boxed-0.html" class="dropdown-link">Boxed + Header Over</a></li>--}}
{{--            <li class="dropdown-item"><a href="layout-boxed-2.html" class="dropdown-link">Boxed + Background</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--</li>--}}


{{--<!-- shop + blog -->--}}
{{--<li class="nav-item dropdown dropdown-mega">--}}

{{--    <a href="#" id="mainNavShop" class="nav-link dropdown-toggle"--}}
{{--       data-toggle="dropdown"--}}
{{--       aria-haspopup="true"--}}
{{--       aria-expanded="false">--}}
{{--        Shop &amp; Blog--}}
{{--    </a>--}}

{{--    <div aria-labelledby="mainNavShop" class="dropdown-menu dropdown-menu-hover dropdown-menu-clean">--}}
{{--        <!-- Blog and Shop : Megamenu -->--}}
{{--        <ul class="list-unstyled m-0 p-0">--}}
{{--            <li class="dropdown-item bg-transparent">--}}

{{--                <div class="row col-border-md">--}}

{{--                    <div class="col-12 col-md-3">--}}

{{--                        <h3 class="h6 text-muted text-uppercase fs--14 mb-3">Shop Homepage</h3>--}}
{{--                        <ul class="prefix-link-icon prefix-icon-dot">--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-index-1.html">Shop Home 1</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-index-2.html">Shop Home 2</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-index-3.html">Shop Home 3</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-index-4.html">Shop Home 4</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-index-christmas.html">--}}
{{--                                    <span class="badge badge-secondary float-end">new</span>--}}
{{--                                    Shop : Christmas--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link disabled" href="#!">More : Soon</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}

{{--                    </div>--}}

{{--                    <div class="col-12 col-md-3">--}}

{{--                        <h3 class="h6 text-muted text-uppercase fs--14 mb-3">Shop Category</h3>--}}
{{--                        <ul class="prefix-link-icon prefix-icon-dot">--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-category-1.html">Category 1</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-category-2.html">Category 2</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-category-3.html">Category 3</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-category-4.html">Category 4</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-category-lazyload.html">Using Lazyload</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}

{{--                    </div>--}}

{{--                    <div class="col-12 col-md-3">--}}

{{--                        <h3 class="h6 text-muted text-uppercase fs--14 mb-3">Shop Cart</h3>--}}
{{--                        <ul class="prefix-link-icon prefix-icon-dot">--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-cart-1.html">Cart</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-cart-2.html">Cart Empty</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-checkout-success.html">Checkout Success</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}

{{--                        <h3 class="h6 text-muted text-uppercase fs--14 mb-3 mt-5">Shop Product</h3>--}}
{{--                        <ul class="prefix-link-icon prefix-icon-dot">--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-product-1.html">Product Page 1</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-product-2.html">Product Page 2</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-product-3.html">Product Page 3</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-product-4.html">Product Page 4</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="shop-page-product-5.html">Product Page 5</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}

{{--                    </div>--}}

{{--                    <div class="col-12 col-md-3">--}}

{{--                        <h3 class="h6 text-muted text-uppercase fs--14 mb-3">Blog Pages</h3>--}}
{{--                        <ul class="prefix-link-icon prefix-icon-line">--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="blog-page-sidebar.html">With Sidebar</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="blog-page-sidebar-no.html">Without Sidebar</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="blog-page-single-sidebar.html">Single With Sidebar</a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown-item">--}}
{{--                                <a class="dropdown-link" href="blog-page-single-sidebar-no.html">Single Without Sidebar</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}

{{--                        <div class="mt-4">--}}
{{--                            <img width="600" height="600" class="img-fluid" src="demo.files/svg/artworks/undraw_wireframing_nxyi.svg" alt="...">--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--</li>--}}


{{--<!-- documentation -->--}}
{{--<li class="nav-item dropdown">--}}

{{--    <a href="#" id="mainNavDocumentation" class="nav-link dropdown-toggle nav-link-caret-hide"--}}
{{--       data-toggle="dropdown"--}}
{{--       aria-haspopup="true"--}}
{{--       aria-expanded="false">--}}
{{--        <span>Documentation</span>--}}
{{--    </a>--}}

{{--    <div aria-labelledby="mainNavDocumentation" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover w--300">--}}
{{--        <!-- Documentation : no container, direct links! -->--}}
{{--        <a href="documentation/index.html" class="dropdown-item transition-hover-left clearfix text-primary pt-4 pb-4 fs--14">--}}

{{--											<span class="float-start w--50 mr--20">--}}
{{--												<img width="50" height="50" class="img-fluid" src="demo.files/svg/icons/menu_doc_1.svg" alt="...">--}}
{{--											</span>--}}

{{--            DOCUMENTATION--}}
{{--            <span class="d-block text-muted text-truncate fs--14">--}}
{{--												Don't get stuck!--}}
{{--											</span>--}}
{{--        </a>--}}

{{--        <div class="dropdown-divider"></div>--}}

{{--        <a href="documentation/changelog.html" class="dropdown-item transition-hover-left clearfix text-primary pt-4 pb-4 fs--14">--}}

{{--            <span class="badge badge-secondary badge-soft position-absolute absolute-top right-0 ml-2 mr-2">v3.x</span>--}}

{{--            <span class="float-start w--50 mr--20">--}}
{{--												<img width="50" height="50" class="img-fluid" src="demo.files/svg/icons/menu_doc_2.svg" alt="...">--}}
{{--											</span>--}}

{{--            CHANGELOG--}}
{{--            <span class="d-block text-muted text-truncate fs--14">--}}
{{--												Smarty Reborn Changes--}}
{{--											</span>--}}
{{--        </a>--}}
{{--    </div>--}}

{{--</li>--}}




<!-- social : mobile only (d-block d-sm-none)-->
<li class="nav-item d-block d-sm-none text-center mb-4">

    <h3 class="h6 text-muted">Follow Us</h3>

    <a href="#!" class="btn btn-sm btn-facebook transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
        <i class="fi fi-social-facebook"></i>
    </a>

    <a href="#!" class="btn btn-sm btn-twitter transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
        <i class="fi fi-social-twitter"></i>
    </a>

    <a href="#!" class="btn btn-sm btn-linkedin transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
        <i class="fi fi-social-linkedin"></i>
    </a>

    <a href="#!" class="btn btn-sm btn-youtube transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
        <i class="fi fi-social-youtube"></i>
    </a>

</li>



<!-- buy now : mobile only (d-block d-sm-none)-->
<li class="nav-item d-block d-sm-none">
    <a target="_blank" href="#buy_now" class="btn btn-block btn-primary shadow-none text-white m-0">
        Buy Now
    </a>
</li>
