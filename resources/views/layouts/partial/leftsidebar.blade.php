<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                <img src="{{asset('backend/images/users/avatar-1.jpg')}}" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kenny Rigdon</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"> Profile</a></li>
                        <li><a href="javascript:void(0)"> Settings</a></li>
                        <li><a href="javascript:void(0)"> Lock screen</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)"> Logout</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="index.html" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                <li>
                    <a href="index.html" class="waves-effect"><i class="ti-home"></i><span> Home Page </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Home page Control</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('slider.index')}}">Slider</a></li>
                        <li><a href="{{ route('feature.index')}}">Feature</a></li>
                        <li><a href="{{ route('about.index')}}">About</a></li>
                        <li><a href="{{ route('category.index')}}">Category</a></li>
                        <li><a href="{{ route('item.index')}}">Portfolio</a></li>
                        <li><a href="{{ route('successcounter.index')}}">Success Score</a></li>


                        <li><a href="ui-components.html">Components</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                    </ul>
                </li>

     

                <!--<li class="has_sub">-->
                    <!--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Menu </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                    <!--<ul>-->
                        <!--<li class="has_sub">-->
                            <!--<a href="javascript:void(0);" class="waves-effect"><span>Menu Item 1.1</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                            <!--<ul style="">-->
                                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.1</span></a></li>-->
                                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li>-->
                            <!--</ul>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="javascript:void(0);"><span>Menu Item 1.2</span></a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>