@include('layouts.head')

    <div class="container-fluid about-page rules-page single-page-fluid">
        <div class="container single-page-container">
            <div class="jury-page rules-page-wrap   news-content-block col-md-12 col-sm-12">

                    <div class="clearfix"></div>
                <h1 class="text-center">
                    <i class="fas fa-address-card"></i>
                 @lang('titles.jury_toptitle')</h1>
                <div class="col-md-8  jury-text ">
                   @lang('titles.jury_toptitle_sub_text')
                </div>
                <div class="clearfix"></div>
                <h1 class="text-center"><i class="fas fa-users"></i>@lang('titles.jury_sub_title')</h1>
                    <section class="testimonials">
                     <div class="row">

            {{-- @foreach ($juries as $jury) --}}
                @php
                    $text = '';
                      if ( LaravelLocalization::getCurrentLocale() === 'hy'){

                          $text = $jury->text;
                      }
                      elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                          $text = $jury->text_ru;
                      }
                      elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                          $text = $jury->text_eng;
                      }
                $anim = [
                     'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                     'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                     'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                     'rollIn'
                 ];
                     @endphp
                     <div class="col-md-12 wow animated {{array_random($anim)}}">

                        {!!$text!!}

                      </div>
                    </section>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>


@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')


