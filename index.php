<?php

?>


<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Web Forte Technlologies</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- -------------- Icomoon -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/icomoon/icomoon.css">

    <!-- -------------- FullCalendar -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/magnific/magnific-popup.css">

    <!-- -------------- Plugins -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/c3charts/c3.min.css">

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-- -------------- Customizer -------------- -->
<div id="customizer" class="hidden-xs">
    <div class="panel">
        <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-cogs"></i>
        </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">
            <ul class="nav nav-list nav-list-sm" role="tablist">
                <li class="active">
                    <a href="#customizer-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#customizer-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#customizer-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="customizer-header">
                    <form id="customizer-header-skin">
                        <h6 class="mv20">Header Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin5" checked
                                                   value="bg-dark">
                                            <label for="headerSkin5">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-warning mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin2" value="bg-warning">
                                            <label for="headerSkin2">Warning</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-danger mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin3" value="bg-danger">
                                            <label for="headerSkin3">Danger</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-success mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin4" value="bg-success">
                                            <label for="headerSkin4">Success</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-primary mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin6" value="bg-primary">
                                            <label for="headerSkin6">Primary</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-info mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin7" value="bg-info">
                                            <label for="headerSkin7">Info</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-alert mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin8" value="bg-alert">
                                            <label for="headerSkin8">Alert</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-system mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin9" value="bg-system">
                                            <label for="headerSkin9">System</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <div class="checkbox-custom checkbox-disabled fill mb10">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bgc-light">
                                <label for="headerSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                    <form id="customizer-footer-skin">
                        <h6 class="mv20">Footer Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin1" checked value="">
                                            <label for="footerSkin1">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom checkbox-disabled fill mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin2" value="footer-light">
                                            <label for="footerSkin2">Light</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-sidebar">
                    <form id="customizer-sidebar-skin">
                        <h6 class="mv20">Sidebar Skins</h6>

                        <div class="customizer-sample">
                            <div class="checkbox-custom fill checkbox-dark mb10">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin2" value="">
                                <label for="sidebarSkin2">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb10">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-settings">
                    <form id="customizer-settings-misc">
                        <h6 class="mv20 mtn">Layout Options</h6>

                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group mn pb35 pt25 text-center">
                <a href="#" id="clearAll" class="btn btn-primary btn-bordered btn-sm">Clear All</a>
            </div>
        </div>
    </div>
</div>
<!-- -------------- /Customizer -------------- -->

