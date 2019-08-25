@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li><a href="{{  backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>Ֆայլ մենեջեր</span></a></li>
          <li><a href="{{  backpack_url('article') }}"><i class="fa fa-files-o"></i> <span>Նորություններ</span></a></li>
          <li><a href="{{  backpack_url('pressreview') }}"><i class="fa fa-files-o"></i> <span>Մամուլի անդրադարձ</span></a></li>
          <li><a href="{{  backpack_url('photo') }}"><i class="fa fa-files-o"></i> <span>Նկարներ</span></a></li>
          <li><a href="{{  backpack_url('video') }}"><i class="fa fa-files-o"></i> <span>Վիդեոներ</span></a></li>
          <li><a href="{{  backpack_url('nomination') }}"><i class="fa fa-files-o"></i> <span>Անվանակարգեր</span></a></li>
          <li><a href="{{  backpack_url('rule') }}"><i class="fa fa-files-o"></i> <span>Կանոնակարգ</span></a></li>
          <li><a href="{{  backpack_url('sponsor') }}"><i class="fa fa-files-o"></i> <span>Հովանավորներ</span></a></li>
          <li><a href="{{  backpack_url('timetable') }}"><i class="fa fa-files-o"></i> <span>Ժամանակացույց</span></a></li>
          <li><a href="{{  backpack_url('jury') }}"><i class="fa fa-files-o"></i> <span>Ժյուրիներ</span></a></li>
          <li><a href="{{  backpack_url('worker') }}"><i class="fa fa-files-o"></i> <span>Աշխատակազմ</span></a></li>
          <li><a href="{{  backpack_url('history') }}"><i class="fa fa-files-o"></i> <span>Պատմություն</span></a></li>
          <li><a href="{{  backpack_url('conferance') }}"><i class="fa fa-files-o"></i> <span>Գիտաժողով</span></a></li>
          <li><a href="{{  backpack_url('slider') }}"><i class="fa fa-files-o"></i> <span>Սլայդեր</span></a></li>
   <li><a href="{{  backpack_url('request') }}"><i class="fa fa-files-o"></i> <span>Հայտի կանոններ</span></a></li>

          <li><a href="{{  backpack_url('organizer') }}"><i class="fa fa-files-o"></i> <span>Կազմակերպիչներ</span></a></li>

          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
