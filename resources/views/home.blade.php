<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('main.home')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="tm-left-right-container">
            <!-- Left column: logo and menu -->
            <div class="tm-blue-bg tm-left-column">
                <div class="tm-logo-div text-xs-center">
                    <img src="img/tm-neaty-logo.png" alt="Logo">
                    <h1 class="tm-site-name">FoodBlog</h1>
                </div>
                <nav class="tm-main-nav">
                    <ul class="tm-main-nav-ul">
                        <li class="tm-nav-item">
                            <a href="#home" class="tm-nav-item-link">{{__('main.home')}}</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#about" class="tm-nav-item-link">{{__('main.about')}}</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#galleryone" class="tm-nav-item-link">{{__('main.lifestyle')}}</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#secondgallery" class="tm-nav-item-link">{{__('main.food')}}</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#contact" class="tm-nav-item-link">{{__('main.contact')}}</a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- Left column: logo and menu -->

            <!-- Right column: content -->
            <div class="tm-right-column">
                <figure>
                    <img src="img/neaty-01.jpg" alt="Header image" class="img-fluid">
                </figure>

                <div class="tm-content-div">
                    <!-- Welcome section -->
                    <section id="welcome" class="tm-section">
                        <header>
                            <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">{{__('main.welcome')}}</h2>
                        </header>
                        <p>{{__('main.food is')}}</p>
                        <p>{{__('main.its the taste')}}</p>
                        <p>{{__('main.its precious moment')}}</p>
                        <p>{{__('main.and Im')}}</p>
                        <p>{{__('main.enjoy')}}</p>
                    </section>
                    <!-- About section -->
                    <section id="about" class="tm-section">
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 push-lg-4 push-md-5">
                                <header>
                                    <h2 class="tm-blue-text tm-section-title tm-margin-b-45">@lang('main.about')</h2>
                                </header>
                                <p>@lang('main.iam a food')</p>

                                <p>@lang('main.i shoot')</p>

                                <p>@lang('main.my blog')</p>

                                <p>@lang('main.interested')</p>
                                <a href="/about" class="tm-button tm-button-wide">@lang('main.read')</a>
                            </div>

                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 pull-lg-8 pull-md-7 tm-about-img-container">
                                <img src="img/neaty-02.jpg" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </section>

                    <!-- Gallery One section -->
                    <section id="galleryone" class="tm-section">
                        <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">@lang('main.lifestyle')</h2></header>
                        <div class="tm-gallery-container tm-gallery-1">
                            <div class="tm-img-container tm-img-container-1">
                                <a href="img/neaty-03.jpg"><img src="img/neaty-03.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                            <div class="tm-img-container tm-img-container-1">
                                <a href="img/neaty-04.jpg"><img src="img/neaty-04.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                            <div class="tm-img-container tm-img-container-1">
                                <a href="img/neaty-05.jpg"><img src="img/neaty-05.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                            <div class="tm-img-container tm-img-container-1">
                                <a href="img/neaty-06.jpg"><img src="img/neaty-06.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                            <div class="tm-img-container tm-img-container-1">
                                <a href="img/neaty-07.jpg"><img src="img/neaty-07.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                        </div>
                    </section>

                    <!-- Second Gallery section -->
                    <section id="secondgallery" class="tm-section">
                        <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">@lang('main.food')</h2></header>
                        <div class="tm-gallery-container tm-gallery-2">
                            <div class="tm-img-container tm-img-container-2">
                                <a href="img/neaty-08.jpg"><img src="img/neaty-08.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                            <div class="tm-img-container tm-img-container-2">
                                <a href="img/neaty-09.jpg"><img src="img/neaty-09.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                            <div class="tm-img-container tm-img-container-2">
                                <a href="img/neaty-10.jpg"><img src="img/neaty-10.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                            </div>
                        </div>
                    </section>

                    <!-- Contact Us section -->
                    <section id="contact" class="tm-section">
                        <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">@lang('main.contact')</h2></header>

                        <div class="row">
                            <div class="col-lg-6">
                                <form action="/contact/check" method="post" class="contact-form">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="@lang('main.name')"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="@lang('main.email')"  required/>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="@lang('main.message')" required></textarea>
                                    </div>
                                    <button type="submit" class="float-right tm-button">@lang('main.send')</button>
                                </form>
                            </div>

                            <div class="col-lg-6 tm-contact-right">
                                <p>
                                    @lang('main.hey')<br>
                                    @lang('main.would')<br>
                                    @lang('main.have')<br>
                                    @lang('main.just')<br>
                                    @lang('main.get')<br>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>

            </div> <!-- Right column: content -->
        </div>
    </div> <!-- row -->
</div>
<script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
<script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
<script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
<script>

    $(document).ready(function(){

        // Single page nav
        $('.tm-main-nav').singlePageNav({
            'currentClass' : "active",
            offset : 20
        });

        // Magnific pop up
        $('.tm-gallery-1').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {enabled:true}
            // other options
        });

        $('.tm-gallery-2').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {enabled:true}
            // other options
        });

        $('.tm-gallery-3').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {enabled:true}
            // other options
        });

        $('.tm-current-year').text(new Date().getFullYear());
    });
</script>
</body>
</html>
