<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Learning Management System Online</title>
    <!-- all the meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
    <!-- all the css files -->
    <link rel="shortcut icon" href="http://localhost/2/Online_Learning_Management_System/uploads/system/favicon.png">
<!-- third party css -->
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/vendor/dropzone.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->
<!-- App css -->
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/app.min.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/icons.min.css" rel="stylesheet" type="text/css" />

<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/main.css" rel="stylesheet" type="text/css" />

<!-- font awesome 5 -->
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/2/Online_Learning_Management_System/assets/backend/css/font-awesome-icon-picker/fontawesome-iconpicker.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/onDomChange.js"></script>
</head>
<body data-layout="detached">
    <!-- HEADER -->
    <!-- Topbar Start -->
<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">

        <!-- LOGO -->
        <a href="http://localhost/2/Online_Learning_Management_System/Admin" class="topnav-logo" style = "min-width: unset;">
            <span class="topnav-logo-lg">
                <img src="http://localhost/2/Online_Learning_Management_System/uploads/system/logo-light.png" alt="" height="40">
            </span>
            <span class="topnav-logo-sm">
                <img src="http://localhost/2/Online_Learning_Management_System/uploads/system/logo-light-sm.png" alt="" height="40">
            </span>
        </a>

        <ul class="list-unstyled topbar-right-menu float-right mb-0">

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="http://localhost/2/Online_Learning_Management_System/uploads/user_image/placeholder.png" alt="user-image" class="rounded-circle">
                </span>
                <span  style="color: #fff;">
                                        <span class="account-user-name">admin admin</span>
                    <span class="account-position">Admin</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
            aria-labelledby="topbar-userdrop">
            <!-- item-->
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
            </div>

            <!-- Account -->
            <a href="http://localhost/2/Online_Learning_Management_System/admin/manage_profile" class="dropdown-item notify-item">
                <i class="mdi mdi-account-circle mr-1"></i>
                <span>My Account</span>
            </a>

                            <!-- settings-->
                <a href="http://localhost/2/Online_Learning_Management_System/admin/system_settings" class="dropdown-item notify-item">
                    <i class="mdi mdi-settings mr-1"></i>
                    <span>Settings</span>
                </a>

            

            <!-- Logout-->
            <a href="http://localhost/2/Online_Learning_Management_System/login/logout" class="dropdown-item notify-item">
                <i class="mdi mdi-logout mr-1"></i>
                <span>Logout</span>
            </a>

        </div>
    </li>

</ul>
<a class="button-menu-mobile disable-btn">
    <div class="lines">
        <span></span>
        <span></span>
        <span></span>
    </div>
</a>
<div class="app-search">
    <h4 style="color: #fff; float: left;"> Learning Management System Online</h4>
    <a href="http://localhost/2/Online_Learning_Management_System/home" target="" class="btn btn-outline-light ml-3">Visit Website</a>
