<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>PlainAdmin</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/lineicons.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/materialdesignicons.min.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/fullcalendar.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/fullcalendar.css'}}" />
    <link rel="stylesheet" href="{{'assets/css/main.css'}}" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="index.html">
          <img src="assets/images/logo/logo.svg" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path
                    d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                  />
                </svg>
              </span>
              <span class="text">Dashboard</span>
            </a>
            <ul id="ddmenu_1" class="collapse show dropdown-nav">
              <li>
                <a href="{{url('/')}}" class="active"> Acceuil </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_3"
              aria-controls="ddmenu_3"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <i class="lni lni-upload"></i>
              </span>
              <span class="text">Import</span>
            </a>
            <ul id="ddmenu_3" class="collapse dropdown-nav">
              <li>
                <a href="{{url('PageImportImage')}}"> Image </a>
              </li>
              <li>
                <a href="{{url('PageImportExcel')}}"> Excel </a>
              </li>
            </ul>
          </li>
          <span class="divider"><hr /></span>
          
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_55"
              aria-controls="ddmenu_55"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.83325 19.25V17.4167H18.3333V19.25H1.83325ZM18.3333 7.33333V4.58333H16.4999V7.33333H18.3333ZM18.3333 2.75C18.8195 2.75 19.2858 2.94315 19.6296 3.28697C19.9734 3.63079 20.1666 4.0971 20.1666 4.58333V7.33333C20.1666 7.81956 19.9734 8.28588 19.6296 8.6297C19.2858 8.97351 18.8195 9.16667 18.3333 9.16667H16.4999V11.9167C16.4999 12.8891 16.1136 13.8218 15.426 14.5094C14.7383 15.197 13.8057 15.5833 12.8333 15.5833H7.33325C6.36079 15.5833 5.42816 15.197 4.74053 14.5094C4.05289 13.8218 3.66659 12.8891 3.66659 11.9167V2.75H18.3333ZM14.6666 4.58333H5.49992V11.9167C5.49992 12.4029 5.69307 12.8692 6.03689 13.213C6.38071 13.5568 6.84702 13.75 7.33325 13.75H12.8333C13.3195 13.75 13.7858 13.5568 14.1296 13.213C14.4734 12.8692 14.6666 12.4029 14.6666 11.9167V4.58333Z"
                  />
                </svg>
              </span>
              <span class="text">Icons</span>
            </a>
            <ul id="ddmenu_55" class="collapse dropdown-nav">
              <li>
                <a href="icons.html"> LineIcons </a>
              </li>
              <li>
                <a href="mdi-icons.html"> MDI Icons </a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_5"
              aria-controls="ddmenu_5"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.75 4.58325H16.5L15.125 6.41659L13.75 4.58325ZM4.58333 1.83325H17.4167C18.4342 1.83325 19.25 2.65825 19.25 3.66659V18.3333C19.25 19.3508 18.4342 20.1666 17.4167 20.1666H4.58333C3.575 20.1666 2.75 19.3508 2.75 18.3333V3.66659C2.75 2.65825 3.575 1.83325 4.58333 1.83325ZM4.58333 3.66659V7.33325H17.4167V3.66659H4.58333ZM4.58333 18.3333H17.4167V9.16659H4.58333V18.3333ZM6.41667 10.9999H15.5833V12.8333H6.41667V10.9999ZM6.41667 14.6666H15.5833V16.4999H6.41667V14.6666Z"
                  />
                </svg>
              </span>
              <span class="text"> Forms </span>
            </a>
            <ul id="ddmenu_5" class="collapse dropdown-nav">
              <li>
                <a href="form-elements.html"> From Elements </a>
              </li>
            </ul>
          </li> 
          <span class="divider"><hr /></span>

          <li class="nav-item">
            <a href="notification.html">
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.16667 19.25H12.8333C12.8333 20.2584 12.0083 21.0834 11 21.0834C9.99167 21.0834 9.16667 20.2584 9.16667 19.25ZM19.25 17.4167V18.3334H2.75V17.4167L4.58333 15.5834V10.0834C4.58333 7.24171 6.41667 4.76671 9.16667 3.94171V3.66671C9.16667 2.65837 9.99167 1.83337 11 1.83337C12.0083 1.83337 12.8333 2.65837 12.8333 3.66671V3.94171C15.5833 4.76671 17.4167 7.24171 17.4167 10.0834V15.5834L19.25 17.4167ZM15.5833 10.0834C15.5833 7.51671 13.5667 5.50004 11 5.50004C8.43333 5.50004 6.41667 7.51671 6.41667 10.0834V16.5H15.5833V10.0834Z"
                  />
                </svg>
              </span>
              <span class="text">Notifications</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn primary-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- notification start -->
                <div class="notification-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="notification"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-alarm"></i>
                    <span>2</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="notification"
                  >
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-6.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            John Doe
                            <span class="text-regular">
                              comment on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            Jonathon
                            <span class="text-regular">
                              like on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- notification end -->
                <!-- message start -->
                <div class="header-message-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="message"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-envelope"></i>
                    <span>3</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="message"
                  >
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-5.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Jacob Jones</h6>
                          <p>Hey!I can across your profile and ...</p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-3.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>John Doe</h6>
                          <p>Would you mind please checking out</p>
                          <span>12 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-2.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Anee Lee</h6>
                          <p>Hey! are you available for freelance?</p>
                          <span>1h ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- message end -->
                <!-- filter start -->
                <div class="filter-box ml-15 d-none d-md-flex">
                  <button class="" type="button" id="filter">
                    <i class="lni lni-funnel"></i>
                  </button>
                </div>
                <!-- filter end -->
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <h6>Admin</h6>
                        <div class="image">
                          <img
                            src="assets/images/profile/profile-image.png"
                            alt=""
                          />
                          <span class="status"></span>
                        </div>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="profile"
                  >
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> View Profile
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-alarm"></i> Notifications
                      </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                      @yield('title') 
                </div>
              </div>
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          @yield('GrandTitre')
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                         @yield('SousTitre')
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              
            </div>
            
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="row">
           
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-12 col-lg-12 col-sm-12">
              <div class="icon-card mb-30">
                <div class="container-fluid">
                  
                    @yield('content')
                    {{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem autem sint excepturi quo at nihil amet illum repellendus laboriosam aperiam libero corporis maiores, doloribus alias expedita molestiae nulla atque? Iste atque modi expedita eaque, reiciendis ut, dolorem sunt corporis libero quibusdam beatae. Quas quam ut repudiandae? Mollitia quidem quibusdam nisi recusandae nesciunt dolore voluptatum deserunt temporibus vero optio beatae, aliquam ad vitae laudantium ipsa adipisci officiis tempore fugiat deleniti quasi quod incidunt iusto totam quos! Totam nulla consequuntur doloribus ipsa perspiciatis possimus officia, voluptatem sunt accusantium esse aut? Magnam, corrupti sit quia architecto et sequi, exercitationem obcaecati fugit suscipit vitae fugiat cupiditate nam ex id ipsa assumenda at ullam atque tenetur dignissimos. Inventore dolores, fugiat placeat labore dolorum fugit accusamus, officiis autem necessitatibus dolor iure modi repellendus iusto! Perferendis nihil dolorem eos deserunt eius totam similique expedita autem magni eveniet non minus modi obcaecati, error quisquam fugit qui ipsa. Tenetur repudiandae et ipsam rem vero quasi, nisi soluta beatae sint modi nemo quo cum, eveniet laboriosam! Dolorem nostrum cum exercitationem obcaecati cumque quae fugit praesentium ipsum beatae nesciunt iste sint eum, eveniet voluptatibus amet ea facilis inventore officiis ad in vitae facere itaque! Velit, nihil ab possimus odit iure neque. --}}
                 
                </div>
              </div>
             
            </div>
            
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
          <div class="row">
            
            <!-- End Col -->
          </div>
          <!-- End Row -->
          <div class="row">
           
           </div>
            <!-- End Col -->
         
          <!-- End Row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Copyright © 2023-2024 Administration Ngoa EKelle. All rights reserved
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                "
              >
                
                <a href="#0" class="text-sm ml-15"> Version 1.0.0 </a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{'assets/js/bootstrap.bundle.min.js'}}"></script>
    <script src="{{'assets/js/Chart.min.js'}}"></script>
    <script src="{{'assets/js/dynamic-pie-chart.js'}}"></script>
    <script src="{{'assets/js/moment.min.js'}}"></script>
    <script src="{{'assets/js/fullcalendar.js'}}"></script>
    <script src="{{'assets/js/jvectormap.min.js'}}"></script>
    <script src="{{'assets/js/world-merc.js'}}"></script>
    <script src="{{'assets/js/polyfill.js'}}"></script>
    <script src="{{'assets/js/main.js'}}"></script>

    <script>
      // ======== jvectormap activation
      var markers = [
        { name: "Egypt", coords: [26.8206, 30.8025] },
        { name: "Russia", coords: [61.524, 105.3188] },
        { name: "Canada", coords: [56.1304, -106.3468] },
        { name: "Greenland", coords: [71.7069, -42.6043] },
        { name: "Brazil", coords: [-14.235, -51.9253] },
      ];

      var jvm = new jsVectorMap({
        map: "world_merc",
        selector: "#map",
        zoomButtons: true,

        regionStyle: {
          initial: {
            fill: "#d1d5db",
          },
        },

        labels: {
          markers: {
            render: (marker) => marker.name,
          },
        },

        markersSelectable: true,
        selectedMarkers: markers.map((marker, index) => {
          var name = marker.name;

          if (name === "Russia" || name === "Brazil") {
            return index;
          }
        }),
        markers: markers,
        markerStyle: {
          initial: { fill: "#4A6CF7" },
          selected: { fill: "#ff5050" },
        },
        markerLabelStyle: {
          initial: {
            fontWeight: 400,
            fontSize: 14,
          },
        },
      });
      // ====== calendar activation
      document.addEventListener("DOMContentLoaded", function () {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
          initialView: "dayGridMonth",
          headerToolbar: {
            end: "today prev,next",
          },
        });
        calendarMini.render();
      });

      // =========== chart one start
      const ctx1 = document.getElementById("Chart1").getContext("2d");
      const chart1 = new Chart(ctx1, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "transparent",
              borderColor: "#4A6CF7",
              data: [
                600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#4A6CF7",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              pointBorderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
            },
          ],
        },

        // Configuration options
        defaultFontFamily: "Inter",
        options: {
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "#ffffff",
                };
              },
            },
            intersect: false,
            backgroundColor: "#f9f9f9",
            titleFontFamily: "Inter",
            titleFontColor: "#8F92A1",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontFamily: "Inter",
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 500,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });

      // =========== chart one end

      // =========== chart two start
      const ctx2 = document.getElementById("Chart2").getContext("2d");
      const chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "#4A6CF7",
              barThickness: 6,
              maxBarThickness: 8,
              data: [
                600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
              ],
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            backgroundColor: "#F3F6F8",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart two end

      // =========== chart three start
      const ctx3 = document.getElementById("Chart3").getContext("2d");
      const chart3 = new Chart(ctx3, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          // Information about the dataset
          datasets: [
            {
              label: "Revenue",
              backgroundColor: "transparent",
              borderColor: "#4a6cf7",
              data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#4a6cf7",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
            {
              label: "Profit",
              backgroundColor: "transparent",
              borderColor: "#9b51e0",
              data: [
                120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#9b51e0",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
            {
              label: "Order",
              backgroundColor: "transparent",
              borderColor: "#f2994a",
              data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#f2994a",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
            },
          ],
        },

        // Configuration options
        options: {
          tooltips: {
            intersect: false,
            backgroundColor: "#fbfbfb",
            titleFontColor: "#8F92A1",
            titleFontSize: 16,
            titleFontFamily: "Inter",
            titleFontStyle: "400",
            bodyFontFamily: "Inter",
            bodyFontColor: "#171717",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 15,
            borderColor: "rgba(143, 146, 161, .1)",
            borderWidth: 1,
            title: false,
          },

          title: {
            display: false,
          },

          layout: {
            padding: {
              top: 0,
            },
          },

          legend: false,

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 300,
                  min: 50,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart three end

      // ================== chart four start
      const ctx4 = document.getElementById("Chart4").getContext("2d");
      const chart4 = new Chart(ctx4, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
          labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
          // Information about the dataset
          datasets: [
            {
              label: "",
              backgroundColor: "#4A6CF7",
              barThickness: "flex",
              maxBarThickness: 8,
              data: [600, 700, 1000, 700, 650, 800],
            },
            {
              label: "",
              backgroundColor: "#d50100",
              barThickness: "flex",
              maxBarThickness: 8,
              data: [690, 740, 720, 1120, 876, 900],
            },
          ],
        },
        // Configuration options
        options: {
          borderColor: "#F3F6F8",
          borderWidth: 15,
          backgroundColor: "#F3F6F8",
          tooltips: {
            callbacks: {
              labelColor: function (tooltipItem, chart) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            backgroundColor: "#F3F6F8",
            titleFontColor: "#8F92A1",
            titleFontSize: 12,
            bodyFontColor: "#171717",
            bodyFontStyle: "bold",
            bodyFontSize: 16,
            multiKeyBackground: "transparent",
            displayColors: false,
            xPadding: 30,
            yPadding: 10,
            bodyAlign: "center",
            titleAlign: "center",
          },

          title: {
            display: false,
          },
          legend: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                gridLines: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            ],
          },
        },
      });
      // =========== chart four end
    </script>
  </body>
</html>