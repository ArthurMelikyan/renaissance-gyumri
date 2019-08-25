@include('layouts.head')

<div class="container-fluid rules-page single-page-fluid">
    <div class="container single-page-container">
        <div class="wow animated rules-page-wrap fadeInUp news-content-block col-md-8 col-md-push-2 col-sm-12">
                <h1 class="text-center">
                    <i class="fas fa-pencil-alt"></i>
                    @lang('menu.rules')</h1>
            <div class="text-block"> 
                
                @if ($onerule) 
                    @php
                        $rule = '';
                            if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                                $rule = $onerule['text'];
                            } 
                            elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                                 $rule = $onerule['text_ru'];
                            }
                            elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                                 $rule = $onerule['text_eng'];
                            }
                    @endphp
                    {!!$rule!!}
                @endif
            </div> 
        </div>
    </div>

</div>


@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