</div>
</div>
</div>
<!-- end Topbar -->
    <div class="container-fluid">
        <div class="wrapper">
            <!-- BEGIN CONTENT -->
            <!-- SIDEBAR -->
            <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu left-side-menu-detached">
	<div class="leftbar-user">
		<a href="javascript: void(0);">
			<img src="http://localhost/2/Online_Learning_Management_System/uploads/user_image/placeholder.png" alt="user-image" height="42" class="rounded-circle shadow-sm">
						<span class="leftbar-user-name">admin admin</span>
		</a>
	</div>

	<!--- Sidemenu -->
		<ul class="metismenu side-nav side-nav-light">

			<li class="side-nav-title side-nav-item">Navigation</li>

			<li class="side-nav-item active">
				<a href="http://localhost/2/Online_Learning_Management_System/admin/dashboard" class="side-nav-link">
					<i class="dripicons-view-apps"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li class="side-nav-item ">
				<a href="javascript: void(0);" class="side-nav-link ">
					<i class="dripicons-network-1"></i>
					<span> Categories </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class = "">
						<a href="http://localhost/2/Online_Learning_Management_System/admin/categories">Categories</a>
					</li>

					<li class = "">
						<a href="http://localhost/2/Online_Learning_Management_System/admin/category_form/add_category">Add New Category</a>
					</li>
				</ul>
			</li>

			<li class="side-nav-item">
				<a href="http://localhost/2/Online_Learning_Management_System/admin/courses" class="side-nav-link ">
					<i class="dripicons-archive"></i>
					<span>Courses</span>
				</a>
			</li>
			<li class="side-nav-item">
				<a href="http://localhost/2/Online_Learning_Management_System/admin/users" class="side-nav-link ">
					<i class="dripicons-user-group"></i>
					<span>Students</span>
				</a>
			</li>

			<li class="side-nav-item ">
				<a href="javascript: void(0);" class="side-nav-link ">
					<i class="dripicons-network-3"></i>
					<span> Enrolment </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class = "">
						<a href="http://localhost/2/Online_Learning_Management_System/admin/enrol_history">Enrol History</a>
					</li>

					<li class = "">
						<a href="http://localhost/2/Online_Learning_Management_System/admin/enrol_student">Enrol A Student</a>
					</li>
				</ul>
			</li>

			<li class="side-nav-item">
				<a href="javascript: void(0);" class="side-nav-link ">
					<i class="dripicons-box"></i>
					<span> Report </span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class = "" > <a href="http://localhost/2/Online_Learning_Management_System/admin/admin_revenue">Admin Revenue</a> </li>
												<li class = "" >
									<a href="http://localhost/2/Online_Learning_Management_System/admin/instructor_revenue">
											Instructor Revenue <span class = "badge badge-danger-lighten badge-pill">0</span>
									</a>
							</li>
									</ul>
			</li>

			<li class="side-nav-item">
				<a href="http://localhost/2/Online_Learning_Management_System/admin/message" class="side-nav-link ">
					<i class="dripicons-message"></i>
					<span>Message</span>
				</a>
			</li>

			<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link ">
				<i class="dripicons-toggles"></i>
				<span> Settings </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/system_settings">System Settings</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/frontend_settings">Website Settings</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/payment_settings">Payment Settings</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/instructor_settings">Instructor Settings</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/manage_language">Language Settings</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/smtp_settings">Smtp Settings</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/about">About</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/themes">Themes</a>
				</li>
				<li class = "">
					<a href="http://localhost/2/Online_Learning_Management_System/admin/mobile_app">Mobile App</a>
				</li>
			</ul>
		</li>
	    </ul>
</div>
            <!-- PAGE CONTAINER-->
            <div class="content-page">
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Dashboard</h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title mb-4">Admin Revenue This Year</h4>

                <div class="mt-3 chartjs-chart" style="height: 320px;">
                    <canvas id="task-area-chart"></canvas>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-12">
        <div class="card widget-inline">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 col-xl-3">
                        <a href="http://localhost/2/Online_Learning_Management_System/admin/courses" class="text-secondary">
                            <div class="card shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="dripicons-archive text-muted" style="font-size: 24px;"></i>
                                    <h3><span>2</span></h3>
                                    <p class="text-muted font-15 mb-0">Number Courses</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="http://localhost/2/Online_Learning_Management_System/admin/courses" class="text-secondary">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="dripicons-camcorder text-muted" style="font-size: 24px;"></i>
                                    <h3><span>3</span></h3>
                                    <p class="text-muted font-15 mb-0">Number Of Lessons</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="http://localhost/2/Online_Learning_Management_System/admin/enrol_history" class="text-secondary">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="dripicons-network-3 text-muted" style="font-size: 24px;"></i>
                                    <h3><span>0</span></h3>
                                    <p class="text-muted font-15 mb-0">Number Of Enrolment</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="http://localhost/2/Online_Learning_Management_System/admin/users" class="text-secondary">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                    <h3><span>0</span></h3>
                                    <p class="text-muted font-15 mb-0">Number Of Student</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div> <!-- end row -->
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Course Overview</h4>
                <div class="my-4 chartjs-chart" style="height: 202px;">
                    <canvas id="project-status-chart"></canvas>
                </div>
                <div class="row text-center mt-2 py-2">
                    <div class="col-6">
                        <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                        <h3 class="font-weight-normal">
                            <span>2</span>
                        </h3>
                        <p class="text-muted mb-0">Active Courses</p>
                    </div>
                    <div class="col-6">
                        <i class="mdi mdi-trending-down text-warning mt-3 h3"></i>
                        <h3 class="font-weight-normal">
                            <span>0</span>
                        </h3>
                        <p class="text-muted mb-0"> Pending Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card" id = 'unpaid-instructor-revenue'>
            <div class="card-body">
                <h4 class="header-title mb-3">Unpaid Instructor Revenues                    <a href="http://localhost/2/Online_Learning_Management_System/admin/instructor_revenue" class="alignToTitle" id ="go-to-instructor-revenue"> <i class="mdi mdi-logout"></i> </a>
                </h4>
                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <tbody>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#unpaid-instructor-revenue').mouseenter(function() {
        $('#go-to-instructor-revenue').show();
    });
    $('#unpaid-instructor-revenue').mouseleave(function() {
        $('#go-to-instructor-revenue').hide();
    });
