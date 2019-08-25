@include('layouts.head')

 <div class="clearfix"></div>

    <div class="container-fluid single-page-fluid">
        <div class="container single-page-container">
            @if (count($history) > 0) 
                
                   @php
                    $history_title = ''; 
                    $history_text = '';
                      if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                          $history_title = $history->title; 
                          $history_text = $history->text;
                      } 
                      elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                          $history_title = $history->title_ru; 
                          $history_text = $history->text_ru;
                      }
                      elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                          $history_title = $history->title_eng; 
                          $history_text = $history->text_eng;
                      }
                     @endphp

                <div class="wow animated fadeInUp  news-content-block col-md-10 col-md-push-1 col-sm-12">
                    <div class="image-block col-md-12 col-sm-12 ">
                        <img class="news-img" src="{{asset('assets').'/'.$history->image}}" alt="img">
                    </div>
                    <div class="clearfix"></div>
                    <h3 class="sigle-news-title">{{$history_title}}</h3>
                    <div class="text-block">
                      {!!$history_text!!}
                    </div> 
                </div>
            @else 
                <h1>@lang('titles.no_info')</h1>    
            @endif




        </div>

    </div>

    <div class="clearfi"></div>


    @include('layouts.contact')
    @include('layouts.footer')
    @include('layouts.end_body')