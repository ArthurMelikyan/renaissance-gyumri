@include('layouts.head')
<div class="clearfix"></div>

    <div class="container-fluid review-fluid">
        <div class="container review-wrap">
            <div class="row">
                    <h1 class="text-center"><i class="fas fa-globe"></i> @lang('titles.reviews')</h1>

                @if ($reviews)

                    @foreach ($reviews as $review)
             <div class="col-lg-3 col-sm-4 col-md-3 col-xs-12 wow animated fadeIn news-wrap ">

                @php
                       $title = '';
                       $text = '';
                 if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                     $title = str_limit($review->title,80);
                     $text = str_limit($review->text,140);
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                     $title = str_limit($review->title_ru,80);
                     $text = str_limit($review->text_ru,140);
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                     $title = str_limit($review->title_eng,80);
                     $text = str_limit($review->text_eng,140);
                 }
                        @endphp

                    <div class="review-image-block">
                        <a target="_blank" href="{{$review->link}}">
                        <img src="{{asset('assets').'/'.$review->little_image}}" alt="">
                        </a>
                    </div>
                    <div class="news-title">
                        <a target="_blank" href="{{$review->link}}">
                                <h4>{{$title}}</h4>
                        </a>
                    </div>
                    <div class="agency">
                        <span><i class="fas fa-pencil-alt"></i> {{$review->agency}}</span>
                    </div>
                    <div class="review-text">
                        <p>{{$text}}</p>
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
                                    {{$reviews->links('paginate.paginate')}}
                                </div>
                           </div>
                        </div>
        </div>
</div>
        <div class="clearfix"></div>


@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
