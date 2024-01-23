<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Ochre-digi Media Dashboard</title>
 
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="https://industry.pharmafocusasia.com/images/favicon.ico"
    />
     <!-- Custom CSS -->
   
    <!-- Custom CSS -->
    <link rel="stylesheet" href="http://dss.ochre-media.com/public/assets/css/main-style.css" >
    <!-- <link href="../dist/css/style.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" /> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>  
  .sidebar-nav ul .sidebar-item .sidebar-link { 
   color: #fff; 
    padding: 10px 15px !important;
      display: flex;
        white-space: nowrap; 
         align-items: center;
           opacity: 0.6;
           }
  </style>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <!-- <img src="http://dss.ochre-media.com/public/assets/images/img6.jpg" alt="" class=""> -->
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="https://industry.pharmafocusasia.com/images/favicon.ico"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2 ">
                <!-- dark Logo text -->
                <h5 class="mt-2">Ochre Digi Media</h5>
              </span>
              <!-- Logo icon -->
              
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5">  
            <div class="text-center">
            <h2 class="text-center" style="color:#fff;padding:16px;font-size:18px;">Dashboard</h2> 
            </div>    
               
          
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <!-- <ul id="sidebarnav" class="pt-4"> -->
              <!-- <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark sidebar-link"
                  href="index.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >               
              </li> -->

              <!-- <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu" >Websites</span></a
                > -->
                <!-- <ul aria-expanded="false" class="collapse first-level"> -->
                <ul id="sidebarnav" class="pt-2">
                   <li class="sidebar-item"  onclick="openCity('auto-tec')"> <!-- class="active" -->
                    <a href="#"  class="sidebar-link">
                        <i class="mdi mdi-note-plus"></i>
                        <span class="hide-menu">Automotive Technology</span>
                    </a>
                </li>
                <li class="sidebar-item" onclick="openCity('def-ind')">
                  <a href="#"  class="sidebar-link">
                      <i class="mdi mdi-note-plus"></i>
                      <span class="hide-menu" >Defence Industries</span>
                  </a>
              </li>
                <li class="sidebar-item" onclick="openCity('hospitals')">
                    <a href="#"  class="sidebar-link">
                        <i class="mdi mdi-note-plus"></i>
                        <span class="hide-menu" >Hospitals Management</span>
                    </a>
                </li>
               
                <li class="sidebar-item" onclick="openCity('packaging')">
                    <a href="#"  class="sidebar-link">
                        <i class="mdi mdi-note-plus"></i>
                        <span class="hide-menu">Packaging Labelling</span>
                    </a>
                </li>
                
                <li class="sidebar-item" onclick="openCity('pharma-teh')">
                  <a href="#"  class="sidebar-link">
                      <i class="mdi mdi-note-plus"></i>
                      <span class="hide-menu">Pharmaceutical Tech</span>
                  </a>
              </li>
                <li class="sidebar-item" onclick="openCity('plant-automation')">
                    <a href="#"  class="sidebar-link">
                        <i class="mdi mdi-note-plus"></i>
                        <span class="hide-menu">Plant Automation Technology</span>
                    </a>
          
                </li>
                <li class="sidebar-item" onclick="openCity('plastics')">
                  <a href="#"  class="sidebar-link">
                      <i class="mdi mdi-note-plus"></i>
                      <span class="hide-menu">Plastics Technology</span>
                  </a>
              </li>
              <li class="sidebar-item" onclick="openCity('pulp-paper')">
                <a href="#"  class="sidebar-link">
                    <i class="mdi mdi-note-plus"></i>
                    <span class="hide-menu">Pulp and Paper Technology</span>
                </a>
            </li>

                <li class="sidebar-item" onclick="openCity('steel')">
                    <a href="#"  class="sidebar-link">
                        <i class="mdi mdi-note-plus"></i>
                        <span class="hide-menu">Steel Technology</span>
                    </a>
                </li>
                <li class="sidebar-item" onclick="openCity('sportsvenue')">
                    <a href="#"  class="sidebar-link">
                        <i class="mdi mdi-note-plus"></i>
                        <span class="hide-menu">Sportsvenue Technology</span>
                    </a>
                </li>
                
                <li class="sidebar-item" onclick="openCity('pharma-asia')">
                  <a href="#"  class="sidebar-link">
                      <i class="mdi mdi-note-plus"></i>
                      <span class="hide-menu">Pharma Focus Asia</span>
                  </a>
              </li>
              <li class="sidebar-item" onclick="openCity('pharma-europe')">
                  <a href="#"  class="sidebar-link">
                      <i class="mdi mdi-note-plus"></i>
                      <span class="hide-menu">Pharma Focus Europe</span>
                  </a>
              </li>
              <li class="sidebar-item" onclick="openCity('pharma-america')">
                  <a href="#"  class="sidebar-link">
                      <i class="mdi mdi-note-plus"></i>
                      <span class="hide-menu">Pharma Focus America</span>
                  </a>
              </li>
                <li class="sidebar-item" onclick="openCity('asianhhm')">
                  <a href="#"  class="sidebar-link">
                      <i class="mdi mdi-note-plus"></i>
                      <span class="hide-menu">Asianhhm</span>
                  </a>
              </li>
              <li class="sidebar-item" onclick="openCity('americanhhm')">
                <a href="#"  class="sidebar-link">
                    <i class="mdi mdi-note-plus"></i>
                    <span class="hide-menu">Americanhhm</span>
                </a>
            </li>
              <li class="sidebar-item" onclick="openCity('europeanhhm')">
                <a href="#"  class="sidebar-link">
                    <i class="mdi mdi-note-plus"></i>
                    <span class="hide-menu">Europeanhhm</span>
                </a>
            </li>
          
                </ul>
              <!-- </li>


             
            </ul> -->
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                   
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div> -->
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-12 col-lg-12">
              
                    <!-- Automotive Technology start -->

                    <div id="auto-tec" class="dashboard " style="display:none">
                    <h4>Automotive Technology</h4>
                      <div class="d-flex flex-wrap gap-5 mt-2">
                      @if(isset($typeCountsAutomotive['recent_month']) && count($typeCountsAutomotive['recent_month']) > 0)
                              @foreach($typeCountsAutomotive['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsAutomotive['total'][$type]) ? $typeCountsAutomotive['total'][$type] : 0;
                                  @endphp

                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                          @endif
                   
                    </div>
                    </div>
                    <!-- Automotive Technology End -->

                    <!-- Defence Industries start -->
                    <div id="def-ind" class="dashboard" style="display:none">
                    <h4>Defence Industries</h4>
                    <div class="d-flex flex-wrap gap-5">
                    @if(isset($typeCountsDefence['recent_month']) && count($typeCountsDefence['recent_month']) > 0)
                              @foreach($typeCountsDefence['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsDefence['total'][$type]) ? $typeCountsDefence['total'][$type] : 0;
                                  @endphp

                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                     @endif
                    </div>
                    </div>
                    <!-- Defence Industries End -->

                    <!-- Hospitals Management Start -->
                    <div id="hospitals" class="dashboard" style="display:none">
                    <h4>Hospitals Management</h4>
                    <div class="d-flex flex-wrap gap-5">
                    @if(isset($typeCountsHospitals['recent_month']) && is_array($typeCountsHospitals['recent_month']))
                        @foreach($typeCountsHospitals['recent_month'] as $type => $recentMonthCount)
                            @php
                                $totalCount = isset($typeCountsHospitals['total'][$type]) ? $typeCountsHospitals['total'][$type] : 0;
                            @endphp

                            <div class="card card-hover">
                                <div class="box text-center">
                                    <h1 class="">
                                        <i class="mdi mdi-chart-areaspline"></i>
                                    </h1>
                                    <h6 class="">{{ strtoupper($type) }}</h6>
                                    <p><span class="">Last 30 Days: {{ $recentMonthCount ?? 0 }}</span></p>
                                    <p><span class="">Total: {{ $totalCount }}</span></p>
                                </div>
                            </div>
                        @endforeach
                    @endif


                    </div>
                    </div>
                    <!-- Hospitals Management End -->

                    <!-- Packaging Labelling start -->
                    <div id="packaging" class="dashboard " style="display:none">
                    <h4>Packaging Labelling</h4>
                      <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCountsPackage['recent_month']) && count($typeCountsPackage['recent_month']) > 0)
                              @foreach($typeCountsPackage['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsPackage['total'][$type]) ? $typeCountsPackage['total'][$type] : 0;
                                  @endphp

                                  <div class="card card-hover">
                                      <div class="box  text-center">
                                          <h1 class="font-light ">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                     @endif
                    </div>
                    </div>
                    <!-- Packaging Labelling End -->

                    <!-- Pharmaceutical Tech start -->
                      <div id="pharma-teh" class="dashboard" style="display:none">
                      <h4>Pharmaceutical Tech</h4>
                      <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCountsPharmatech['recent_month']) && count($typeCountsPharmatech['recent_month']) > 0)
                              @foreach($typeCountsPharmatech['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsPharmatech['total'][$type]) ? $typeCountsPharmatech['total'][$type] : 0;
                                  @endphp

                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                     @endif
                   
                    </div>
                      </div>
                    <!-- Pharmaceutical Tech End  -->

                    <!-- Plant Automation Technology start -->
                    <div id="plant-automation" class="dashboard " style="display:none">
                    <h4>Plant Automation Technology</h4>
                      <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCounts['recent_month']) && count($typeCounts['recent_month']) > 0)
                              @foreach($typeCounts['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCounts['total'][$type]) ? $typeCounts['total'][$type] : 0;
                                  @endphp

                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                     @endif
                   
                    </div>
                    </div>
                    <!-- Plant Automation Technology End  -->

                    <!-- Plastics Technology start -->
                    <div id="plastics" class="dashboard" style="display:none">
                    <h4>Plastics Technology</h4>
                    <div class="d-flex flex-wrap gap-5">
                    @if(isset($typeCountsPlastic['recent_month']) && count($typeCountsPlastic['recent_month']) > 0)
                              @foreach($typeCountsPlastic['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsPlastic['total'][$type]) ? $typeCountsPlastic['total'][$type] : 0;
                                  @endphp

                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                     @endif
                   
                    </div>
                    </div>
                    <!-- Plastics Technology End  -->

                    <!-- Pulp and Paper Technology start -->
                    <div id="pulp-paper" class="dashboard" style="display:none">
                    <h4>Pulp and Paper Technology</h4>
                      <div class="d-flex flex-wrap gap-5">
                          @if(isset($typeCountsPulp['recent_month']) && count($typeCountsPulp['recent_month']) > 0)
                              @foreach($typeCountsPulp['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsPulp['total'][$type]) ? $typeCountsPulp['total'][$type] : 0;
                                  @endphp

                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                          @endif
                      </div>
                  </div>
                  </div>
                    <!-- Pulp and Paper Technology End  -->

                    <!-- Steel Technology start -->
                    <div id="steel" class="dashboard" style="display:none">
                    <h4>Steel Technology</h4>
                    <div class="d-flex flex-wrap gap-5">
                         @if(isset($typeCountsSteel['recent_month']) && count($typeCountsSteel['recent_month']) > 0)
                              @foreach($typeCountsSteel['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsSteel['total'][$type]) ? $typeCountsSteel['total'][$type] : 0;
                                  @endphp
                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                          @endif
                    </div>
                      </div>
                    <!-- Steel Technology End -->

                    <!-- Sportsvenue Technology start -->
                    <div id="sportsvenue" class="dashboard" style="display:none">
                    <h4>Sportsvenue Technology</h4>
                    <div class="d-flex flex-wrap gap-5">
                    @if(isset($typeCountsSports['recent_month']) && count($typeCountsSports['recent_month']) > 0)
                              @foreach($typeCountsSports['recent_month'] as $type => $recentMonthCount)
                                  @php
                                      $totalCount = isset($typeCountsSports['total'][$type]) ? $typeCountsSports['total'][$type] : 0;
                                  @endphp
                                  <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $recentMonthCount }}</span></p>
                                          <p><span class="">Total: {{ $totalCount }}</span></p>
                                      </div>
                                  </div>
                              @endforeach
                          @endif
                    </div>
                    </div>
                    <!-- Sportsvenue Technology End -->
                    <!-- Pharma Focus Asia start -->
                    <div id="pharma-asia" class="dashboard" style="display:none">
                    <h4>Pharma Focus Asia</h4>
                    <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCountsPFA) && !empty($typeCountsPFA))
                            @foreach($typeCountsPFA as $category => $categoryData)
                                @foreach($categoryData as $type => $counts)
                                <div class="card card-hover">
                                      <div class="box  text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $counts['last30DaysCount'] }}</span></p>
                                          <p><span class="">Total: {{ $counts['totalCount'] }}</span></p>
                                      </div>
                                  </div>
                                @endforeach
                            @endforeach
                        @else
                            <p>No form data available.</p>
                        @endif
                    </div>
                    </div>
                     <!-- Pharma Focus Asia End -->
                     <!-- Pharma Focus Europe Start  -->
                     <div id="pharma-europe" class="dashboard" style="display:none">
                     <h4>Pharma Focus Europe</h4>
                     <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCountsPFE) && !empty($typeCountsPFE))
                            @foreach($typeCountsPFE as $category => $categoryData)
                                @foreach($categoryData as $type => $counts)
                                <div class="card card-hover">
                                      <div class="box  text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $counts['last30DaysCount'] }}</span></p>
                                          <p><span class="">Total: {{ $counts['totalCount'] }}</span></p>
                                      </div>
                                  </div>
                                @endforeach
                            @endforeach
                        @else
                            <p>No form data available.</p>
                        @endif
                    </div>
                    </div>
                     <!-- Pharma Focus Europe End -->
                      <!-- Pharma Focus America Start -->
                      <div id="pharma-america" class="dashboard" style="display:none">
                      <h4>Pharma Focus America</h4>
                      <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCountsPFAmerica) && !empty($typeCountsPFAmerica))
                            @foreach($typeCountsPFAmerica as $category => $categoryData)
                                @foreach($categoryData as $type => $counts)
                                <div class="card card-hover">
                                      <div class="box  text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $counts['last30DaysCount'] }}</span></p>
                                          <p><span class="">Total: {{ $counts['totalCount'] }}</span></p>
                                      </div>
                                  </div>
                                @endforeach
                            @endforeach
                        @else
                            <p>No form data available.</p>
                        @endif
                    </div>
                      </div>
                      <!-- Pharma Focus America End -->
                        <!-- Asianhhm start -->
                    <div id="asianhhm" class="dashboard" style="display:none">
                    <h4>Asianhhm</h4>
                    <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCountsAsianhhm) && !empty($typeCountsAsianhhm))
                            @foreach($typeCountsAsianhhm as $category => $categoryData)
                                @foreach($categoryData as $type => $counts)
                                <div class="card card-hover">
                                      <div class="box  text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $counts['last30DaysCount'] }}</span></p>
                                          <p><span class="">Total: {{ $counts['totalCount'] }}</span></p>
                                      </div>
                                  </div>
                                @endforeach
                            @endforeach
                        @else
                            <p>No form data available.</p>
                        @endif
                    </div>
                    </div>
                     <!-- Asianhhm End -->                 
                      <!--Americanhhm Start -->
                      <div id="americanhhm" class="dashboard" style="display:none">
                      <h4>Americanhhm</h4>
                      <div class="d-flex flex-wrap gap-5">
                      @if(isset($typeCountsAmericanhhm) && !empty($typeCountsAmericanhhm))
                            @foreach($typeCountsAmericanhhm as $category => $categoryData)
                                @foreach($categoryData as $type => $counts)
                                <div class="card card-hover">
                                      <div class="box  text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $counts['last30DaysCount'] }}</span></p>
                                          <p><span class="">Total: {{ $counts['totalCount'] }}</span></p>
                                      </div>
                                  </div>
                                @endforeach
                            @endforeach
                        @else
                            <p>No form data available.</p>
                        @endif
                    </div>
                      </div>
                      <!-- Americanhhm End -->
                         <!-- Europeanhhm Start  -->
                     <div id="europeanhhm" class="dashboard" style="display:none">
                     <h4>Europeanhhm</h4>
                     <div class="d-flex flex-wrap gap-5">
                       @if(isset($typeCountsEuropeanhhm) && !empty($typeCountsEuropeanhhm))
                            @foreach($typeCountsEuropeanhhm as $category => $categoryData)
                                @foreach($categoryData as $type => $counts)
                                <div class="card card-hover">
                                      <div class="box text-center">
                                          <h1 class="">
                                              <i class="mdi mdi-chart-areaspline"></i>
                                          </h1>
                                          <h6 class="">{{ strtoupper($type) }}</h6>
                                          <p><span class="">Last 30 Days: {{ $counts['last30DaysCount'] }}</span></p>
                                          <p><span class="">Total: {{ $counts['totalCount'] }}</span></p>
                                      </div>
                                  </div>
                                @endforeach
                            @endforeach
                        @else
                            <p>No form data available.</p>  
                        @endif
                    </div>
                      </div>
                    </div>
                     <!-- Europeanhhm End -->
            </div>
            
         
            
            <!-- Column -->
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
       
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
       
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
         
          <a href="https://www.ochre-media.com/"> All Rights Reserved by Ochre Media Pvt Ltd © 2023</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="http://dss.ochre-media.com/public/assets/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <!-- <script src="http://dss.ochre-media.com/public/assets/bootstrap/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="http://dss.ochre-media.com/public/assets/js/perfect-scrollbar.jquery.min.js"></script> -->
    <!-- <script src="http://dss.ochre-media.com/public/assets/js/sparkline.js"></script> -->
    <!--Wave Effects -->
    <!-- <script src="http://dss.ochre-media.com/public/assets/js/waves.js"></script> -->
    <!--Menu sidebar -->
    <script src="http://dss.ochre-media.com/public/assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <!-- <script src="http://dss.ochre-media.com/public/assets/js/custom.min.js"></script> -->
  
  
  
    <script>
        function openCity(cityName) {
          var i;
          var x = document.getElementsByClassName("dashboard");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          document.getElementById(cityName).style.display = "block";  
        }
</script>
  </body>
</html>
