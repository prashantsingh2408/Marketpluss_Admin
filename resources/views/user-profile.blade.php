<!doctype html>
<html lang="en">

@include('head')

<body class="">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
      <img src="assets/img/loader.svg" class="spinner">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    @include('sidebar')
    @include('navbar')
    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <h4 class="font-weight-bold">Add User</h4>
          </div>
        </div>
        <div class="row" style="padding:5px 0">
          <div class="card card-block card-stretch">
            <div class="card-body p-0">
              <div class="d-flex justify-content-between align-items-center p-3">
                <h5 class="font-weight-bold">Profile</h5>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div>
                          <ul class="list-style-1 mb-0">
                            <li class="list-item d-flex justify-content-start align-items-center">
                              <div class="avatar">
                                <img class="avatar avatar-img avatar-60 rounded-circle" src="assets/images/user/1.jpg" alt="01.jpg" />
                              </div>
                              <div class="list-style-detail ml-4 mr-2">
                                <h5 class="font-weight-bold">Kate Smith</h5>
                                <p class="mb-0 mt-1 text-muted">Botsford and Sons</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="row mt-3 d-flex justify-content-center">
                          <div class="col-6 text-center mb-2">
                            <button class="btn btn-block btn-sm btn-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                              </svg>
                              <span class="">Message</span>
                            </button>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <table class="table table-borderless mb-0">
                          <tr>
                            <td class="p-0">
                              <p class="mb-0 text-muted">Email ID</p>
                            </td>
                            <td>
                              <p class="mb-0 "><a href="https://templates.iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80ebe1f4e5c0f9e1e8efefaee3efed">[email&#160;protected]</a></p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-0">
                              <p class="mb-0 text-muted">Birthday</p>
                            </td>
                            <td>
                              <p class="mb-0 ">01 Feb 1990</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-0">
                              <p class="mb-0 text-muted">Phone</p>
                            </td>
                            <td>
                              <p class="mb-0 ">+99 8756214524</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-0">
                              <p class="mb-0 text-muted">Country</p>
                            </td>
                            <td>
                              <p class="mb-0 ">USA</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-0">
                              <p class="mb-0 text-muted">State/Region</p>
                            </td>
                            <td>
                              <p class="mb-0 ">West Virginia</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-0">
                              <p class="mb-0 text-muted">Address</p>
                            </td>
                            <td>
                              <p class="mb-0 ">Baker Street, no. 7</p>
                            </td>
                          </tr>
                        </table>
                      </li>
                      <li class="list-group-item">
                        <h6 class="font-weight-bold">Total Spending</h6>
                        <div id="chart-apex-column-001" style="height: 250px" class="custom-chart"></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body p-0">
                      <ul class="nav tab-nav-pane nav-tabs pt-2 mb-0">
                        <li class="pb-2 mb-0 nav-item"><a data-toggle="tab" class="font-weight-bold text-uppercase px-5 py-2 active" href="#invoice">Invoices</a></li>
                        <li class="pb-2 mb-0 nav-item"><a data-toggle="tab" class="font-weight-bold text-uppercase px-5 py-2" href="#activity">Activity</a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="invoice" class="tab-pane fade show active">
                          <div class="d-flex justify-content-between align-items-center p-3">
                            <h5>Invoice List</h5>
                            <button class="btn btn-secondary btn-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                              </svg>
                              Export
                            </button>
                          </div>
                          <div class="table-responsive">
                            <table class="table data-table mb-0">
                              <thead class="table-color-heading">
                                <tr class="text-muted">
                                  <th scope="col">ID</th>
                                  <th scope="col">Date </th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Status</th>
                                  <th scope="col" class="text-right">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>IN-902559</td>
                                  <td>12 Jan 2020</td>
                                  <td>
                                    Order OR-561488
                                  </td>
                                  <td>
                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                      </svg>
                                      Paid
                                    </p>
                                  </td>
                                  <td class="text-right">$104.98</td>
                                </tr>
                                <tr>
                                  <td>IN-552149</td>
                                  <td>15 Jan 2020</td>
                                  <td>
                                    Order OR-568842
                                  </td>
                                  <td>
                                    <p class="mb-0 text-warning d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                      </svg>
                                      Pending
                                    </p>
                                  </td>
                                  <td class="text-right">$99.98</td>
                                </tr>
                                <tr>
                                  <td>IN-941529</td>
                                  <td>12 Jan 2020</td>
                                  <td>
                                    Order OR-598550
                                  </td>
                                  <td>
                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                      </svg>
                                      Paid
                                    </p>
                                  </td>
                                  <td class="text-right">$966.12</td>
                                </tr>
                                <tr>
                                  <td>IN-125623</td>
                                  <td>16 Jan 2020</td>
                                  <td>
                                    Order OR-325548
                                  </td>
                                  <td>
                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                      </svg>
                                      Completed
                                    </p>
                                  </td>
                                  <td class="text-right">$65.00</td>
                                </tr>
                                <tr>
                                  <td>IN-911211</td>
                                  <td>18 Jan 2020</td>
                                  <td>
                                    Order OR-125475
                                  </td>
                                  <td>
                                    <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                      </svg>
                                      Cancelled
                                    </p>
                                  </td>
                                  <td class="text-right">$108.99</td>
                                </tr>
                                <tr>
                                  <td>IN-902210</td>
                                  <td>19 Jan 2020</td>
                                  <td>
                                    Order OR-595508
                                  </td>
                                  <td>
                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                      </svg>
                                      Paid
                                    </p>
                                  </td>
                                  <td class="text-right">$199.99</td>
                                </tr>
                                <tr>
                                  <td>IN-902445</td>
                                  <td>20 Jan 2020</td>
                                  <td>
                                    Order OR-884155
                                  </td>
                                  <td>
                                    <p class="mb-0 text-warning d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                      </svg>
                                      Pending
                                    </p>
                                  </td>
                                  <td class="text-right">$99.99</td>
                                </tr>
                                <tr>
                                  <td>IN-901020</td>
                                  <td>22 Jan 2020</td>
                                  <td>
                                    Order OR-500008
                                  </td>
                                  <td>
                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                      </svg>
                                      Paid
                                    </p>
                                  </td>
                                  <td class="text-right">$449.00</td>
                                </tr>
                                <tr>
                                  <td>IN-9036510</td>
                                  <td>22 Jan 2020</td>
                                  <td>
                                    Order OR-489523
                                  </td>
                                  <td>
                                    <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                      </svg>
                                      Cancelled
                                    </p>
                                  </td>
                                  <td class="text-right">$1,299.05</td>
                                </tr>
                                <tr>
                                  <td>IN-120010</td>
                                  <td>23 Jan 2020</td>
                                  <td>
                                    Order OR-965508
                                  </td>
                                  <td>
                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                      </svg>
                                      Paid
                                    </p>
                                  </td>
                                  <td class="text-right">$6,325.99</td>
                                </tr>
                                <tr>
                                  <td>IN-302240</td>
                                  <td>15 Jan 2020</td>
                                  <td>
                                    Order OR-654412
                                  </td>
                                  <td>
                                    <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                      </svg>
                                      Paid
                                    </p>
                                  </td>
                                  <td class="text-right">$699.00</td>
                                </tr>
                                <tr>
                                  <td>IN-662210</td>
                                  <td>26 Jan 2020</td>
                                  <td>
                                    Order OR-965508
                                  </td>
                                  <td>
                                    <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                      </svg>
                                      Cancelled
                                    </p>
                                  </td>
                                  <td class="text-right">$150.03</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div id="activity" class="tab-pane fade p-3">
                          <h3 class="mb-3">Activity</h3>
                          <div class="iq-timeline0 m-0 d-flex align-items-center justify-content-between position-relative">
                            <ul class="list-inline p-0 m-0">
                              <li>
                                <div class="pt-3">
                                  <p class="mb-0 text-muted font-weight-bold text-uppercase">13, September 2020</p>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                <h6 class="float-left mb-1 font-weight-bold">Signed Out</h6>
                                <div class="d-inline-block w-100">
                                  <p class="mb-0">Santander crea una sociedad para gestionar las sucursales que cierra</p>
                                  <div class="d-inline-block w-100">
                                    <p>Probablemente, la bodega más sostenible de españa</p>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                <h6 class="float-left mb-1 font-weight-bold">Create Invoice IN-302240</h6>
                                <div class="d-inline-block w-100">
                                  <p>Repsol sopesa elegir primero un socio para su área de renovables y después sacarla a Bolsa</p>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                <h6 class="float-left mb-1 font-weight-bold">Signed In</h6>
                                <div class="d-inline-block w-100">
                                  <p>El Ibex busca nuevos máximos en la última jornada de abril</p>
                                </div>
                                <div class="pt-3">
                                  <p class="mb-0 text-muted font-weight-bold text-uppercase">14, September 2020</p>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                <h6 class="float-left mb-1 font-weight-bold">Signed Out</h6>
                                <div class="d-inline-block w-100">
                                  <p>Ecoener se atreve con la Bolsa y se estrenará con una valoración de 336 millones</p>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                <h6 class="float-left mb-1 font-weight-bold">Create Invoice IN-662210</h6>
                                <div class="d-inline-block w-100">
                                  <p class="mb-0">BBVA supera la crisis del Covid y gana 1.210 millones en el primer trimestre</p>
                                </div>
                                <div class="d-inline-block w-100">
                                  <p>Probablemente, la bodega más sostenible de españa</p>
                                </div>
                              </li>
                              <li>
                                <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                <h6 class="float-left mb-1 font-weight-bold">Signed In</h6>
                                <div class="d-inline-block w-100">
                                  <p class="mb-0">El mercado se prepara para una corrección en mayo tras el rally bursátil</p>
                                </div>
                                <div class="d-inline-block w-100">
                                  <p>Repsol sopesa elegir primero un socio para su área de renovables y después sacarla a Bolsa</p>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->

  @include('footer')
  @include('script')
</body>

</html>