<!-- -------------- Body Wrap  -------------- -->
<div id="main">

    <!-- -------------- Header  -------------- -->
    <header class="navbar navbar-fixed-top bg-dark">
        <div class="navbar-logo-wrapper">
            <a class="navbar-logo-text" href="dashboard1.html">
                <b>WF</b>
            </a>
            <span id="sidebar_left_toggle" class="ad ad-lines"></span>
        </div>
        
        
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs">
                <div class="navbar-btn btn-group">
                    <a href="#" class="topbar-dropmenu-toggle btn" data-toggle="button">
                        <span class="fa fa-magic fs20 text-info"></span>
                    </a>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-envelope fs20 text-danger"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle fs18 visible-xl">
                        3
                    </button>
                    <div class="dropdown-menu keep-dropdown w375 animated animated-shorter fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                    <a href="#nav-tab1" data-toggle="tab"
                                       class="btn btn-primary btn-bordered btn-sm active">Activity</a>
                                    <a href="#nav-tab2" data-toggle="tab"
                                       class="btn btn-primary btn-bordered btn-sm br-l-n br-r-n">Messages</a>
                                    <a href="#nav-tab3" data-toggle="tab" class="btn btn-primary btn-bordered btn-sm">Notifications</a>
                                </div>
                            </div>
                            <div class="panel-body panel-scroller scroller-overlay scroller-navbar pn">
                                <div class="tab-content br-n pn">
                                    <div id="nav-tab1" class="tab-pane active" role="tabpanel">
                                        <ul class="media-list" role="menu">
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg"
                                                                                     class="mw40 br2"
                                                                                     alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg"
                                                                                     class="mw40 br2"
                                                                                     alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small> - 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg"
                                                                                     class="mw40 br2"
                                                                                     alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg"
                                                                                     class="mw40 br2"
                                                                                     alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg"
                                                                                     class="mw40 br2"
                                                                                     alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg"
                                                                                     class="mw40 br2"
                                                                                     alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small> - 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg"
                                                                                     class="mw40 br2"
                                                                                     alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Frank Hill
                                                    <small> - 14:10am</small>
                                                </h5>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">George Kelly
                                                    <small> - 15:25am</small>
                                                </h5>
                                                Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat volutpat.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Frank Hill
                                                    <small> - 15:33am</small>
                                                </h5>
                                                Lorem ipsum dolor sit amet, nonummy nibh euismod tinc consectetuer
                                                adipiscing elit.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">George Kelly
                                                    <small> - 15:43am</small>
                                                </h5>
                                                Euismod sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                aliquam erat volutpat.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Frank Hill
                                                    <small> - 16:30am</small>
                                                </h5>
                                                Corem ipsum dolor sit amet, nonummy nibh euismod tinc co.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">George Kelly
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Ubh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-tab3" class="tab-pane alerts-widget" role="tabpanel">
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-shopping-cart text-success"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Product Order
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">iPad Air</a> - 3 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Confirm?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-comment text-system"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Comment
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Sam Fisher - I'd like to read more!
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response text-right"> Moderate?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span class="fa fa-eye text-warning"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Review
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Sebastian Jones - 5 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span class="fa fa-user text-info"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Registration
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Carlos Santiyago - 7 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span class="fa fa-user text-info"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Registration
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Douglas Adams - 13 hours ago

                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span class="fa fa-info text-alert"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Invoice
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">iPad Air</a> - 14 hours ago

                                            </div>
                                            <div class="media-right">
                                                <div class="media-response single">#1234567</div>
                                                <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                    <i class="fa fa-link"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-shopping-cart text-success"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Product Order
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">iPad Air</a> - 14 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Confirm?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="#" class="btn btn-primary btn-sm btn-bordered"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-bell fs20 text-primary"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle fs18 visible-xl">
                        8
                    </button>
                    <div class="dropdown-menu keep-dropdown w375 animated animated-shorter fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <span class="panel-icon"><i class="fa fa-tasks"></i></span>
                                <span class="panel-title fw600"> Activity reports</span>
                                <button class="btn btn-default light btn-xs btn-bordered pull-right" type="button"><i
                                        class="fa fa-refresh"></i>
                                </button>
                            </div>
                            <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                                <ol class="timeline-list">
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b> Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">6:26pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">iPhone 5s</a>
                                        </div>
                                        <div class="timeline-date">11:45am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-primary">
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Richard Johnes</b> Added to wishlist:
                                            <a href="#">iPhone 5c</a>
                                        </div>
                                        <div class="timeline-date">8:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">Mac Pro</a>
                                        </div>
                                        <div class="timeline-date">9:29pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-primary">
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Douglas Adams</b> Added to wishlist:
                                            <a href="#">iPad 4</a>
                                        </div>
                                        <div class="timeline-date">3:05am</div>
                                    </li>
                                </ol>

                            </div>
                            <div class="panel-footer text-center">
                                <a href="#" class="btn btn-primary btn-sm btn-bordered"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn btn-md dropdown-toggle">
                        EN
                    </button>
                    <ul class="dropdown-menu pv5 animated animated-short fadeIn" role="menu">
                        <li>
                            <a href="javascript:void(0);"> Spanish </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Italian </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
                    <span class="hidden-xs"><name></name> </span>


<?php
include('attendanceconnect.php');

 $sel = "SELECT empname FROM empleave WHERE lid = $id";
