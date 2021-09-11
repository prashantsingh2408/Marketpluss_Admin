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
					<div class="col-lg-12">
						<div class="card card-block card-stretch">
							<div class="card-body p-0">
								<div class="d-flex justify-content-between align-items-center p-3">
									<h5 class="font-weight-bold">Users</h5>
									<button class="btn btn-secondary btn-sm">
										<a href="{{url('create-user')}}" style="color:white;" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17" style="padding-bottom:4px;">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
											</svg>
											Add
										</a>
									</button>
								</div>
                  <div class="table-responsive">
                    <table class="table data-table mb-0 table-bordered table-striped ">
                      <thead class="table-color-heading">
                        <tr class="">
                          <th scope="col">
                            S No.
                          </th>
                          <th scope="col">
                            Name
                          </th>
                          <th scope="col">
                            Contact
                          </th>
                          <th scope="col">
                            Email
                          </th>
                          <th scope="col">
                            D.O.B
                          </th>
                          <th scope="col">
                            Action
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
																	<a href="user-profile.php">
																		<span class="font-weight-bold">Vari tech</span>
																	</a>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            +91 9876543210
                          </td>
                          <td>
                            abcd@email.com
                          </td>
                          <td>
                            12/12/1990
                          </td>
                          <td>
                            <div class="d-flex justify-content-end align-items-center">
                              <button type="button" class="btn btn-primary btn-sm mr-1"><a href="{{url('user-profile')}}" style="color:white;" target="_blank">Login</a></button>
                              <button type="button" class="btn btn-info btn-sm mr-1"><a href="{{url('edit-user')}}" style="color:white" target="_blank">Edit</a></button>
                              <button type="button" class="btn btn-danger btn-sm mr-1" onclick="return confirm ('Are You sure you want to delete?')">Delete</button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
							</div>
						</div>
					</div>
					<!--Add Modal -->
					<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="addmodalTitle">Add a City</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<!-- state -->
									<div class="header-title">
										<h6 class="card-title">Select State</h6>
									</div>
									<select class="form-control choicesjs" id="state" name="state">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<!-- city -->
									<div class="header-title">
										<h6 class="card-title">Select City</h6>
									</div>
									<select class="form-control choicesjs" id="city" name="city">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-sm">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!--Edit Modal -->
					<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="editmodalTitle">Edit a City</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<!-- state -->
									<div class="header-title">
										<h6 class="card-title">Select State</h6>
									</div>
									<select class="form-control choicesjs" id="state" name="state">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<!-- city -->
									<div class="header-title">
										<h6 class="card-title">Select City</h6>
									</div>
									<select class="form-control choicesjs" id="city" name="city">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-sm">Save changes</button>
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
    <script>
      $(document).ready(function() {
      $('#responded').hide();
      })
      function showpending()
      {
      	$('#pending').show();
      	$('#responded').hide();
      }
      function showresponded()
      {
      	$('#pending').hide();
      	$('#responded').show();
      }
    </script>
</body>

</html>
