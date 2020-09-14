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
          <h4 class="c-grey-900">UI Elements</h4>
          <div class="masonry-sizer col-md-6"></div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Alerts</h6>
              <div class="mT-30">
                <div class="alert alert-primary" role="alert">
                  This is a primary alert—check it out!
                </div>
                <div class="alert alert-secondary" role="alert">
                  This is a secondary alert—check it out!
                </div>
                <div class="alert alert-success" role="alert">
                  This is a success alert—check it out!
                </div>
                <div class="alert alert-danger" role="alert">
                  This is a danger alert—check it out!
                </div>
                <div class="alert alert-warning" role="alert">
                  This is a warning alert—check it out!
                </div>
                <div class="alert alert-info" role="alert">
                  This is a info alert—check it out!
                </div>
                <div class="alert alert-light" role="alert">
                  This is a light alert—check it out!
                </div>
                <div class="alert alert-dark" role="alert">
                  This is a dark alert—check it out!
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Buttons</h6>
              <div class="mT-30">
                <div class="gap-10 peers">
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-primary">Primary</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-secondary">Secondary</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-success">Success</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-danger">Danger</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-warning">Warning</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-info">Info</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-light">Light</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-dark">Dark</button>
                  </div>
                </div>

                <div class="w-100 gap-10 peers mY-20">
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-primary">Primary</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-secondary">Secondary</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-success">Success</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-danger">Danger</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-warning">Warning</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-info">Info</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-light">Light</button>
                  </div>
                  <div class="peer">
                    <button type="button" class="btn cur-p btn-outline-dark">Dark</button>
                  </div>
                </div>

                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-success">1</button>
                    <button type="button" class="btn btn-success">2</button>
                    <button type="button" class="btn btn-success">3</button>
                    <button type="button" class="btn btn-success">4</button>
                  </div>
                  <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-success">5</button>
                    <button type="button" class="btn btn-success">6</button>
                    <button type="button" class="btn btn-success">7</button>
                  </div>
                  <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-success">8</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Dropdowns</h6>
              <div class="mT-30">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>

                <!-- Example split danger button -->
                <div class="btn-group mT-20">
                  <button type="button" class="btn btn-danger">Action</button>
                  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">List Group</h6>
              <div class="mT-30">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action actived">
                    Cras justo odio
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Modal</h6>
              <div class="mT-30">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Popover</h6>
              <div class="mT-30">
                <button type="button" class="btn btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Progress</h6>
              <div class="mT-30">
                <!-- Progress Bars -->
                <div class="layers">
                  <div class="layer w-100">
                    <h5 class="mB-5">100k</h5>
                    <small class="fw-600 c-grey-700">Visitors From USA</small>
                    <span class="pull-right c-grey-600 fsz-sm">50%</span>
                    <div class="progress mT-10">
                      <div class="progress-bar bgc-deep-purple-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span></div>
                    </div>
                  </div>
                  <div class="layer w-100 mT-15">
                    <h5 class="mB-5">1M</h5>
                    <small class="fw-600 c-grey-700">Visitors From Europe</small>
                    <span class="pull-right c-grey-600 fsz-sm">80%</span>
                    <div class="progress mT-10">
                      <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">80% Complete</span></div>
                    </div>
                  </div>
                  <div class="layer w-100 mT-15">
                    <h5 class="mB-5">450k</h5>
                    <small class="fw-600 c-grey-700">Visitors From Australia</small>
                    <span class="pull-right c-grey-600 fsz-sm">40%</span>
                    <div class="progress mT-10">
                      <div class="progress-bar bgc-light-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="sr-only">40% Complete</span></div>
                    </div>
                  </div>
                  <div class="layer w-100 mT-15">
                    <h5 class="mB-5">1B</h5>
                    <small class="fw-600 c-grey-700">Visitors From India</small>
                    <span class="pull-right c-grey-600 fsz-sm">90%</span>
                    <div class="progress mT-10">
                      <div class="progress-bar bgc-blue-grey-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">90% Complete</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-item col-md-6">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900">Tootips</h6>
              <div class="mT-30">
                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                  Tooltip on top
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                  Tooltip on right
                </button>
                <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                  Tooltip on bottom
                </button>
                <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                  Tooltip on left
                </button>
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
