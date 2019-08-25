@include('layouts.head')

    <div class="container-fluid review-fluid">
        <div class="container review-wrap">
            <div class="row">
                <h1 class="text-center">
                <i class="far fa-newspaper"></i>
                 @lang('titles.news')</h1>
       <div class="clearfix"></div>


       @if ($articles)
           @foreach ($articles as $article)
                 @php
                       $title = '';
                       $desc = '';
                 if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                     $title = str_limit($article->title,80);
                     $desc = str_limit($article->desc,140);
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                      $title = str_limit($article->title_ru,80);
                     $desc = str_limit($article->desc_ru,140);
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                     $title = str_limit($article->title_eng,80);
                     $desc = str_limit($article->desc_eng,140);
                 }
                $anim = [
                     'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                     'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                     'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                     'rollIn'
                 ];
                        @endphp

                    <div class="wow animated {{array_random($anim)}} col-md-3 col-sm-4 col-xs-12 news-wrap ">

                    <div class="review-image-block">
                    	    <a href="{{route('news',$article->id)}}">
                        <img  src="{{asset('assets').'/'.$article->little_image}}" alt="{{$article->title}}">
                             </a>
                    </div>
                    <div class="news-title">
                        <a href="{{route('news',$article->id)}}">
                            <h4>{{$title}}</h4>
                        </a>
                    </div>
                    <div class="agency">

                            <span class="created-date">
                                <i class="far fa-clock"></i> {{$article->published_at}}
                            </span>
                    </div>
                    <div class="review-text">
                        <p>{{$desc}}</p>
                    </div>
                </div>
           @endforeach
 	 @else 
                <div class="container">
                    
                    <h1 class="ml-5">ՏՎՅԱԼՆԵՐ ՉԿԱՆ</h1>
                </div>
         @endif
                      
            </div>
             <div class="paginate-block col-md-12 ">
                           <div class="row">
                               <div class="paginate-links text-center col-md-8  col-md-push-2">
                                    {{$articles->links('paginate.paginate')}}
                                </div>
                           </div>
                        </div>
        </div>
    </div>
    <div class="clearfix"></div>




@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
