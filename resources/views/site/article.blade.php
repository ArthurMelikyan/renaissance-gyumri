

@include('layouts.head')
    <div class="clearfix"></div>
@if ($article)
                   
                @php
               $title = ''; 
               $text = '';
                 if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                     $title = $article->title; 
                     $text =  $article->text;
                 } 
                 elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                        $title = $article->title_ru; 
                     $text =  $article->text_ru;  
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                        $title = $article->title_eng; 
                        $text =  $article->text_eng;
                 }
                       $anim = [
                     'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                     'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                     'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                     'rollIn'
                 ];
                @endphp
<div class="container-fluid single-page-fluid">
    <div class="container single-page-container"> 
          <div class="wow animated {{array_random($anim)}} news-content-block col-md-10 col-md-push-1 col-sm-12"> 
              <div class="image-block col-md-12 col-sm-12 ">
                  <img class="news-img" src="{{asset('assets').'/'.$article->image}}" alt="{{$title}}">
                </div>
                <div class="clearfix"></div>
                <h3 class="sigle-news-title">{{$title}}</h3>
                 <div class="text-block"> 
                     <div class="agency">
                         <span class="created-date">
                             <i class="far fa-clock"></i> {{$article->published_at}}
                         </span>
                     </div>
                     <p> {!!$text!!}</p>
                 </div> 
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
@endif

        </div>
    </div>

    <div class="clearfix"></div>

@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
