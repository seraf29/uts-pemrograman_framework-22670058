<!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <div class="navbar-brand-box">
                        <a href="{{ route('admin.index') }}" class="logo">
                            <i class="mdi mdi-album"></i>
                            <span>
                                Xeloro
                            </span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('admin.index') }}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                                        class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-diamond-stone"></i><span>UI Elements</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Cards</a></li>
                                    <li><a href="#">Carousel</a>
                                    <li><a href="#">Embeds</a>
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Grid</a></li>
                                    <li><a href="#">Media Objects</a></li>
                                    <li><a href="#">Modals</a></li>
                                    <li><a href="#">Progress Bars</a></li>
                                    <li><a href="#">Tabs</a></li>
                                    <li><a href="#">Typography</a></li>
                                    <li><a href="#">Toasts</a></li>
                                    <li><a href="#">Tooltips & Popovers</a></li>
                                    <li><a href="#">Scrollspy</a></li>
                                    <li><a href="#">Spinners</a></li>
                                    <li><a href="{{ route('admin.sweetalerts') }}">Sweet Alerts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-table-merge-cells"></i><span>Tables</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Basic Tables</a></li>
                                    <li><a href="{{ route('admin.datatables') }}">Data Tables</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-poll"></i><span>Charts</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Morris</a></li>
                                    <li><a href="#">Google</a></li>
                                    <li><a href="#">Chartjs</a></li>
                                    <li><a href="#">Sparkline</a></li>
                                    <li><a href="#">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect"><i
                                        class="mdi mdi-format-list-bulleted-type"></i><span
                                        class="badge badge-pill badge-danger float-right">6</span><span>Forms</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.forms') }}">Elements</a></li>
                                    <li><a href="#">Plugins</a></li>
                                    <li><a href="#">Validation</a></li>
                                    <li><a href="#">Masks</a></li>
                                    <li><a href="#">Quilljs</a></li>
                                    <li><a href="#">File Uploads</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-black-mesa"></i><span>Icons</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Material Design</a></li>
                                    <li><a href="#">Font awesome</a></li>
                                    <li><a href="#">Dripicons</a></li>
                                    <li><a href="#">Feather Icons</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">More</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-format-page-break"></i><span>Pages</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Invoice</a></li>
                                    <li><a href="#">Starter Page</a></li>
                                    <li><a href="#">Maintenance</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Recover Password</a></li>
                                    <li><a href="#">Lock Screen</a></li>
                                    <li><a href="#">Error 404</a></li>
                                    <li><a href="#">Error 500</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('admin.calendar') }}" class=" waves-effect"><i
                                        class="mdi mdi-calendar-range-outline"></i><span>Calendar</span></a></li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-map-marker-radius"></i><span>Maps</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Google Maps</a></li>
                                    <li><a href="#">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                        class="mdi mdi-share-variant"></i><span>Multi Level</span></a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
