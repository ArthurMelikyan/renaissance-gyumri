@include('layouts.head')


  <div class="request-page-fluid container-fluid">
        <div class="container request-page-wrap">
            <h1 class="text-center request-page-title">@lang('menu.send_request')</h1>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">

             @if (count($errors) > 0)
             <div class="alert alert-danger alert-dismissable fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                     <ul>
                   @foreach ($errors as $error)
                           <li>{{$error}}</li>
                   @endforeach
                    </ul>

             </div>
             @endif
             @if (session()->has('success'))
             <div class="alert alert-success alert-dismissable fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @lang('titles.messages.request_success')
             </div>
             @endif


                    <form id="request_form" action="{{route('request')}}" enctype="multipart/form-data" method="post" >
                        	{{ csrf_field() }}
                        <div class="form-group">
                            <input name="name_request"  value="{{old('name_request')}}" type="text"  class="form-control"  placeholder="@lang('titles.forms.name_surname')">
                        </div>
                        <div class="form-group">
                            <input name="email_request" value="{{old('email_request')}}" type="email"  class="form-control" placeholder="@lang('titles.forms.email')">
                        </div>
                        <div class="form-group">
                            <input name="phone_request" value="{{old('phone_request')}}" type="text"   class="form-control"  placeholder="@lang('titles.forms.phone')">
                        </div>
                        <div class="form-group">
                            <input  name="complited_request"   data-placeholder="@lang('titles.forms.complited_request')"  type="file" data-text="@lang('titles.buttons.attach')" class="filestyle" data-btnClass="file-btn" data-size="md">
                        </div>
                        <div class="form-group">
                            <input name="photo"   data-placeholder="@lang('titles.forms.photo')"  type="file" data-text="@lang('titles.buttons.attach')" class="filestyle" data-btnClass="file-btn" data-size="md">
                        </div>
                        <div class="form-group">
                            <input name="passportfile"  data-placeholder="@lang('titles.forms.passport_scan')"  type="file" data-text="@lang('titles.buttons.attach')" class="filestyle" data-btnClass="file-btn" data-size="md">
                        </div>
                        <div class="form-group">
                            <input name="receipt" data-placeholder="@lang('titles.forms.receipt')" type="file" data-text="@lang('titles.buttons.attach')" class="filestyle" data-btnClass="file-btn" data-size="md">
                        </div>
                        <div class="submit-block text-center">
                            <input id="submit_button" class="input-button" type="submit" value="@lang('titles.buttons.send')">
                        </div>
                    </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 request-rules-block">
                        <h4 class="text-center">@lang('request_rules.request_rule')</h4>

                    @php

                      if (\LaravelLocalization::getCurrentLocale() == 'hy') {
                          $req_condition = $requests_condition->condition;
                      } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
                          $req_condition = $requests_condition->condition_ru;
                      } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
                          $req_condition = $requests_condition->condition_eng;
                      }
                    @endphp

                      {!!$req_condition!!}

                        <div class="request-download-block text-center">
                            <h4>  @lang('request_rules.download_req_music')</h4>
                            <a target="_blank" href="{{asset('assets/downloads/singers/singers_arm.docx')}}"><i class="fas fa-download"></i> Հայերեն</a>
                            <a target="_blank" href="{{asset('assets/downloads/singers/singers_eng.docx')}}"><i class="fas fa-download"></i> English</a>
                            <a target="_blank" href="{{asset('assets/downloads/singers/singers_ru.docx')}}" ><i class="fas fa-download"></i> Русский</a>

                        </div>
                        <div class="request-download-block text-center">
                            <h4>  @lang('request_rules.download_req_choir')</h4>
                            <a target="_blank" href="{{asset('assets/downloads/choir/choir_arm.docx')}}"><i class="fas fa-download"></i> Հայերեն</a>
                            <a target="_blank" href="{{asset('assets/downloads/choir/choir_eng.docx')}}"><i class="fas fa-download"></i> English</a>
                            <a target="_blank" href="{{asset('assets/downloads/choir/choir_ru.docx')}}" ><i class="fas fa-download"></i> Русский</a>
                        </div>
                        <div class="request-download-block text-center">
                            <h4>@lang('request_rules.download_req_painter')</h4>
                            <a target="_blank" href="{{asset('assets/downloads/painter/painter_arm.docx')}}"><i class="fas fa-download"></i> Հայերեն</a>
                            <a target="_blank" href="{{asset('assets/downloads/painter/painter_eng.docx')}}"><i class="fas fa-download"></i> English</a>
                            <a target="_blank" href="{{asset('assets/downloads/painter/painter_ru.docx')}}" ><i class="fas fa-download"></i> Русский</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>


@include('layouts.contact')

@include('layouts.footer')

@include('layouts.end_body')
