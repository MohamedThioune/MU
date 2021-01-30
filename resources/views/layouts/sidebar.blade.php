<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <!-- Load images and if this load preloader image correspond to this user  -->
                @if(Auth::user()->photo)
                    <img src="{{asset('images/uploads')}}/{{Auth::user()->photo}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                @elseif(Auth::user()->age <= 15)
                    <img src="{{asset('images/kids_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                @elseif(Auth::user()->age > 15 && Auth::user()->sex == '1')
                    <img src="{{asset('images/flow_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                @elseif(Auth::user()->age > 15 && Auth::user()->sex == '0')
                    <img src="{{asset('images/sista_preloader.png')}}" style="width:45px; height:42px"  class="img-circle" alt="User Image"/>
                @endif
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>InfyOm</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="search q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>