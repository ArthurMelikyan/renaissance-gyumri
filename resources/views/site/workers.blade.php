@include('layouts.head')

    <div class="container-fluid about-page rules-page single-page-fluid">
        <div class="container single-page-container">
            <div class="wow animated jury-page rules-page-wrap fadeIn news-content-block col-md-12 col-sm-12">

                <div class="clearfix"></div>
                <h1 class="text-center">
                    <i class="fas fa-users"></i> @lang('titles.workers')</h1>
                <section class="testimonials text-center">

                        @if ($workers)
                        @foreach ($workers as $worker)

                        @php
                        $name = '';
                        $bio = '';
                        if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                            $name = $worker->name;
                            $bio = $worker->bio;
                        }
                        elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                            $name = $worker->name_ru;
                            $bio = $worker->bio_ru;
                        }
                        elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                            $name = $worker->name_eng;
                            $bio = $worker->bio_eng;
                        }
                      $anim = [
                            'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                            'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                            'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                            'rollIn'
                        ];
                        @endphp
                        <div class="col-md-4 col-sm-4 col-xs-12 workers-wrap wow animated {{array_random($anim)}}">
                            <div class="testimonial-item">
                                <img class="img-fluid" src="{{asset('assets').'/'.$worker->image}}" alt="{{$name}}">
                                <h5 class="worker_name">{!!$name!!}</h5>
                                <p class="font-weight-light mb-0">{!!$bio!!}</p>
                            </div>
                        </div>

                        @endforeach
                        @endif

                </section>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>



@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
