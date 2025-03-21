<div class="main-panel"><br>
  <?php if($this->session->success): ?>
    <p class="alert alert-success"><?php echo $this->session->success ?></p>
  <?php  endif;?>
  <?php if($this->session->error): ?>
    <p class="alert alert-warning"><?php echo $this->session->error ?></p>
  <?php  endif;?>
  <div class="content-wrapper">
    <div class="row purchace-popup">
      <!-- <div class="col-12">
        <span class="d-block d-md-flex align-items-center">
          <p>Like what you see? Check out our premium version for more.</p>
          <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Download Free Version</a>
          <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Upgrade To Pro</a>
          <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
        </span>
      </div> -->
    </div>
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-format-list-bulleted text-danger icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right">Total Jobs</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0"><?php echo $totaljob; ?></h3>
                </div>
              </div>
            </div>
            <p class="text-muted mt-3 mb-0">
              <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <!-- 65% lower growth -->
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-receipt text-warning icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right">Total Job Category </p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0"><?php echo $totaljobcat; ?></h3>
                </div>
              </div>
            </div>
           
            </p> <!-- <p class="text-muted mt-3 mb-0">
              <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales -->
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-poll-box text-success icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right">Industry</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0"><?php echo $totalindustry; ?></h3>
                </div>
              </div>
            </div>
           <!--  <p class="text-muted mt-3 mb-0">
              <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
            </p> -->
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-account-location text-info icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right">Employees</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0"><?php echo $totalemployee; ?></h3>
                </div>
              </div>
            </div>
          <!--   <p class="text-muted mt-3 mb-0">
              <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
            </p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <!--weather card-->
        <div class="card card-weather">
          <div class="card-body">
            <div class="weather-date-location">
              <h3><?php echo date('l'); ?></h3>
              <p class="text-gray">
                <span class="weather-date"><?php echo date('d F, Y'); ?></span>
                <span class="weather-location"><?php echo date_default_timezone_get(); ?></span>
              </p>
            </div>
            <div class="weather-data d-flex">
              <div class="mr-auto">
                <h4 class="display-3 "><span class="clock"><?php echo date('h:i:s'); ?></span>
                  <span class="symbol"></span><?php //echo date('A'); ?></h4>
                  <!-- <p>
                    Mostly Cloudy
                  </p> -->
                </div>
              </div>
            </div>

          </div>
          <!--weather card ends-->
        </div>
       <!--  <div class="col-lg-5 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title text-primary mb-5">Performance History</h2>
              <div class="wrapper d-flex justify-content-between">
                <div class="side-left">
                  <p class="mb-2">The best performance</p>
                  <p class="display-3 mb-4 font-weight-light">+45.2%</p>
                </div>
                <div class="side-right">
                  <small class="text-muted">2017</small>
                </div>
              </div>
              <div class="wrapper d-flex justify-content-between">
                <div class="side-left">
                  <p class="mb-2">Worst performance</p>
                  <p class="display-3 mb-5 font-weight-light">-35.3%</p>
                </div>
                <div class="side-right">
                  <small class="text-muted">2015</small>
                </div>
              </div>
              <div class="wrapper">
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Sales</p>
                  <p class="mb-2 text-primary">88%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 88%" aria-valuenow="88"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="wrapper mt-4">
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Visits</p>
                  <p class="mb-2 text-success">56%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 56%" aria-valuenow="56"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
     <!--  <div class="row">
     -->
     <!--  <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Orders</h4>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        First name
                      </th>
                      <th>
                        Progress
                      </th>
                      <th>
                        Amount
                      </th>
                      <th>
                        Sales
                      </th>
                      <th>
                        Deadline
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="font-weight-medium">
                        1
                      </td>
                      <td>
                        Herman Beck
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 77.99
                      </td>
                      <td class="text-danger"> 53.64%
                        <i class="mdi mdi-arrow-down"></i>
                      </td>
                      <td>
                        May 15, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="font-weight-medium">
                        2
                      </td>
                      <td>
                        Messsy Adam
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $245.30
                      </td>
                      <td class="text-success"> 24.56%
                        <i class="mdi mdi-arrow-up"></i>
                      </td>
                      <td>
                        July 1, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="font-weight-medium">
                        3
                      </td>
                      <td>
                        John Richards
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $138.00
                      </td>
                      <td class="text-danger"> 28.76%
                        <i class="mdi mdi-arrow-down"></i>
                      </td>
                      <td>
                        Apr 12, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="font-weight-medium">
                        4
                      </td>
                      <td>
                        Peter Meggik
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                          aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 77.99
                      </td>
                      <td class="text-danger"> 53.45%
                        <i class="mdi mdi-arrow-down"></i>
                      </td>
                      <td>
                        May 15, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="font-weight-medium">
                        5
                      </td>
                      <td>
                        Edward
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                          aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 160.25
                      </td>
                      <td class="text-success"> 18.32%
                        <i class="mdi mdi-arrow-up"></i>
                      </td>
                      <td>
                        May 03, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="font-weight-medium">
                        6
                      </td>
                      <td>
                        Henry Tom
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                          aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 150.00
                      </td>
                      <td class="text-danger"> 24.67%
                        <i class="mdi mdi-arrow-down"></i>
                      </td>
                      <td>
                        June 16, 2015
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Manage Tickets</h5>
              <div class="fluid-container">
                <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                  <div class="col-md-1">
                    <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face1.jpg" alt="profile image">
                  </div>
                  <div class="ticket-details col-md-9">
                    <div class="d-flex">
                      <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James :</p>
                      <p class="text-primary mr-1 mb-0">[#23047]</p>
                      <p class="mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
                    </div>
                    <p class="text-gray ellipsis mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim
                      vivamus.
                    </p>
                    <div class="row text-gray d-md-flex d-none">
                      <div class="col-4 d-flex">
                        <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                        <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                      </div>
                      <div class="col-4 d-flex">
                        <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                        <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-actions col-md-2">
                    <div class="btn-group dropdown">
                      <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                          <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                          <a class="dropdown-item" href="#">
                            <i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                              <a class="dropdown-item" href="#">
                                <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                          <div class="col-md-1">
                            <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face2.jpg" alt="profile image">
                          </div>
                          <div class="ticket-details col-md-9">
                            <div class="d-flex">
                              <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Stella :</p>
                              <p class="text-primary mr-1 mb-0">[#23135]</p>
                              <p class="mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
                            </div>
                            <p class="text-gray ellipsis mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet
                              nisl.
                            </p>
                            <div class="row text-gray d-md-flex d-none">
                              <div class="col-4 d-flex">
                                <small class="mb-0 mr-2 text-muted">Last responded :</small>
                                <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                              </div>
                              <div class="col-4 d-flex">
                                <small class="mb-0 mr-2 text-muted">Due in :</small>
                                <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                              </div>
                            </div>
                          </div>
                          <div class="ticket-actions col-md-2">
                            <div class="btn-group dropdown">
                              <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manage
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">
                                  <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                  <a class="dropdown-item" href="#">
                                    <i class="fa fa-history fa-fw"></i>Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row ticket-card mt-3">
                                  <div class="col-md-1">
                                    <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face3.jpg" alt="profile image">
                                  </div>
                                  <div class="ticket-details col-md-9">
                                    <div class="d-flex">
                                      <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">John Doe :</p>
                                      <p class="text-primary mr-1 mb-0">[#23246]</p>
                                      <p class="mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                                    </div>
                                    <p class="text-gray ellipsis mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
                                    <div class="row text-gray d-md-flex d-none">
                                      <div class="col-4 d-flex">
                                        <small class="mb-0 mr-2 text-muted">Last responded :</small>
                                        <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                                      </div>
                                      <div class="col-4 d-flex">
                                        <small class="mb-0 mr-2 text-muted">Due in :</small>
                                        <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="ticket-actions col-md-2">
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                          <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                          <a class="dropdown-item" href="#">
                                            <i class="fa fa-history fa-fw"></i>Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                              <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                              <a class="dropdown-item" href="#">
                                                <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                            <script>
                              $(document).ready(function() {
                               // alert('yes');
                               function startTime() {
                                var today = new Date();
                                var h = today.getHours();
                                var m = today.getMinutes();
                                var s = today.getSeconds();
                                m = checkTime(m);
                                s = checkTime(s);
                                $('.clock').html(h + ":" + m + ":" + s);
                                var t = setTimeout(startTime, 500);
                              }
                              startTime();
                              function checkTime(i) {
                                  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                                  return i;
                                }
                                
                              });
                            </script>