<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">

            @if( auth()->guard('admin')->check() )
                <li class="mega-menu mega-menu-sm">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Users</span>
                    </a>
                    <ul aria-expanded="false">

                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-globe-alt menu-icon"></i><span class="nav-text">view Users</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('supervisor.index') }}">Supervisor</a></li>
                                <li class="nav-label">Appraisee</li>
                                <li><a href="{{ route('lecture.index') }}">Lectures</a></li>
                                <li><a href="{{ route('assistance_lecture.index') }}">Assistance Lect</a></li>
                                <li><a href="{{ route('tutorial_assistance.index') }}">Tut Assistance</a></li>
                            </ul>
                        </li>

                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Add Users</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('supervisor.create') }}">Supervisor</a></li>
                                <li class="nav-label">Appraisee</li>
                                <li><a href="{{ route('lecture.create') }}">Lectures</a></li>
                                <li><a href="{{ route('assistance_lecture.create') }}">Assistance Lect</a></li>
                                <li><a href="{{ route('tutorial_assistance.create') }}">Tut Assistance</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>


                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-grid menu-icon"></i><span class="nav-text">Objectives</span>
                    </a>
                    <ul aria-expanded="false">
                        <a href="{{ route('lecture.objectives.create') }}">Add Objectives</a>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-grid menu-icon"></i><span class="nav-text">Reports</span>
                    </a>
                    <ul aria-expanded="false">
                        <a href="{{ route('adminReport.create') }}">Lectures Reports</a>
                    </ul>
                </li>




               @elseif(auth()->guard('lecture')->check())
                 <li class="nav-label"><a href="{{ route('lecture.start-page') }}">Dashboard</a></li>
                <li class="nav-label">Home</li>

                <li>
                    <a href="{{ route('lecture.object.show') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Performance Agreements</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('lecture.target.create') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Mid-year Review</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('lecture.revised') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Revised Objectives</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('mark.create') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Four Month Perfomance Review</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('attributes.create') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Attributes</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('lecture.reportView') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">View Report</span>
                    </a>
                </li>




            @elseif(auth()->guard('supervisor')->check())
                <li class="nav-label"><a href="{{ route('supervisor.start') }}">Dashboard</a></li>
                <li class="nav-label">Home</li>

                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-envelope menu-icon"></i> <span class="nav-text">Appraisee</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('supervisor.all_lectures') }}">lectures</a></li>
                        <li><a href="#">Assistance Lecture</a></li>
                        <li><a href="#">Tutorial Assistance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('supervisor.all_lectures') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('supervisor.section_one') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Section 1</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('supervisor.attributes.create') }}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Section 2</span>
                    </a>
                </li>

            @endif

        </ul>
    </div>
</div>