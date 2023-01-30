<div class="header">    
  <div class="header-content clearfix">
      <div class="nav-control">
          <div class="hamburger">
              <span class="toggle-icon"><i class="icon-menu"></i></span>
          </div>
      </div>
      <div class="header-left">
          <div class="input-group icons">
              <div class="input-group-prepend">
                  <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
              </div>
              <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
              <div class="drop-down d-md-none">
                  <form action="#">
                    <input type="text" class="form-control" placeholder="Search">
                  </form>
              </div>
          </div>
      </div>
      <div class="header-right">
          <ul class="clearfix">
              <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                      <i class="mdi mdi-email-outline"></i>
                      <span class="badge gradient-1 badge-pill badge-primary">3</span>
                  </a>
                  <div class="drop-down animated fadeIn dropdown-menu">
                      <div class="dropdown-content-heading d-flex justify-content-between">
                          <span class="">3 New Messages</span>  
                      </div>
                      <div class="dropdown-content-body">
                          <ul>
                              <li class="notification-unread">
                                  <a href="javascript:void()">
                                      <img class="float-left mr-3 avatar-img" src="{{ asset('back/images/avatar/2.jpg') }}" alt="">
                                      <div class="notification-content">
                                          <div class="notification-heading">Adam Smith</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Can you do me a favour?</div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void()">
                                      <img class="float-left mr-3 avatar-img" src="{{ asset('back/images/avatar/4.jpg') }}" alt="">
                                      <div class="notification-content">
                                          <div class="notification-heading">Hilari Clinton</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Hello</div>
                                      </div>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
              <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                      <span class="badge badge-pill gradient-2 badge-primary">3</span>
                  </a>
                  <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                      <div class="dropdown-content-heading d-flex justify-content-between">
                          <span class="">2 New Notifications</span>  
                      </div>
                      <div class="dropdown-content-body">
                          <ul>
                              <li>
                                  <a href="javascript:void()">
                                      <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                      <div class="notification-content">
                                          <h6 class="notification-heading">Events near you</h6>
                                          <span class="notification-text">Within next 5 days</span> 
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void()">
                                      <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                      <div class="notification-content">
                                          <h6 class="notification-heading">Event Started</h6>
                                          <span class="notification-text">One hour ago</span> 
                                      </div>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
              <li class="icons dropdown d-none d-md-flex">
                  <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                      <span>{{ auth()->user()->email }}</span><i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                  </a>
                  <div class="drop-down dropdown-language animated fadeIn dropdown-menu">
                      <div class="dropdown-content-body">
                        @if(auth()->user()->level == 1 or auth()->user()->level == 2)
                          <ul>
                              <li><a href="{{ route('logout') }}">Logout</a></li>
                          </ul>
                        @elseif(auth()->user()->level == 3)
                          <ul>
                              <li><a href="{{ route('agensi.settings') }}">Profile</a></li>
                              <li><a href="{{ route('logout') }}">Logout</a></li>
                          </ul>
                        @endif
                      </div>
                  </div>
              </li>
          </ul>
      </div>
  </div>
</div>