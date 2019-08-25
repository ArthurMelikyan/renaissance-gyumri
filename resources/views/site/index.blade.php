
@include('layouts.head')
{{-- @include('layouts.modal') --}}

@include('layouts.carousel')

    <div class="content-wrapper">
        <!-- <div class="row"> -->
        <div class="container articles-wrapper">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 page-header">
                            <h3 class="text-center">
                                <i class="fas fa-globe"></i> @lang('titles.latest_news')</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="article-wrap-content ">
                <div class="row margin-b-2">
                    @if($articles)
                        @foreach ($articles as $article)
                     @php
                       $title = '';
                       $desc = '';
                 if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                     $title = str_limit($article->title,70);
                     $desc = str_limit($article->desc,160);
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                      $title = str_limit($article->title_ru,70);
                     $desc = str_limit($article->desc_ru,160);
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                     $title = str_limit($article->title_eng,70);
                     $desc = str_limit($article->desc_eng,160);
                 }
                $anim = [
                     'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                     'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                     'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                     'rollIn'
                 ];
                        @endphp

                    <div class="article wow animated {{array_random($anim)}} col-sm-6 col-md-3 col-xs-12">
                 <a target="_blank" href="{{route('news',$article->id)}}">
                        <img class=" thumbnail" src="{{asset('assets').'/'.$article->little_image}}" alt="{{$article->title}}">
                  </a>
                        <div class="caption">
                            <div class="article-title text-center">
                                <h4>
                                    <a target="_blank" href="{{route('news',$article->id)}}">{{$title}}</a>
                                </h4>
                            </div>
                            <div class="article-date">
                                <span class="created-date">
                                    <i class="far fa-clock"></i> {{$article->published_at}}</span>
                            </div>
                            <div class="article-text">
                                <p> {{$desc}}</p>
                            </div>
                         </div>
                    </div>
                        @endforeach
                        @endif



                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <div class="clearfix"></div>
   {{-- <div class="galery-fluid">
        <div class="galery-wrapper container">
            <div class="row">

                <div class="col-md-8 col-md-push-2">
                    <h1 class="text-center">
                        <i class="far fa-image"></i> @lang('titles.galery')</h1>
                </div>
            </div>
            <div class="row">
                <div class="container galery-block">
           @if ($photos)

               @foreach ($photos as $photo)
                <div class="img-wrap col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    @php
                    $anim = [
                     'bounce' , 'pulse' , 'rubberBand' , 'shake' , 'swing' , 'jello' ,
                     'bounceInUp' , 'fadeIn' , 'fadeDownBig' , 'fadeInLeft' , 'flip',
                     'rotateIn' , 'slideInUp' , 'zoomIn' , 'zoomInDown' ,'jackInTheBox',
                     'rollIn'
                 ];
                 @endphp
                    <div class="hovereffect wow animated  {{array_random($anim)}} ">
                        <img class="img-responsive" src="{{asset('assets').'/'.$photo->photo}}" alt="">
                        <div class="overlay">
                            <p>
                                <a href="{{asset('assets').'/'.$photo->photo_thumb}}" data-gallery="example-gallery" data-toggle="lightbox">
                                    <i class="fas fa-2x fa-search-plus"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
               @endforeach

           @endif

                    <div class="clearfix"></div>
                    <div class="show-all-galeries text-center">
                        <a href="{{route('photos')}}">@lang('titles.buttons.show_galery')</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


@include('layouts.contact')


@include('layouts.footer')
@include('layouts.end_body')