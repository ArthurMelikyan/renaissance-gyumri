@include('layouts.head')

<div class="clearfix"></div>
    <div class="container-fluid galery-page-fluid video-galery">
        <div class="container galery-page-container video-galery-container">
            <div class="galery-page-wrap">
                <h1 class="text-center">
                    <i class="far fa-image"></i> @lang('menu.videos')</h1>



             @if ($videos)

                 @foreach ($videos as $video)

                    <div class="videos col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        @php
                        $title = '';
                            if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                                $title = str_limit($video->title,40);
                            }
                            elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                                 $title = str_limit($video->titleru,40);
                            }
                            elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                                 $title = str_limit($video->titleeng,40);
                            }
                        $anim = [
                             'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                             'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                             'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                             'rollIn'
                         ];
                        @endphp

                    <div class="video-title wow animated {{array_random($anim)}}"><h5>{{str_limit($title,36)}}</h5></div>
                    <div class="video-thumb-wrap wow animated {{array_random($anim)}}">
                        <a href="{{$video->link}}" data-title="{{$title}}" data-width="1280" data-toggle="lightbox">
                            <div class="hover-visible">
                                 <div class="video-galery-ico">
                                    <i class="fab fa-4x fa-youtube"></i>
                                </div>
                            </div>
                            <img src="https://i1.ytimg.com/vi/{{trim($video->videoid)}}/0.jpg" alt="video">
                        </a>
                    </div>
                    </div>

                 @endforeach

	@else 
                <div class="container">
                    
                    <h1 class="ml-5">ՏՎՅԱԼՆԵՐ ՉԿԱՆ</h1>
                </div>
         @endif
                       
 
            </div>
        </div>
        
            <div class="paginate-block col-md-12 ">
                           <div class="row">
                               <div class="paginate-links text-center col-md-8  col-md-push-2">
                                    {{$videos->links('paginate.paginate')}}
                                </div>
                           </div>
                        </div>
    </div>
    <div class="clearfix"></div>


@include('layouts.contact')


@include('layouts.footer')

@include('layouts.end_body')
