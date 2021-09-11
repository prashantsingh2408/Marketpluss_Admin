<!doctype html>
<html lang="en">

@include('head');

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
    @include('sidebar');
    @include('navbar');
    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <form action="{{url('add-setup')}}">
            <h4 class="font-weight-bold">Add Setup</h4>
            </form>
            <div class="row" style="padding:10px 0">
              <div class="d-inline-block w-100">
                <button type="button" class="btn btn-outline-primary mt-2" onclick="showslider()">Slider</button>
                <button type="button" class="btn btn-outline-primary mt-2" onclick="showsponsorposition()">Sponsor Position</button>
                <button type="button" class="btn btn-outline-primary mt-2" onclick="showcategorybanner()">Category Banner</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="slider">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Slider</h5>
<!--
                  <button class="btn btn-secondary btn-sm">
                    <a href="add-pending-verifications.php" style="color:white">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
-->
                </div>
                <div class="table-responsive">
                  <table class="table data-table mb-0 table-bordered table-striped ">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Image
                        </th>
                        <th scope="col">
                          Link
                        </th>
                        <th scope="col">
                          Sort_Order
                        </th>
                        <th scope="col">
                          Expiry
                        </th>
                        <th scope="col">
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">sdgfksdgfksdjfgskfjgk</a>
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">sdgfksdgfksdjfgskfjgk</a>
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">sdgfksdgfksdjfgskfjgk</a>
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="sponsorposition">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Sponsor Position</h5>
<!--
                  <button class="btn btn-secondary btn-sm">
                    <a href="add-pending-verifications.php" style="color:white">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
-->
                </div>
                <div class="table-responsive">
                  <table class="table data-table mb-0 table-bordered table-striped ">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Seller_Name
                        </th>
                        <th scope="col">
                          Category
                        </th>
                        <th scope="col">
                          Sort_Order
                        </th>
                        <th scope="col">
                          Expiry
                        </th>
                        <th scope="col">
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="">
                          <div class="active-project-1 d-flex align-items-center mt-0 ">
                            <div class="h-avatar is-medium">
                              <img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
                            </div>
                            <div class="data-content">
                              <div>
                                <span class="font-weight-bold">Vari tech</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          Spa
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="">
                          <div class="active-project-1 d-flex align-items-center mt-0 ">
                            <div class="h-avatar is-medium">
                              <img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
                            </div>
                            <div class="data-content">
                              <div>
                                <span class="font-weight-bold">Vari tech</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          Spa
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="">
                          <div class="active-project-1 d-flex align-items-center mt-0 ">
                            <div class="h-avatar is-medium">
                              <img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
                            </div>
                            <div class="data-content">
                              <div>
                                <span class="font-weight-bold">Vari tech</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          Spa
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="categorybanner">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Category Banner</h5>
<!--
                  <button class="btn btn-secondary btn-sm">
                    <a href="add-pending-verifications.php" style="color:white">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
-->
                </div>
                <div class="table-responsive">
                  <table class="table data-table mb-0 table-bordered table-striped ">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Image
                        </th>
                        <th scope="col">
                          Link
                        </th>
                        <th scope="col">
                          Sort_Order
                        </th>
                        <th scope="col">
                          Expiry
                        </th>
                        <th scope="col">
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">sdgfksdgfksdjfgskfjgk</a>
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">sdgfksdgfksdjfgskfjgk</a>
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          1
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">sdgfksdgfksdjfgskfjgk</a>
                        </td>
                        <td>
                          12
                        </td>
                        <td>
                          12/12/2021
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                              <label class="custom-control-label" for="customSwitch04">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page end  -->
    <!-- Wrapper End-->
    @include('footer');
    @include('script');
</body>

</html>
