@include('layouts.head')
    <div class="container-fluid sponsors-fluid about-page rules-page single-page-fluid">
        <div class="container sponsors-container single-page-container">
            <div class="wow animated jury-page rules-page-wrap  fadeInUp news-content-block col-md-12 col-sm-12">
                    <div class="clearfix"></div>

                <h1 class="text-center">
                   @lang('menu.organizers')
                </h1>

                    <div class="clearfix"></div>

                @if ($organizers)


                        @foreach ($organizers as $organizer)
                     @php
                       $organizer_text = '';
                       $organizer_info = '';
                        if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                            $organizer_text = $organizer->title;
                            $organizer_info = $organizer->short__info;
                        }
                        elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                            $organizer_text = $organizer->title_ru;
                            $organizer_info = $organizer->short__info_ru;
                        }
                        elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                            $organizer_text = $organizer->title_eng;
                            $organizer_info = $organizer->short__info_eng;
                        }
                        @endphp

                     <div class="organizer-wrap col-lg-4 col-md-6 col-sm-6 col-xs-12">
                         <div class="hovereffect-organizer">
                              <img class="organizer-img" src="{{asset('assets').'/'.$organizer->image}}" alt="{{$organizer_text}}">
                                  <div class="overlay">
                                      <h2>{!!$organizer_text!!}</h2>
                                      {!!$organizer_info!!}
                                  </div>
                          </div>
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