$result = $conn->query($sel);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "welcome:" . $row["empname"]."";
    }
} else {
     "0 results";
}
$conn->close();





?>


                    <span class="fa fa-caret-down hidden-xs mr15"></span>
                    <img src="assets/img/avatars/profile_avatar.jpg" alt="avatar" class="mw55">
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w250" role="menu">
                    <li class="dropdown-header clearfix">
                        <div class="pull-left ml10">
                            <select id="user-status">
                                <optgroup label="Current Status:">
                                    <option value="1-1">Away</option>
                                    <option value="1-2">Busy</option>
                                    <option value="1-3" selected="selected">Online</option>
                                    <option value="1-4">Offline</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="pull-right mr10">
                            <select id="user-role">
                                <optgroup label="Logged in As:">
                                    <option value="1-1" selected="selected">Admin</option>
                                    <option value="1-2">Editor</option>
                                    <option value="1-3">User</option>
                                </optgroup>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-envelope-o"></span> Messages
                            <span class="label label-warning">54</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-users"></span> Friends
                            <span class="label label-warning">6</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-bell"></span> Notifications </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-cogs"></span> Settings </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="logout.php" class="btn btn-primary btn-sm btn-bordered">
                            <span class="fa fa-power-off pr5"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- -------------- /Header  -------------- -->

    <!-- -------------- Sidebar  -------------- -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- -------------- Sidebar Left Wrapper  -------------- -->
        <div class="sidebar-left-content nano-content">

            <!-- -------------- Sidebar Header -------------- -->
            <header class="sidebar-header">

                <!-- -------------- Sidebar - Author -------------- -->
                <div class="sidebar-widget author-widget">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="assets/img/avatars/profile_avatar.jpg" class="img-responsive">
                        </a>

                        <div class="media-body">
                            <div class="media-links">
                                <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="logout.php">Logout</a>
                            </div>
                            <div class="media-author"></div>
                             
                <?php 
        include('attendanceconnect.php');

         $sel = "SELECT empname FROM empleave WHERE lid = $id";
           $result = $conn->query($sel);

             if ($result->num_rows > 0) {
    // output data of each row
               while($row = $result->fetch_assoc()) {
        
                 echo "welcome:" . $row["empname"]."";
                 }
                   } else {
                      "0 results";
                          }
                         $conn->close();

              ?>


                        </div>
                    </div>
                </div>

                <!-- -------------- Sidebar - Author Menu  -------------- -->
                <div class="sidebar-widget menu-widget">
                    <div class="row text-center mbn">
                        <div class="col-xs-2 pln prn">
                            <a href="dashboard1.html" class="text-primary" data-toggle="tooltip" data-placement="top"
                               title="Dashboard">
                                <span class="fa fa-dashboard"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="charts-highcharts.html" class="text-info" data-toggle="tooltip"
                               data-placement="top" title="Stats">
                                <span class="fa fa-bar-chart-o"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="sales-stats-products.html" class="text-system" data-toggle="tooltip"
                               data-placement="top" title="Orders">
                                <span class="fa fa-info-circle"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="sales-stats-purchases.html" class="text-warning" data-toggle="tooltip"
                               data-placement="top" title="Invoices">
                                <span class="fa fa-file"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="basic-profile.html" class="text-alert" data-toggle="tooltip" data-placement="top"
                               title="Users">
                                <span class="fa fa-users"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="management-tools-dock.html" class="text-danger" data-toggle="tooltip"
                               data-placement="top" title="Settings">
                                <span class="fa fa-cogs"></span>
                            </a>
                        </div>
                    </div>
                </div>

            </header>
            <!-- -------------- /Sidebar Header -------------- -->

            <!-- -------------- Sidebar Menu  -------------- -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt30">Menu</li>

                <li class="active">
                    <a class="accordion-toggle menu-open" href="#">
                        <span class="fa fa-dashboard"></span>
                        <span class="sidebar-title">System</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li class="active">
                            <a href="adminagain.php">
                                <span class="fa fa-file-text-o"></span>   Assign Email </a>
                        </li>
                        <li>
                            <a href="demoagain.php">
                                <span class="fa fa-file-text-o"></span>   Leave Applied Data  </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- -------------- /Sidebar Menu  -------------- -->

            <!-- -------------- Sidebar Hide Button -------------- -->
            <div class="sidebar-toggler">
                <a href="#">
                    <span class="fa fa-arrow-circle-o-left"></span>
                </a>
            </div>
            <!-- -------------- /Sidebar Hide Button -------------- -->

        </div>
        <!-- -------------- /Sidebar Left Wrapper  -------------- -->

    </aside>
    <!-- -------------- /Sidebar -------------- -->

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">

        <!-- -------------- Topbar Menu Wrapper -------------- -->
        <div id="topbar-dropmenu-wrapper">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-danger">
                        <span class="fa fa-music"></span>
                        <span class="service-title">Audio</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-success">
                        <span class="fa fa-picture-o"></span>
                        <span class="service-title">Images</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-primary">
                        <span class="fa fa-video-camera"></span>
                        <span class="service-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-alert">
                        <span class="fa fa-envelope"></span>
                        <span class="service-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-system">
                        <span class="fa fa-cog"></span>
                        <span class="service-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-dark">
                        <span class="fa fa-user"></span>
                        <span class="service-title">Users</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- -------------- /Topbar Menu Wrapper -------------- -->

        <!-- -------------- Topbar -------------- -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="dashboard1.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-active">
                        <a href="dashboard1.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Dashboard</li>
                </ol>
            </div>
            <div class="topbar-right">
                <div class="ib topbar-dropdown">
                    <label for="topbar-multiple" class="control-label">Reporting Period</label>
                    <select id="topbar-multiple" class="hidden">
                        <optgroup label="Filter By:">
                            <option value="1-1">Last 30 Days</option>
                            <option value="1-2" selected="selected">Last 60 Days</option>
                            <option value="1-3">Last Year</option>
                        </optgroup>
                    </select>
                </div>
                <div class="ml15 ib va-m" id="sidebar_right_toggle">
                    <div class="navbar-btn btn-group btn-group-number mv0">
                        <button class="btn btn-sm btn-default btn-bordered prn pln">
                            <i class="fa fa-bar-chart fs22 text-default"></i>
                        </button>
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- -------------- /Topbar -------------- -->

        <!-- -------------- Content -------------- -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- -------------- Column Center -------------- -->
            <div class="chute chute-center">

                


            </div>
            <!-- -------------- /Column Center -------------- -->

            <!-- -------------- Column Right -------------- -->
            <aside class="chute chute-right chute270 pn hidden" data-chute-height="match">

                <!-- -------------- Activity Timeline -------------- -->
                <ol class="timeline-list pl5 mt5">
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Genry</b> Added a new item to his store:
                            <a href="#">Ipod</a>
                        </div>
                        <div class="timeline-date">1:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Lion</b> Added a new item to his store:
                            <a href="#">Notebook</a>
                        </div>
                        <div class="timeline-date">3:05am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created a new invoice for:
                            <a href="#">Software</a>
                        </div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-warning">
                            <span class="fa fa-pencil"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Laura</b> edited her work experience
                        </div>
                        <div class="timeline-date">5:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created a new invoice for:
                            <a href="#">Apple Inc.</a>
                        </div>
                        <div class="timeline-date">7:45am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Genry</b> Added a new item to his store:
                            <a href="#">Ipod</a>
                        </div>
                        <div class="timeline-date">8:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Lion</b> Added a new item to his store:
                            <a href="#">Watch</a>
                        </div>
                        <div class="timeline-date">9:35am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-system">
                            <span class="fa fa-fire"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created a new invoice for:
                            <a href="#">Software</a>
                        </div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-warning">
                            <span class="fa fa-pencil"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Laura</b> edited her work experience
                        </div>
                        <div class="timeline-date">5:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created a new invoice for:
                            <a href="#">Software</a>
                        </div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-warning">
                            <span class="fa fa-pencil"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Laura</b> edited her work experience
                        </div>
                        <div class="timeline-date">5:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created a new invoice for:
                            <a href="#">Apple Inc.</a>
                        </div>
                        <div class="timeline-date">7:45am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Genry</b> Added a new item to his store:
                            <a href="#">Ipod</a>
                        </div>
                        <div class="timeline-date">8:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Lion</b> Added a new item to his store:
                            <a href="#">Watch</a>
                        </div>
                        <div class="timeline-date">9:35am</div>
                    </li>
                </ol>

            </aside>
            <!-- -------------- /Column Right -------------- -->

        </section>
        <!-- -------------- /Content -------------- -->

        <!-- -------------- Page Footer -------------- -->
        <footer id="content-footer" class="affix">
            <div class="row">
                <div class="col-md-6">
                    <span class="footer-legal">© 2015 All rights reserved. <a href="#">Terms of use</a> and <a
                            href="#">Privacy policy</a></span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="footer-meta"></span>
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-angle-up"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- -------------- /Page Footer -------------- -->

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

    <!-- -------------- Sidebar Right -------------- -->
    <aside id="sidebar_right" class="nano affix">

        <!-- -------------- Sidebar Right Content -------------- -->
        <div class="sidebar-right-wrapper nano-content">

            <div class="sidebar-block br-n p15">

                <h6 class="title-divider text-muted mb20"> Visitors Stats
                <span class="pull-right"> 2015
                  <i class="fa fa-caret-down ml5"></i>
                </span>
                </h6>

                <div class="progress mh5">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="34"
                         aria-valuemin="0"
                         aria-valuemax="100" style="width: 34%">
                        <span class="fs11">New visitors</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="66"
                         aria-valuemin="0"
                         aria-valuemax="100" style="width: 66%">
                        <span class="fs11 text-left">Returnig visitors</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
                         aria-valuemin="0"
                         aria-valuemax="100" style="width: 45%">
                        <span class="fs11 text-left">Orders</span>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt30 mb10">New visitors</h6>

                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">350</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-warning mn">
                            <i class="fa fa-caret-down"></i> 15.7% </h3>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt25 mb10">Returnig visitors</h6>

                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">660</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-success-dark mn">
                            <i class="fa fa-caret-up"></i> 20.2% </h3>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt25 mb10">Orders</h6>

                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">153</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-success mn">
                            <i class="fa fa-caret-up"></i> 5.3% </h3>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt40 mb20"> Site Statistics
                    <span class="pull-right text-primary fw600">Today</span>
                </h6>
            </div>
        </div>
    </aside>
    <!-- -------------- /Sidebar Right -------------- -->

</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- -------------- HighCharts Plugin -------------- -->
<script src="assets/js/plugins/highcharts/highcharts.js"></script>
<script src="assets/js/plugins/c3charts/d3.min.js"></script>
<script src="assets/js/plugins/c3charts/c3.min.js"></script>

<!-- -------------- Simple Circles Plugin -------------- -->
<script src="assets/js/plugins/circles/circles.js"></script>

<!-- -------------- Maps JSs -------------- -->
<script src="assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>

<!-- -------------- FullCalendar Plugin -------------- -->
<script src="assets/js/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- -------------- Date/Month - Pickers -------------- -->
<script src="assets/allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
<script src="assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>

<!-- -------------- Magnific Popup Plugin -------------- -->
<script src="assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>

<!-- -------------- Widget JS -------------- -->
<script src="assets/js/demo/widgets.js"></script>
<script src="assets/js/demo/widgets_sidebar.js"></script>
<script src="assets/js/pages/dashboard1.js"></script>
<!-- -------------- /Scripts -------------- -->

</body>

</html>
