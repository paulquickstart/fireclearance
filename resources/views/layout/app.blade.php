<html class="loading" lang="en" data-textdirection="ltr">

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Fire Clearance</title>
        <link rel="apple-touch-icon" href="{{ asset('images/ico/apple-icon-120.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/ico/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/bordered-layout.css') }}">

         <!-- BEGIN: Page CSS-->
        <link rel='stylesheet' type='text/css' href=" {{ asset('css/core/menu/menu-types/vertical-menu.css') }}" />
        <!-- END: Page CSS-->
       
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- END: Custom CSS-->

    </head>

    <body class="vertical-layout vertical-menu-modern dark-layout  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout">
        
        <!-- BEGIN: Header-->
        <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow">
            <div class="navbar-container d-flex content">
                <div class="bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav d-xl-none">
                        <li class="nav-item"><a class="nav-link menu-toggle is-active" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a></li>
                    </ul>

                </div>

                <ul class="nav navbar-nav align-items-center ml-auto">
                    <li class="nav-item dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name font-weight-bolder">John Doe</span>
                                <span class="user-status">Client</span>
                            </div>
                                <span class="avatar"><img class="round" src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="mr-50" data-feather="help-circle"></i> FAQ</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="mr-50" data-feather="power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END: Header-->

        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="starter-kit/ltr/vertical-menu-template-dark/"><span class="brand-logo">
                                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                            <h2 class="brand-text">Fire Clearance</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">

                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" nav-item active">
                        <a class="d-flex align-items-center" href="{{ url('user/client') }}">
                            <i data-feather="home"></i><span class="menu-title text-truncate" >Dashboard</span>
                        </a>
                    </li>
                    <hr/>
                </ul>
                <ul class="navigation" >
                     <li class="nav-item ">
                        <a class="d-flex align-items-center" href="#" data-toggle="modal" data-target="#addNewAdmin" >
                            <i data-feather="user"></i>
                            <span class="menu-title text-truncate" >Add New Admin</span>
                        </a>
                    </li>
                </ul> 
                <ul class="navigation" >
                     <li class="nav-item ">
                        <a class="d-flex align-items-center" href="#" data-toggle="modal" data-target="#addNewAdmin" >
                            <i data-feather="user"></i>
                            <span class="menu-title text-truncate" >Client</span>
                        </a>
                    </li>
                </ul>      
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">        
                    <li class=" nav-item">
                        <a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" >Profile</span></a>
                    </li>
                    <li class=" nav-item">
                        <a class="d-flex align-items-center" href="#"><i data-feather="help-circle"></i><span class="menu-title text-truncate" >Help and Support</span></a>
                    </li>
                    <hr/>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('logout') }}"><i data-feather="power"></i><span class="menu-title text-truncate" >Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Clearance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical" action="{{ route('clearance.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <h4 class="alert-heading">Documentary Requirements</h4>
                                    <div class="alert-body">
                                        <p><i data-feather="check-square"></i> Application Form for the Building Permit from the Office of the Building Official.</p>
                                        <p><i data-feather="check-square"></i> Three (3) complete sets of the following documents:
                                            <ul style="column-count: 3;">
                                                <li>Architectural Documents</li>
                                                <li>Civil/Structural Documents</li>
                                                <li>Electrical Documents</li>
                                                <li>Mechanical Documents</li>
                                                <li>Plumbing Documents</li>
                                                <li>Electronics Documents</li>
                                                <li>Sanitary Documents</li>
                                                <li>Fire Protection Plan</li>
                                                <li>Photocopies of Valid Licenses of Involved Professional</li>

                                            </ul>
                                        </p>
                                        <p><i data-feather="check-square"></i> 1 set of estimated cost of the building to be constructed/renovated/modified as reflected in the bill of materials including labor cost signed and sealed by the Designer/Contractor and duly notarized</p>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pOwner">Project Owner</label>
                              <input type="text" id="pOwner" class="form-control" name="pOwner" placeholder="Project Owner">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pTitle">Project Title</label>
                              <input type="text" id="pTitle" class="form-control" name="pTitle" placeholder="Project Title">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pTitle">Project Location</label>
                              <input type="text" id="pLocation" class="form-control" name="pLocation" placeholder="Project Location">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pOwnerAddress">Owner Address</label>
                              <input type="text" id="pOwnerAddress" class="form-control" name="pOwnerAddress" placeholder="Owner Address">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pContractor">Contractor</label>
                              <input type="text" id="pContractor" class="form-control" name="pContractor" placeholder="Contractor">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pRepresentative">Authorized Representative</label>
                              <input type="text" id="pRepresentative" class="form-control" name="pRepresentative" placeholder="Authorized Representative">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pContactNo">Contact Number</label>
                              <input type="number" id="pContactNo" class="form-control" name="pContactNo" placeholder="Contact Number">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pEmail">Email Address</label>
                              <input type="email" id="pEmail" class="form-control" name="pEmail" placeholder="Email Address">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pFloorArea">Total Floor Area</label>
                              <input type="number" id="pFloorArea" class="form-control" name="pFloorArea" placeholder="Total Floor Area">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pStorey">No. of Storey</label>
                              <input type="number" id="pStorey" class="form-control" name="pStorey" placeholder="No. of Storey">
                            </div>
                          </div>

                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pProvince">Province</label>
                              <input type="text" id="pProvince" class="form-control" name="pProvince" placeholder="Province">
                            </div>
                          </div>
                          <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pTypeOfOccupancy">Type of Occupancy</label>
                              <input type="text" id="pTypeOfOccupancy" class="form-control" name="pTypeOfOccupancy" placeholder="Type of Occupancy">
                            </div>
                          </div>
                           <div class="col-md-6  col-12">
                            <div class="form-group">
                              <label for="pRegion">Region</label>
                              <input type="text" id="pRegion" class="form-control" name="pRegion" placeholder="Region">
                            </div>
                          </div>
                          <hr/>

                          <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
            </div>
        </div>



        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-body">
                    
                    @yield('content')

                </div>
            </div>
        </div>
        <!-- END: Content-->

        </div>
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-dark">
            <p class="clearfix mb-0">
                <span class="float-md-right d-none d-md-block">COPYRIGHT &copy; 2020<a class="ml-25" href="#" target="_blank">Bureau of Fire Protection</a>, All rights Reserved</span></p>
        </footer>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>


        <script type="text/javascript" src="{{ asset('js/plugins/jquery-3.5.1.slim.min.js') }}" /></script>
        <script type="text/javascript" src="{{ asset('js/plugins/popper.js@1.16.1/popper.min.js') }}" /></script>
        <script type="text/javascript" src="{{ asset('js/plugins/bootstrap@4.5.3/bootstrap.min.js') }}" /></script>


        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('js/plugins/vendors/js/vendors.min.js') }}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('js/plugins/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{ asset('js/plugins/core/app-menu.js') }}"></script>
        <script src="{{ asset('js/plugins/core/app.js') }}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{ asset('js/plugins/pages/page-auth-register.js') }}"></script>

        <!-- BEGIN: Super Admin -->
        <script src="{{ asset('js/initialize.js') }}"></script>
        <script src="{{ asset('js/initialize.rest.route.js') }}"></script>
        <script src="{{ asset('js/initialize.variable.js') }}"></script>
        <!-- <script src="{{ asset('js/views/super-admin.js') }}"></script> -->
        <script src="{{ asset('js/views/super-admin/super-admin.edit.js') }}"></script>
        <script src="{{ asset('js/views/super-admin/super-admin.update.js') }}"></script>
        <script src="{{ asset('js/views/super-admin/super-admin.password.edit.js') }}"></script>
        <script src="{{ asset('js/views/super-admin/super-admin.password.update.js') }}"></script>
        <script src="{{ asset('js/views/super-admin/super-admin.delete.js') }}"></script>
        <!-- END: Super Admin -->

        <!-- END: Page JS-->

        <script>
            $(window).on('load', function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
        </script>
      
    </body>
</html>
