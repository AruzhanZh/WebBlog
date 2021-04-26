<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('main.about')</title>
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
                            <a href="/home" class="tm-nav-item-link">@lang('main.home')</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#about" class="tm-nav-item-link">@lang('main.about')</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#galleryone" class="tm-nav-item-link">@lang('main.lifestyle')</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#secondgallery" class="tm-nav-item-link">@lang('main.food')</a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="#contact" class="tm-nav-item-link">@lang('main.contact')</a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- Left column: logo and menu -->

            <!-- Right column: content -->
            <div class="tm-right-column">
                <figure>
                    <img src="img/about.jpg" alt="Header image" class="img-fluid">
                </figure>

                <div class="tm-content-div">
                    <!-- Welcome section -->
                    <section id="welcome" class="tm-section">
                        <header>
                            <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">@lang('main.little')</h2>
                        </header>
                        <p>@lang('main.some')</p>

                        <p>@lang('main.why')</p>

                        <p>@lang('main.only')</p>

                        <p>@lang('main.xx')</p>
                    </section>

                </div> <!-- Right column: content -->
            </div>
        </div> <!-- row -->
    </div>
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
