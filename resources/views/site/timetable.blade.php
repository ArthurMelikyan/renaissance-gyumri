
@include('layouts.head')

    <div class="container-fluid timetable single-page-fluid">
        <div class="container single-page-container">
            <div class="wow animated fadeInUp news-content-block col-md-12  ">
                <h1 class="text-center ">@lang('titles.timetable_title')</h2>
                    <ul>
                       @lang('titles.timetable_rule')
                    </ul>
                <h1 class="text-center">
                    <i class="far fa-clock"></i>
                   @lang('titles.timetable_table_top_title')</h1>
                <div class="text-block">
                    
                <div class="table-responsive">
                    
                    @if ($timetable)
                          
                    @php
                       $onetimetable = '';  
                        if ( LaravelLocalization::getCurrentLocale() === 'hy'){ 
                            $onetimetable = $timetable->timetable;
                        } 
                        elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                            $onetimetable = $timetable->timetable_ru;
                        }
                        elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                            $onetimetable = $timetable->timetable_eng;
                        }
                        @endphp

                        {!!$onetimetable!!}
                    @endif
                  
                    </div>
                  
                </div>
            </div>
        </div>




    </div>


@include('layouts.contact')


@include('layouts.footer')

@include('layouts.end_body')
