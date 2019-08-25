@include('layouts.head')

 <div class="clearfix"></div>

    <div class="container-fluid single-page-fluid">
        <div class="container single-page-container">
            @if (count($conferance) > 0 && !empty($conferance)) 
                
                   @php
                    $conferance_title = ''; 
                    $conferance_text = '';
                      if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                          $conferance_title = $conferance->title; 
                          $conferance_text = $conferance->text;
                      } 
                      elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                          $conferance_title = $conferance->title_ru; 
                          $conferance_text = $conferance->text_ru;
                      }
                      elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                          $conferance_title = $conferance->title_eng; 
                          $conferance_text = $conferance->text_eng;
                      }
                       $anim = [
                     'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                     'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                     'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                     'rollIn'
                 ];
                     @endphp

                <div class="wow animated {{array_random($anim)}}  news-content-block col-md-10 col-md-push-1 col-sm-12">
                    <div class="image-block col-md-12 col-sm-12 ">
                        <img class="news-img" src="{{asset('assets').'/'.$conferance->image}}" alt="img">
                    </div>
                    <div class="clearfix"></div>
                    <h3 class="sigle-news-title">{{$conferance_title}}</h3>
                    <div class="text-block">
                      {!!$conferance_text!!}
                    </div> 
                    <div class="clearfix"></div>
                    
                    <div class="share-block"> 
                        <p>@lang('titles.share')</p>
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_button_facebook a2a_counter"></a>
                            <a class="a2a_button_twitter a2a_counter"></a>
                            <a class="a2a_button_linkedin a2a_counter"></a>
                            <a class="a2a_button_vk a2a_counter"></a>
                            <a class="a2a_button_odnoklassniki a2a_counter"></a>
                            <a class="a2a_button_telegram a2a_counter"></a>
                         </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>   
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