@include('layouts.head')
  <div class="container-fluid galery-page-fluid">
      <div class="container galery-page-container">
          <div class="galery-page-wrap">
            <h1 class="text-center"><i class="far fa-image"></i> @lang('titles.galery')</h1>
             
        <div class="item">
            <div class="clearfix light-galery-wrap"> 
                    

                @if ($photos)
                  
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                  @foreach ($photos as $photo)
                    <li class="galery-little-img" data-thumb="{{asset('assets').'/'.$photo->photo_thumb}}">
                        <img class="big-img" src="{{asset('assets').'/'.$photo->photo}}" />
                    </li>
                    @endforeach
                </ul>
                  
              @endif 
                    
            </div>
        </div> 
 









          </div>
      </div>
  </div>
    <div class="clearfix"></div>


@include('layouts.contact')


@include('layouts.footer')

@include('layouts.end_body')
