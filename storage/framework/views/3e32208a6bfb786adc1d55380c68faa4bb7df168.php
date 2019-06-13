<!DOCTYPE html> 
<html lang="en">
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes  bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> Monarch UI - Bootstrap Frontend &amp; Admin Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- sweetalert -->

    <style>
        .swal2-popup {
            font-size: 1.6rem !important;
        }
        .swal2-icon {
            width: 5em !important;
            height: 5em !important;
            border-width: .25em !important;
        }
        form{
            display: inline;
        }
    </style>


    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../assets/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../../assets/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.css">


    <!-- HELPERS -->

    <link rel="stylesheet" type="text/css" href="../../assets/helpers/animate.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/backgrounds.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/boilerplate.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/border-radius.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/grid.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/page-transitions.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/spacing.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/typography.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/utils.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/colors.css">

    <!-- ELEMENTS -->

    <link rel="stylesheet" type="text/css" href="../../assets/elements/badges.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/buttons.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/content-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/dashboard-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/forms.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/images.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/info-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/invoice.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/loading-indicators.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/menus.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/panel-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/response-messages.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/responsive-tables.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/ribbon.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/social-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/tables.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/tile-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/elements/timeline.css">



    <!-- ICONS -->

    <link rel="stylesheet" type="text/css" href="../../assets/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/icons/linecons/linecons.css">
    <link rel="stylesheet" type="text/css" href="../../assets/icons/spinnericon/spinnericon.css">


    <!-- WIDGETS -->

    <link rel="stylesheet" type="text/css" href="../../assets/widgets/accordion-ui/accordion.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/calendar/calendar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/carousel/carousel.css">

    <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/justgage/justgage.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/piegage/piegage.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/charts/xcharts/xcharts.css">

    <link rel="stylesheet" type="text/css" href="../../assets/widgets/chosen/chosen.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/colorpicker/colorpicker.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/datepicker-ui/datepicker.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/dialog/dialog.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/dropdown/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/dropzone/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/file-input/fileinput.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/input-switch/inputswitch.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/input-switch/inputswitch-alt.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/ionrangeslider/ionrangeslider.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/jcrop/jcrop.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/jgrowl-notifications/jgrowl.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/loading-bar/loadingbar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/maps/vector-maps/vectormaps.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/markdown/markdown.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/modal/modal.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/multi-select/multiselect.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/multi-upload/fileupload.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/nestable/nestable.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/noty-notifications/noty.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/popover/popover.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/pretty-photo/prettyphoto.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/progressbar/progressbar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/range-slider/rangeslider.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/slidebars/slidebars.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/slider-ui/slider.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/tabs-ui/tabs.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/theme-switcher/themeswitcher.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/timepicker/timepicker.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/tocify/tocify.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/tooltip/tooltip.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/touchspin/touchspin.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/uniform/uniform.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/wizard/wizard.css">
    <link rel="stylesheet" type="text/css" href="../../assets/widgets/xeditable/xeditable.css">

    <!-- SNIPPETS -->

    <link rel="stylesheet" type="text/css" href="../../assets/snippets/chat.css">
    <link rel="stylesheet" type="text/css" href="../../assets/snippets/files-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/snippets/login-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/snippets/notification-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/snippets/progress-box.css">
    <link rel="stylesheet" type="text/css" href="../../assets/snippets/todo.css">
    <link rel="stylesheet" type="text/css" href="../../assets/snippets/user-profile.css">
    <link rel="stylesheet" type="text/css" href="../../assets/snippets/mobile-navigation.css">

    <!-- APPLICATIONS -->

    <link rel="stylesheet" type="text/css" href="../../assets/applications/mailbox.css">

    <!-- Admin theme -->

    <link rel="stylesheet" type="text/css" href="../../assets/themes/admin/layout.css">
    <link rel="stylesheet" type="text/css" href="../../assets/themes/admin/color-schemes/default.css">

    <!-- Components theme -->

    <link rel="stylesheet" type="text/css" href="../../assets/themes/components/default.css">
    <link rel="stylesheet" type="text/css" href="../../assets/themes/components/border-radius.css">

    <!-- Admin responsive -->

    <link rel="stylesheet" type="text/css" href="../../assets/helpers/responsive-elements.css">
    <link rel="stylesheet" type="text/css" href="../../assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="../../assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="../../assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="../../assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="../../assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="../../assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="../../assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="../../assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="../../assets/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>


