<div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="false"
        data-interval="8000">
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <!-- <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li> -->
            <!-- <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li> -->
        </ol>
        <div class="carousel-inner" role="listbox">

            @if ($sliders)

            @foreach ($sliders as $key => $slider)
            @php
                    $anim = [
                     'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                     'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                     'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                     'rollIn'
                 ];

                 $title = '';
                 $text = '';
                 if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                     $title = $slider->image_title;
                     $text = $slider->image_text;
                    }
                    elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                        $title = $slider->image_title_ru;
                        $text = $slider->image_text_ru;
                    }
                    elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                        $title = $slider->image_title_eng;
                        $text = $slider->image_text_eng;
                    }
                    if($key == 1){
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    @endphp
                    <div class="item {{$active}}">
                <img src="{{asset('assets').'/'.$slider->image}}" alt="img" data-animation="animated {{array_random($anim)}}" class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_left">
                            <h1 data-animation="animated  {{array_random($anim)}}">{!!$title!!}</h1>
                            <p data-animation="animated  {{array_random($anim)}}">{{$text}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @endif

        </div>

        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fas fa-sm fa-arrow-circle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fas fa-sm fa-arrow-circle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <div class="clearfix"></div>
