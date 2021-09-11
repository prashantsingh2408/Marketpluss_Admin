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
            <h4 class="font-weight-bold">Edit User</h4>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <div class="card-body rounded bg-light">
                      <div class="d-flex justify-content-center">
                        <img src="assets/images/user/1.jpg" class="img-fluid" alt="profile">
                      </div>
                      <div class="d-flex justify-content-center mt-2 mb-3">
                        <p class="mb-0 text-muted font-weight-bold">Upload Image</p>
                        <input type="file" accept="image/*" id="myFile" name="filename2">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <form class="row g-3 date-icon-set-modal">
                      <div class="col-md-6 mb-3">
                        <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Full Name</label>
                        <input type="text" class="form-control" id="Text1" placeholder="Enter Full Name">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label font-weight-bold text-muted text-uppercase">Gender</label><br>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="inlineRadio1" name="customRadio-1" class="custom-control-input">
                            <label class="custom-control-label" for="inlineRadio1"> Male </label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="inlineRadio2" name="customRadio-1" class="custom-control-input">
                            <label class="custom-control-label" for="inlineRadio2"> Female </label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline mt-2">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="inlineRadio3" name="customRadio-1" class="custom-control-input">
                            <label class="custom-control-label" for="inlineRadio3"> Other </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 position-relative">
                        <label for="Text2" class="form-label font-weight-bold text-muted text-uppercase">Birth Day</label>
                        <input type="text" class="form-control vanila-datepicker" id="Text2" name="event_date" placeholder="Enter Birth Day" autocomplete="off">
                        <span class="search-link">
                          <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                        </span>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Text4" class="form-label font-weight-bold text-muted text-uppercase">Email</label>
                        <input type="email" class="form-control" id="Text4" placeholder="Enter Email">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Phone</label>
                        <input type="number" class="form-control" id="Text5" placeholder="Enter Phone">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputcountry" class="form-label font-weight-bold text-muted text-uppercase">Country</label>
                        <select id="inputcountry" class="form-select form-control choicesjs">
                          <option class="" selected>Select Country</option>
                          <option value="USA">USA</option>
                          <option value="UK">UK</option>
                          <option value="France">France</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputState" class="form-label font-weight-bold text-muted text-uppercase">State/Region</label>
                        <select id="inputState" class="form-select form-control choicesjs">
                          <option class="" selected>Select State/Region</option>
                          <option value="Ohio">Ohio</option>
                          <option value="Briston">Briston</option>
                          <option value="Nevada">Nevada</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Texas">Texas</option>
                          <option value="California">California</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Zipcode</label>
                        <input type="text" class="form-control" id="Text7" placeholder="Enter Zipcode">
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="Text6" class="form-label font-weight-bold text-muted text-uppercase">Address</label>
                        <input type="text" class="form-control" id="Text6" placeholder="Enter Address">
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="Text9" class="form-label font-weight-bold text-muted text-uppercase">Bio</label>
                        <textarea class="form-control" id="Text9" rows="2" placeholder="Enter Bio"></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label class="form-label font-weight-bold text-muted text-uppercase mb-3">Notification Type</label><br>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox1">
                            <label class="custom-control-label" for="inlineCheckbox1">Email</label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox2">
                            <label class="custom-control-label" for="inlineCheckbox2">SMS</label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox3">
                            <label class="custom-control-label" for="inlineCheckbox3">Phone</label>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="d-flex justify-content-end mt-3">
                      <button class="btn btn-primary">
                        Add User
                      </button>
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
