<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
        <!--Left empty for now-->
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="images/user/1.png" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                {{--<li>--}}
                                    {{--<a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>--}}
                                {{--</li>--}}
                        @if( auth()->guard('admin')->check() )
                                    <li>
                                        <a href="{{ route('lecture.comment.index') }}">
                                            <i class="icon-envelope-open"></i> <span>Inbox</span>
                                            <div class="badge gradient-3 badge-pill gradient-1">
                                            </div>
                                        </a>
                                    </li>
                            @endif

                                <li>
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn btn-block mb-1 btn-light" type="submit"><i class="icon-key"></i> logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>