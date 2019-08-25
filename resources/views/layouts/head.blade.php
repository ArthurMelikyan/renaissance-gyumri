<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Renaissance">
    <meta name="keywords" content="Վերածնունդ,փառատոն,Միջազգային,Գյումրի,Գյումրիում,Արվեստների,ակադեմիա,Gyumri,veratsnund,akademia,arts,academy">
    <meta name="author" content="Arthur Melikyan">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ (!empty($_title)) ? $_title : Lang::get('titles.ren')}}" />
    <meta property="og:description" content="{{(!empty($_desc)) ? $_desc :  Lang::get('titles.ren_desc')}}" />
    <meta property="og:image" content="{{ (!empty($_meta_img)) ? asset('assets') . '/' . $_meta_img : asset('assets/images/site/fb_thumb.jpeg')}}" />
    <title>{{ (!empty($_title)) ? $_title : Lang::get('titles.ren')}} </title>
    <link rel="icon" type="image/png" href="{{asset('assets/images/site/ico.png')}}" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css"
    />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115157073-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-115157073-1');
</script>
</head>
 <body>
    <header>
        <div class="container-fluid">
            <div class="container">
                <div class="top-header ">
                    <a class="logo" href="{{route('index')}}">
                        <div class="col-md-2 col-sm-4 col-xs-4 logo-block">
                            <img src="{{asset('assets/images/site/logo.png')}}" alt="logo">
                        </div>
                    </a>
                    <div class="languages  col-lg-2 col-md-2  col-sm-2 pull-right">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="logo" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            @if ($localeCode === 'hy')
                            <img src="{{asset('assets/images/site/am.svg')}}" alt="Armenian" title="Armenian"> @elseif ($localeCode === 'en')
                            <img src="{{asset('assets/images/site/gb.svg')}}" alt="English" title="English"> @elseif($localeCode === 'ru')
                            <img src="{{asset('assets/images/site/ru.svg')}}" alt="Russian" title="Russian"> @endif
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container-fluid ">

            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fas fa-2x fa-th-list"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li>
                                <a class="home-menu" href="{{route('index')}}">@lang('menu.index')</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('menu.festival')
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('nominations')}}">@lang('menu.nomination')</a>
                                    </li>
                                    <li>
                                        <a href="{{route('rules')}}">@lang('menu.rules')</a>
                                    </li>
                                    <li>
                                        <li>
                                            <a href="{{route('timetable')}}">@lang('menu.timetable')</a>
                                        </li>
                                </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('menu.media')
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{route('photos')}}">@lang('menu.photos')</a>
                                        </li>
                                        <li>
                                            <a href="{{route('videos')}}">@lang('menu.videos')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('menu.news')
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{route('allNews')}}">@lang('menu.all_news')</a>
                                        </li>
                                        <li>
                                            <a href="{{route('reviews')}}">@lang('menu.press_reviews')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('menu.about_us')
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
					<li>
                                            <a href="{{route('organizer')}}">@lang('menu.organizers')</a>
                                        </li>
                                        <li>
                                            <a href="{{route('sponsors')}}">@lang('menu.sponsors')</a>
                                        </li>
					<li>
                                            <a href="{{route('workers')}}">@lang('menu.workers')</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="{{route('juries')}}">@lang('menu.jury')</a>
                                        </li>

                                        <li>
                                            <a href="{{route('history')}}">@lang('menu.history')</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{route('conference')}}">@lang('menu.conferance')</a>
                                </li>
                                <li>
                                    <a href="{{route('request')}}">@lang('menu.send_request')</a>
                                </li>
                                <li>
                                    <a href="#contact">@lang('menu.contact')</a>
                                </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
