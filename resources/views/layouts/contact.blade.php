<div class="clearfix"></div>

    <div class="container-fluid contact-fluid">

        <div id="contact" class="container">

            <h1 class="text-center">@lang('titles.contact_us')</h1>
            <div class="contact-info">
                <div class="col-md-4 contact-grids map wow fadeIn animated">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.6079433169853!2d43.8438771149647!3d40.79263257932324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041fbed07df7759%3A0xb9d60a8b03d1e09f!2sAcademy+of+Arts!5e0!3m2!1sen!2sin!4v1517693856635"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-5 contact-grids wow fadeIn  animated">
                    <form id="#contact_form" action="{{action('ContactController@index')}}" method="POST">
                            {{ csrf_field() }}
                        <input value="" name="name" type="text" placeholder="@lang('titles.forms.name_surname')">
                        <input value="" name="email" type="text" placeholder="@lang('titles.forms.email')" >
                        <input value="" name="phone" type="text" placeholder="@lang('titles.forms.phone')" >
                        <textarea value="" name="message" placeholder="@lang('titles.forms.message')" ></textarea>
                        <button id="contact_submit" class="input-button">@lang('titles.buttons.send')
                            <i id="spin" style="display:none" class="fa fa-spinner fa-spin"></i>
                        </button>
                    </form>
                </div>
                <div class="col-md-3 contact-grids wow fadeIn animated">
                    <h4>@lang('titles.info.conservatory_name')</h4>
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            @lang('titles.info.adress')
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            +374/312-5-94-35
                        </li>
		         <li>
                            <i class="fas fa-phone"></i>
                            +374/312-4-53-90
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:renaissance2016@list.ru">renaissance2016@list.ru</a> <br>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:renaissancegyumri@gmail.com">renaissancegyumri@gmail.com</a>
                            <br>
			    <i class="fas fa-envelope"></i>
			    <a href="mailto:renaissancegyumri@gmail.com">karine_avd@mail.ru</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

