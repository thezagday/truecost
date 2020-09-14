@extends('admin.base')

@section('style')
    <style>
    #loader {
      transition: all 0.3s ease-in-out;
      opacity: 1;
      visibility: visible;
      position: fixed;
      height: 100vh;
      width: 100%;
      background: #fff;
      z-index: 90000;
    }

    #loader.fadeOut {
      opacity: 0;
      visibility: hidden;
    }



    .spinner {
      width: 40px;
      height: 40px;
      position: absolute;
      top: calc(50% - 20px);
      left: calc(50% - 20px);
      background-color: #333;
      border-radius: 100%;
      -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
      animation: sk-scaleout 1.0s infinite ease-in-out;
    }

    @-webkit-keyframes sk-scaleout {
      0% { -webkit-transform: scale(0) }
      100% {
        -webkit-transform: scale(1.0);
        opacity: 0;
      }
    }

    @keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
      } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
    }
  </style>
@endsection

@section('main')
    <div class="page-container">
    <!-- ### $Topbar ### -->
    <div class="header navbar">
      <div class="header-container">
        <ul class="nav-left">
          <li>
            <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
              <i class="ti-menu"></i>
            </a>
          </li>
          <li class="search-box">
            <a class="search-toggle no-pdd-right" href="javascript:void(0);">
              <i class="search-icon ti-search pdd-right-10"></i>
              <i class="search-icon-close ti-close pdd-right-10"></i>
            </a>
          </li>
          <li class="search-input">
            <input class="form-control" type="text" placeholder="Search...">
          </li>
        </ul>
        <ul class="nav-right">
          <li class="notifications dropdown">
            <span class="counter bgc-red">3</span>
            <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
              <i class="ti-bell"></i>
            </a>

            <ul class="dropdown-menu">
              <li class="pX-20 pY-15 bdB">
                <i class="ti-bell pR-10"></i>
                <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
              </li>
              <li>
                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                  <li>
                    <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                      <div class="peer mR-15">
                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                      </div>
                      <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">John Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">post</span>
                              </span>
                            </span>
                        <p class="m-0">
                          <small class="fsz-xs">5 mins ago</small>
                        </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                      <div class="peer mR-15">
                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                      </div>
                      <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Moo Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">cover image</span>
                              </span>
                            </span>
                        <p class="m-0">
                          <small class="fsz-xs">7 mins ago</small>
                        </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                      <div class="peer mR-15">
                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                      </div>
                      <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Lee Doe</span>
                              <span class="c-grey-600">commented on your <span class="text-dark">video</span>
                              </span>
                            </span>
                        <p class="m-0">
                          <small class="fsz-xs">10 mins ago</small>
                        </p>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a>
                    </span>
              </li>
            </ul>
          </li>
          <li class="notifications dropdown">
            <span class="counter bgc-blue">3</span>
            <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
              <i class="ti-email"></i>
            </a>

            <ul class="dropdown-menu">
              <li class="pX-20 pY-15 bdB">
                <i class="ti-email pR-10"></i>
                <span class="fsz-sm fw-600 c-grey-900">Emails</span>
              </li>
              <li>
                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                  <li>
                    <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                      <div class="peer mR-15">
                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                      </div>
                      <div class="peer peer-greed">
                        <div>
                          <div class="peers jc-sb fxw-nw mB-5">
                            <div class="peer">
                              <p class="fw-500 mB-0">John Doe</p>
                            </div>
                            <div class="peer">
                              <small class="fsz-xs">5 mins ago</small>
                            </div>
                          </div>
                          <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                      <div class="peer mR-15">
                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                      </div>
                      <div class="peer peer-greed">
                        <div>
                          <div class="peers jc-sb fxw-nw mB-5">
                            <div class="peer">
                              <p class="fw-500 mB-0">Moo Doe</p>
                            </div>
                            <div class="peer">
                              <small class="fsz-xs">15 mins ago</small>
                            </div>
                          </div>
                          <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                      <div class="peer mR-15">
                        <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                      </div>
                      <div class="peer peer-greed">
                        <div>
                          <div class="peers jc-sb fxw-nw mB-5">
                            <div class="peer">
                              <p class="fw-500 mB-0">Lee Doe</p>
                            </div>
                            <div class="peer">
                              <small class="fsz-xs">25 mins ago</small>
                            </div>
                          </div>
                          <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a>
                    </span>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
              <div class="peer mR-10">
                <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
              </div>
              <div class="peer">
                <span class="fsz-sm c-grey-900">John Doe</span>
              </div>
            </a>
            <ul class="dropdown-menu fsz-sm">
              <li>
                <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                  <i class="ti-settings mR-10"></i>
                  <span>Setting</span>
                </a>
              </li>
              <li>
                <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                  <i class="ti-user mR-10"></i>
                  <span>Profile</span>
                </a>
              </li>
              <li>
                <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                  <i class="ti-email mR-10"></i>
                  <span>Messages</span>
                </a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                  <i class="ti-power-off mR-10"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <!-- ### $App Screen Content ### -->
    <main class='main-content bgc-grey-100'>
      <div id='mainContent'>
        <div class="row gap-20 masonry pos-r">
          <div class="masonry-sizer col-md-6 pos-a"></div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Line Chart</h6>
              <div class="mT-30">
                <canvas id="line-chart" height="220"></canvas>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Area Chart</h6>
              <div class="mT-30">
                <canvas id="area-chart" height="220"></canvas>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Scatter Chart</h6>
              <div class="mT-30">
                <canvas id="scatter-chart" height="220"></canvas>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Bar Chart</h6>
              <div class="mT-30">
                <canvas id="bar-chart" height="220"></canvas>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">jQuery Sparkline</h6>
              <div class="mT-30">
                <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
                  <div class="peer">
                    <span>Spark Line</span>
                  </div>
                  <div class="peer">
                    <span class="sparkline">&nbsp;</span>
                  </div>
                </div>
                <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
                  <div class="peer">
                    <span>Spark Bar</span>
                  </div>
                  <div class="peer">
                    <span class="sparkbar">&nbsp;</span>
                  </div>
                </div>
                <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
                  <div class="peer">
                    <span>Spark Tristate</span>
                  </div>
                  <div class="peer">
                    <span class="sparktri">&nbsp;</span>
                  </div>
                </div>
                <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
                  <div class="peer">
                    <span>Spark Discrete</span>
                  </div>
                  <div class="peer">
                    <span class="sparkdisc">&nbsp;</span>
                  </div>
                </div>
                <div class="peers ai-c jc-sb fxw-nw bdB pY-15">
                  <div class="peer">
                    <span>Spark Bullet</span>
                  </div>
                  <div class="peer">
                    <span class="sparkbull">&nbsp;</span>
                  </div>
                </div>
                <div class="peers ai-c jc-sb fxw-nw pT-15">
                  <div class="peer">
                    <span>Spark Box</span>
                  </div>
                  <div class="peer">
                    <span class="sparkbox">&nbsp;</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Easy Pie Charts</h6>
              <div class="mT-30">
                <div class="peers mT-20 fxw-nw@lg+ jc-sb ta-c gap-10">
                  <div class="peer">
                    <div class="easy-pie-chart" data-size='80' data-percent="75" data-bar-color='#f44336'>
                      <span></span>
                    </div>
                    <h6 class="fsz-sm">New Users</h6>
                  </div>
                  <div class="peer">
                    <div class="easy-pie-chart" data-size='80' data-percent="50" data-bar-color='#2196f3'>
                      <span></span>
                    </div>
                    <h6 class="fsz-sm">New Purchases</h6>
                  </div>
                  <div class="peer">
                    <div class="easy-pie-chart" data-size='80' data-percent="65" data-bar-color='#f44336'>
                      <span></span>
                    </div>
                    <h6 class="fsz-sm">New Customers</h6>
                  </div>
                  <div class="peer">
                    <div class="easy-pie-chart" data-size='80' data-percent="90" data-bar-color='#ff9800'>
                      <span></span>
                    </div>
                    <h6 class="fsz-sm">Bounce Rate</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- ### $App Screen Footer ### -->
    <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
      <span>Copyright © 2019 Designed by <a href="https://colorlib.com" target='_blank' title="Colorlib">Colorlib</a>. All rights reserved.</span>
    </footer>
  </div>
@endsection