<body>

    <div id="sb-site">
        <div class="sb-slidebar bg-black sb-left sb-style-overlay">
            <div class="scrollable-content scrollable-slim-sidebar">
                <div class="pad10A">
                    <div class="divider-header">Online</div>
                    <ul class="chat-box">
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial1.jpg" alt="">
                                <div class="small-badge bg-green"></div>
                            </div>
                            <b>
                                Dandi
                            </b>
                            <p>.</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial2.jpg" alt="">
                                <div class="small-badge bg-green"></div>
                            </div>
                            <b>
                                Wigati
                            </b>
                            <p>Only Urgent</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                    </ul>
                    <div class="divider-header">Idle</div>
                    <ul class="chat-box">
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial6.jpg" alt="">
                                <div class="small-badge bg-orange"></div>
                            </div>
                            <b>
                                Jose Kramer
                            </b>
                            <p>Equal blame belongs to those...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial7.jpg" alt="">
                                <div class="small-badge bg-orange"></div>
                            </div>
                            <b>
                                Dan Garcia
                            </b>
                            <p>Weakness of will, which is same...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                    </ul>
                    <div class="divider-header">Offline</div>
                    <ul class="chat-box">
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial1.jpg" alt="">
                                <div class="small-badge bg-red"></div>
                            </div>
                            <b>
                                Randy Herod
                            </b>
                            <p>In a free hour, when our power...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                        <li>
                            <div class="status-badge">
                                <img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial2.jpg" alt="">
                                <div class="small-badge bg-red"></div>
                            </div>
                            <b>
                                Patricia Bagley
                            </b>
                            <p>when nothing prevents our being...</p>
                            <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sb-slidebar bg-black sb-right sb-style-overlay">
            <div class="scrollable-content scrollable-slim-sidebar">
                <div class="pad15A">
                    <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
                        Cloud status
                        <span class="caret"></span>
                    </a>
                    <div id="sidebar-toggle-1" class="collapse in">
                        <div class="pad15A container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                                    <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                                    <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                                    <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
                                </div>
                            </div>
                            <div class="divider mrg15T mrg15B"></div>
                            <div class="text-center">
                                <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                                    <i class="glyph-icon icon-refresh"></i>
                                    Update charts
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
                        Latest transfers
                        <span class="caret"></span>
                    </a>
                    <div id="sidebar-toggle-6" class="collapse in">

                        <ul class="files-box">
                            <li>
                                <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
                                <div class="files-content">
                                    <b>blog_export.zip</b>
                                    <div class="files-date">
                                        <i class="glyph-icon icon-clock-o"></i>
                                        added on <b>22.10.2014</b>
                                    </div>
                                </div>
                                <div class="files-buttons">
                                    <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                        <i class="glyph-icon icon-cloud-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                        <i class="glyph-icon icon-times"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <i class="files-icon glyph-icon icon-file-code-o"></i>
                                <div class="files-content">
                                    <b>homepage-test.html</b>
                                    <div class="files-date">
                                        <i class="glyph-icon icon-clock-o"></i>
                                        added  <b>19.10.2014</b>
                                    </div>
                                </div>
                                <div class="files-buttons">
                                    <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                        <i class="glyph-icon icon-cloud-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                        <i class="glyph-icon icon-times"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
                                <div class="files-content">
                                    <b>monthlyReport.jpg</b>
                                    <div class="files-date">
                                        <i class="glyph-icon icon-clock-o"></i>
                                        added on <b>10.9.2014</b>
                                    </div>
                                </div>
                                <div class="files-buttons">
                                    <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                        <i class="glyph-icon icon-cloud-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                        <i class="glyph-icon icon-times"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
                                <div class="files-content">
                                    <b>new_presentation.doc</b>
                                    <div class="files-date">
                                        <i class="glyph-icon icon-clock-o"></i>
                                        added on <b>5.9.2014</b>
                                    </div>
                                </div>
                                <div class="files-buttons">
                                    <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                        <i class="glyph-icon icon-cloud-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                        <i class="glyph-icon icon-times"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="clear"></div>

                    <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
                        Tasks for today
                        <span class="caret"></span>
                    </a>
                    <div id="sidebar-toggle-3" class="collapse in">

                        <ul class="progress-box">
                            <li>
                                <div class="progress-title">
                                    New features development
                                    <b>87%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="87">
                                    <div class="progressbar-value bg-azure">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <b class="pull-right">66%</b>
                                <div class="progress-title">
                                    Finishing uploading files

                                </div>
                                <div class="progressbar-smaller progressbar" data-value="66">
                                    <div class="progressbar-value bg-red">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="progress-title">
                                    Creating tutorials
                                    <b>58%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="58">
                                    <div class="progressbar-value bg-blue-alt"></div>
                                </div>
                            </li>
                            <li>
                                <div class="progress-title">
                                    Frontend bonus theme
                                    <b>74%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="74">
                                    <div class="progressbar-value bg-purple"></div>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="clear"></div>

                    <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
                        Pending notifications
                        <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
                        <span class="caret"></span>
                    </a>
                    <div id="sidebar-toggle-4" class="collapse in">
                        <ul class="notifications-box notifications-box-alt">
                            <li>
                                <span class="bg-purple icon-notification glyph-icon icon-users"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                                <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                    <i class="glyph-icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                <span class="notification-text">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                                <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                    <i class="glyph-icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <span class="bg-green icon-notification glyph-icon icon-random"></span>
                                <span class="notification-text font-green">A success message example.</span>
                                <div class="notification-time">
                                    <b>2 hours</b> ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                                <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                    <i class="glyph-icon icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="loading">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div id="page-wrapper">
            <div id="page-header" class="bg-gradient-9">
                <div id="mobile-navigation">
                    <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                    <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
                </div>
                <div id="header-logo" class="logo-bg">
                    <a href="index.html" class="logo-content-big" title="MonarchUI">
                     <i>UI</i>
                     <span>The perfect solution for user interfaces</span>
                 </a>
                 <a href="index.html" class="logo-content-small" title="MonarchUI">
                     <i>UI</i>
                     <span>The perfect solution for user interfaces</span>
                 </a>
                 <a id="close-sidebar" href="#" title="Close sidebar">
                    <i class="glyph-icon icon-angle-left"></i>
                </a>
            </div>
            <div id="header-nav-left">
                <div class="user-account-btn dropdown">
                    <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                        <img width="28" src="../../assets/image-resources/gravatar.jpg" alt="Profile image">
                        <span>Dandi Zusitama</span>
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>
                    <div class="dropdown-menu float-left">
                        <div class="box-sm">
                            <div class="login-box clearfix">
                                <div class="user-img">
                                    <a href="#" title="" class="change-img">Change photo</a>
                                    <img src="../../assets/image-resources/gravatar.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span>
                                        Dandi Zusitama E
                                        <i>dzerlangga@gmail.com</i>
                                    </span>
                                </div>
                            </div>
                            <div class="pad5A button-pane button-pane-alt text-center">
                                <a href="#" class="btn display-block font-normal btn-danger">
                                    <i class="glyph-icon icon-power-off"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #header-nav-left -->

            <div id="header-nav-right">
                <a href="#" class="hdr-btn popover-button">
                    <i class="glyph-icon icon-bus"></i>
                </a>
            </div><!-- #header-nav-right -->

        </div>


        <?php echo $__env->yieldContent('content'); ?>

        <!-- WIDGETS -->

        <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>

        <!-- Bootstrap Dropdown -->

        <!-- <script type="text/javascript" src="../../assets/widgets/dropdown/dropdown.js"></script> -->

        <!-- Bootstrap Tooltip -->

        <!-- <script type="text/javascript" src="../../assets/widgets/tooltip/tooltip.js"></script> -->

        <!-- Bootstrap Popover -->

        <!-- <script type="text/javascript" src="../../assets/widgets/popover/popover.js"></script> -->

        <!-- Bootstrap Progress Bar -->

        <script type="text/javascript" src="../../assets/widgets/progressbar/progressbar.js"></script>

        <!-- Bootstrap Buttons -->

        <!-- <script type="text/javascript" src="../../assets/widgets/button/button.js"></script> -->

        <!-- Bootstrap Collapse -->

        <!-- <script type="text/javascript" src="../../assets/widgets/collapse/collapse.js"></script> -->

        <!-- Superclick -->

        <script type="text/javascript" src="../../assets/widgets/superclick/superclick.js"></script>

        <!-- Input switch alternate -->

        <script type="text/javascript" src="../../assets/widgets/input-switch/inputswitch-alt.js"></script>

        <!-- Slim scroll -->

        <script type="text/javascript" src="../../assets/widgets/slimscroll/slimscroll.js"></script>

        <!-- Slidebars -->

        <script type="text/javascript" src="../../assets/widgets/slidebars/slidebars.js"></script>
        <script type="text/javascript" src="../../assets/widgets/slidebars/slidebars-demo.js"></script>

        <!-- PieGage -->

        <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage.js"></script>
        <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage-demo.js"></script>

        <!-- Screenfull -->

        <script type="text/javascript" src="../../assets/widgets/screenfull/screenfull.js"></script>

        <!-- Content box -->

        <script type="text/javascript" src="../../assets/widgets/content-box/contentbox.js"></script>

        <!-- Overlay -->

        <script type="text/javascript" src="../../assets/widgets/overlay/overlay.js"></script>

        <!-- Widgets init for demo -->

        <script type="text/javascript" src="../../assets/js-init/widgets-init.js"></script>

        <!-- Theme layout -->

        <script type="text/javascript" src="../../assets/themes/admin/layout.js"></script>

        <!-- Theme switcher -->

        <script type="text/javascript" src="../../assets/widgets/theme-switcher/themeswitcher.js"></script>
        <script type="text/javascript" src="../../sweetalert2.all.js"></script>

    </div>

    <script type="text/javascript">


        $(".hapus_rangkaian").click(function(){

        var kode=$(this).attr("kode");
        var no=$(this).attr("no");

        swal({
            title: '<strong>Yakin ingin menghapus? <br>' + no +'</strong>',
            type: 'warning',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText:
            'Yakin',
            cancelButtonText:
            'Batal'
        }).then(function(isConfirm){
            if(isConfirm.value==true){
                $.ajax({
                    type:"get",
                    url:"../hapus_rangkaian",
                    data:"kode="+kode,
                    cache:false,
                    success:function(html){
                     swal("Berhasil", "Dihapus", "success");
                     location.reload();
                 }
             });
            }else{
                swal("Cancelled", "Dibatalkan", "error");
                return false;
            }
        })
    });

       $(".hapus").click(function(){

        var kode=$(this).attr("kode");
        var nama=$(this).attr("nama");

        swal({
            title: '<strong>Yakin ingin menghapus? <br>' + nama +'</strong>',
            type: 'warning',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText:
            'Yakin',
            cancelButtonText:
            'Batal'
        }).then(function(isConfirm){
            if(isConfirm.value==true){
                $.ajax({
                    type:"get",
                    url:"./hapus",
                    data:"kode="+kode+"&nama="+nama,
                    cache:false,
                    success:function(html){
                     swal("Berhasil", "Dihapus", "success");
                     location.reload('.ada');
                 }
             });
            }else{
                swal("Cancelled", "Dibatalkan", "error");
                return false;
            }
        })
    });

</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\monarch\resources\views/layout/main.blade.php ENDPATH**/ ?>