</script>
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
    <!-- all the js files -->
    <!-- bundle -->
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/app.min.js"></script>
<!-- third party js -->
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/Chart.bundle.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/jquery.dataTables.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dataTables.bootstrap4.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dataTables.responsive.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dataTables.buttons.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/buttons.bootstrap4.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/buttons.html5.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/buttons.flash.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/buttons.print.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dataTables.keyTable.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dataTables.select.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/summernote-bs4.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/fullcalendar.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/pages/demo.summernote.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dropzone.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/pages/demo.dashboard.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/pages/datatable-initializer.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/font-awesome-icon-picker/fontawesome-iconpicker.min.js" charset="utf-8"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/bootstrap-tagsinput.min.js" charset="utf-8"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/bootstrap-tagsinput.min.js"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dropzone.min.js" charset="utf-8"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/ui/component.fileupload.js" charset="utf-8"></script>
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/pages/demo.form-wizard.js"></script>
<!-- dragula js-->
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/vendor/dragula.min.js"></script>
<!-- component js -->
<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/ui/component.dragula.js"></script>

<script src="http://localhost/2/Online_Learning_Management_System/assets/backend/js/custom.js"></script>

<!-- Dashboard chart's data is coming from this file -->

 <script type="text/javascript">
 ! function(o) {
     "use strict";
     var t = function() {
         this.$body = o("body"), this.charts = []
     };
     t.prototype.respChart = function(r, a, n, e) {
         Chart.defaults.global.defaultFontColor = "#8391a2", Chart.defaults.scale.gridLines.color = "#8391a2";
         var i = r.get(0).getContext("2d"),
             s = o(r).parent();
         return function() {
             var t;
             switch (r.attr("width", o(s).width()), a) {
                 case "Line":
                     t = new Chart(i, {
                         type: "line",
                         data: n,
                         options: e
                     });
                     break;
                 case "Doughnut":
                     t = new Chart(i, {
                         type: "doughnut",
                         data: n,
                         options: e
                     })
             }
             return t
         }()
     }, t.prototype.initCharts = function() {
         var t = [];
         if (0 < o("#task-area-chart").length) {
             t.push(this.respChart(o("#task-area-chart"), "Line", {
                 labels: [
                                          "January",
                                        "February",
                                        "March",
                                        "April",
                                        "May",
                                        "June",
                                        "July",
                                        "August",
                                        "September",
                                        "October",
                                        "November",
                                        "December",
                                     ],
                 datasets: [{
                     label: "This Year",
                     backgroundColor: "rgba(114, 124, 245, 0.3)",
                     borderColor: "#727cf5",
                     data: [
                                                 "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                                "0",
                                             ]
                 }]
             }, {
                 maintainAspectRatio: !1,
                 legend: {
                     display: !1
                 },
                 tooltips: {
                     intersect: !1
                 },
                 hover: {
                     intersect: !0
                 },
                 plugins: {
                     filler: {
                         propagate: !1
                     }
                 },
                 scales: {
                     xAxes: [{
                         reverse: !0,
                         gridLines: {
                             color: "rgba(0,0,0,0.05)"
                         }
                     }],
                     yAxes: [{
                         ticks: {
                             stepSize: 10,
                             display: !1
                         },
                         min: 10,
                         max: 100,
                         display: !0,
                         borderDash: [5, 5],
                         gridLines: {
                             color: "rgba(0,0,0,0)",
                             fontColor: "#fff"
                         }
                     }]
                 }
             }))
         }
         if (0 < o("#project-status-chart").length) {
             t.push(this.respChart(o("#project-status-chart"), "Doughnut", {
                 labels: ["Active Course", "Pending Course"],
                 datasets: [{
                     data: [2, 0],
                     backgroundColor: ["#0acf97", "#FFC107"],
                     borderColor: "transparent",
                     borderWidth: "2"
                 }]
             }, {
                 maintainAspectRatio: !1,
                 cutoutPercentage: 80,
                 legend: {
                     display: !1
                 }
             }))
         }
         return t
     }, t.prototype.init = function() {
         var r = this;
         Chart.defaults.global.defaultFontFamily = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif', r.charts = this.initCharts(), o(window).on("resize", function(t) {
             o.each(r.charts, function(t, r) {
                 try {
                     r.destroy()
                 } catch (t) {}
             }), r.charts = r.initCharts()
         })
     }, o.ChartJs = new t, o.ChartJs.Constructor = t
 }(window.jQuery),
 function(t) {
     "use strict";
     window.jQuery.ChartJs.init()
 }();

 </script>

