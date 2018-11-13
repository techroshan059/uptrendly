<aside class="ui-app__left-sidenav sidenav sidenav-fixed" id="ui-app__left-sidenav-slide-out" style="transform: translateX(0%);">

    <!-- sidenav menu list -->
    <ul class="no-margin">
        <!-- dashboard menu -->
        <li>
            <a href="{{url('/dashboard')}}" class="waves-effect waves-light btn btn-rounded btn-dashboard"><i class="material-icons left">dashboard</i>Dashboard</a>
        </li>

        <li>
            <ul class="ui-app__left-sidenav__menu collapsible collapsible-accordion ui-app__scrollbar">
                <li class="">

                    <a class="collapsible-header waves-effect waves-default" tabindex="0"><i class="material-icons left">build</i>CMS Management<i class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body" style="">
                        <ul>
                            <li><a href="{{url('admin/profession')}}" class="waves-effect waves-default">Professions</a></li>
                            <li><a href="{{url('admin/testimonials')}}" class="waves-effect waves-default">Testimonials</a></li>
                            <li><a href="{{url('admin/faqs')}}" class="waves-effect waves-default">FAQs</a></li>
                        </ul>
                    </div>
                </li>


            </ul>

        </li>
        <li class="ui-app__left-sidenav__collapsible-quick-menu-name">
            Quick Link
        </li>
        <li>
            <ul class="ui-app__left-sidenav__collapsible-quick-menu ui-app__scrollbar">
                <li><a href="#!"><i class="material-icons">help</i>Site Setting</a></li>
                <li><a href="#!"><i class="material-icons">phone</i>Contact Support</a></li>
                <li><a href="#!"><i class="material-icons">email</i>Email Support</a></li>
                <li><a href="#!"><i class="material-icons">code</i>API Documentation</a></li>
            </ul>
        </li>



        <!-- end sidenav quick/sub main menu list -->
    </ul>
    <!-- end sidenav menu list -->
</aside>