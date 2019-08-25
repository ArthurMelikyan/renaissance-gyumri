@include('layouts.head')
    <div class="container-fluid sponsors-fluid about-page rules-page single-page-fluid">
        <div class="container sponsors-container single-page-container">
            <div class="wow animated jury-page rules-page-wrap  fadeInUp news-content-block col-md-12 col-sm-12">
                    <div class="clearfix"></div>

                <h1 class="text-center">
                    <i class="far fa-handshake"></i> @lang('titles.sponsor')
                </h1>

                    <div class="clearfix"></div>

                @if ($sponsors)


                        @foreach ($sponsors as $sponsor)
                     @php
                       $sponsor_text = '';
                        if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                            $sponsor_text = $sponsor->title;
                        }
                        elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                            $sponsor_text = $sponsor->title_ru;
                        }
                        elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                            $sponsor_text = $sponsor->title_eng;
                        }
                        @endphp
                        <div class=" sponsors-img-wrap col-md-4 col-sm-6 col-xs-12">
                            <img class="sponsorimg" src="{{asset('assets').'/'.$sponsor->image}}" alt="{{$sponsor_text}}">
                            <h5 class="text-center">{!!$sponsor_text!!}</h5>
                        </div>

                        @endforeach
                        @endif
                </div>



            </div>

        </div>


    <div class="clearfix"></div>


@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