<script type="text/javascript">
  $(document).ready(function() {
    $(function() {
       $('.icon-picker').iconpicker();
     });
  });
</script>

<!-- Toastr and alert notifications scripts -->
<script type="text/javascript">
function notify(message) {
  $.NotificationApp.send("Heads Up!", message ,"top-right","rgba(0,0,0,0.2)","info");
}

function success_notify(message) {
  $.NotificationApp.send("Congratulations!", message ,"top-right","rgba(0,0,0,0.2)","success");
}

function error_notify(message) {
  $.NotificationApp.send("Oh Snap!", message ,"top-right","rgba(0,0,0,0.2)","error");
}

function error_required_field() {
  $.NotificationApp.send("Oh Snap!", "Please Fill All The Required Fields" ,"top-right","rgba(0,0,0,0.2)","error");
}
</script>



<script type="text/javascript">
  $.NotificationApp.send("Congratulations!", 'Welcom admin admin' ,"top-right","rgba(0,0,0,0.2)","success");
</script>
    <script type="text/javascript">
function showAjaxModal(url, header)
{
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('#scrollable-modal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="http://localhost/2/Online_Learning_Management_System/assets/global/bg-pattern-light.svg" /></div>');
    jQuery('#scrollable-modal .modal-title').html('...');
    // LOADING THE AJAX MODAL
    jQuery('#scrollable-modal').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#scrollable-modal .modal-body').html(response);
            jQuery('#scrollable-modal .modal-title').html(header);
        }
    });
}
function showLargeModal(url, header)
{
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('#large-modal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="http://localhost/2/Online_Learning_Management_System/assets/global/bg-pattern-light.svg" height = "50px" /></div>');
    jQuery('#large-modal .modal-title').html('...');
    // LOADING THE AJAX MODAL
    jQuery('#large-modal').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#large-modal .modal-body').html(response);
            jQuery('#large-modal .modal-title').html(header);
        }
    });
}
</script>

<!-- (Large Modal)-->
<div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Scrollable modal -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body ml-2 mr-2">

        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
function confirm_modal(delete_url)
{
    jQuery('#alert-modal').modal('show', {backdrop: 'static'});
    document.getElementById('update_link').setAttribute('href' , delete_url);
}
</script>

<!-- Info Alert Modal -->
<div id="alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-information h1 text-info"></i>
                    <h4 class="mt-2">Heads Up!</h4>
                    <p class="mt-3">Are You Sure?</p>
                    <button type="button" class="btn btn-info my-2" data-dismiss="modal">Cancel</button>
                    <a href="#" id="update_link" class="btn btn-danger my-2">Continue</a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
