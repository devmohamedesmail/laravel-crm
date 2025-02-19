<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{route('dashboard')}}" class="logo mt-5">
                <img src="/uploads/setting/{{ $setting->logo }}" width="100px" height="100px" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>










    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>








                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>{{ __('translate.invoices') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">

                            <li>
                                <a href="{{ route('show.invoices') }}">
                                    <span class="sub-item">{{ __('translate.show-invoices') }}</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('add.invoice') }}">
                                    <span class="sub-item">{{ __('translate.add-invoice') }}</span>
                                </a>
                            </li>





                        </ul>
                    </div>
                </li>





                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>{{ __('translate.staff') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('show.staff.page') }}">
                                    <span class="sub-item">{{ __('translate.show-staff') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('add.staff.page') }}">
                                    <span class="sub-item">{{ __('translate.add-staff') }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>






                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>{{ __('translate.clients') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('show.clients.page') }}">
                                    <span class="sub-item">{{ __('translate.show-clients') }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#maps">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>{{ __('translate.branches') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            @foreach ($branches as $branch)
                            <li>
                                <a href="{{ route('show.branch.invoices', $branch->id) }}">
                                    <span class="sub-item">{{ $branch->name }}</span>
                                </a>
                            </li>
                            @endforeach
                            
                            
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>{{ __('translate.purchases') }}</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('show.purcheases.page') }}">
                        <span class="sub-item">{{ __('translate.show-purchases') }}</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('add.purcheases.page') }}">
                        <span class="sub-item">{{ __('translate.add-purchases') }}</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>





                <li class="nav-item">
                    <a href="{{ route('show.checks.page') }}">
                        <i class="fas fa-desktop"></i>
                        <p>{{__('translate.checks')}}</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>