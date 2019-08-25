@include('layouts.head')



    <div class="container-fluid timetable single-page-fluid">
        <div class="container single-page-container">
        <div class="wow animated fadeInUp   nomination-block news-content-block col-md-12 ">
            <h1 class="text-center"> <i class="fas fa-address-card"></i>  @lang('titles.nomination')</h1>
            

            <div class="clearfix"></div>
            <div class="col-md-8 nomination-about ">
                <ol>
                    <li> @lang('titles.notice.nomination_notice')</li>
                </ol>
            </div>
            <div class="clearfix"></div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              
                
                @if ($nominations)
                    
                
                        @foreach ($nominations as $nomination)
                     @php
                       $nom_category = ''; 
                       $nom_text = '';
                 if ( LaravelLocalization::getCurrentLocale() === 'hy'){
                     $nom_category = $nomination->nomination_category; 
                     $nom_text = $nomination->nomination_text;
                 } 
                 elseif(LaravelLocalization::getCurrentLocale() === 'ru'){
                     $nom_category = $nomination->nomination_category_ru; 
                     $nom_text = $nomination->nomination_text_ru;
                 }
                 elseif(LaravelLocalization::getCurrentLocale() === 'en'){
                     $nom_category = $nomination->nomination_category_eng; 
                     $nom_text = $nomination->nomination_text_eng;
                 }
                        @endphp


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$nomination->id}}" aria-expanded="false"
                                aria-controls="{{$nomination->id}}">
                                <i  class="more-less glyphicon glyphicon-plus"></i>
                                {!!$nom_category!!}
                            </a>
                        </h4>
                    </div>
                    <div id="{{$nomination->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                           {!!$nom_text!!}
                        </div>
                    </div>
                </div>
             
               
                 @endforeach
   
            
                @endif    
            
            </div> 
        </div>
    </div>

    </div>
    <div class="clearfix"></div>

@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
