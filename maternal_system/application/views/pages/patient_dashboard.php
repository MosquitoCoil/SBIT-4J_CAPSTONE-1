<div class="container-fluid">

<div class="alert alert-success" role="alert" id="successAlert">
  <strong><i class="fas fa-check-circle"></i> Success! </strong> Welcome Patient...
</div>

<script>
  setTimeout(function() {
    var alert = document.getElementById('successAlert');
    alert.style.display = 'none';
  }, 3000);
</script>


  <h4 class="pb-2"><b>Dashboard</b></h4>
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4 bg-card-2">
                    <h5 class="card-title mb-9 fw-semibold">Make an Appointment</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">5</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-dark-maroon rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus" style="font-size: 25px"></i>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id=""></div>
                        </div>
                      </div> -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card 2 -->
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4 bg-card-2">
                    <h5 class="card-title mb-9 fw-semibold ">Health Center</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">21</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-dark-maroon rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="fas fa-hospital" style="font-size: 25px"></i>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id=""></div>
                        </div>
                      </div> -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card 3 -->
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4 bg-card-2">
                    <h5 class="card-title mb-9 fw-semibold">Lying-in</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">4</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>
                      
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-dark-maroon rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-nurse" style="font-size: 25px"></i>
                          </div>
                        </div>
                      </div>
                      
                      <!-- <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id=""></div>
                        </div>
                      </div> -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-6">
              <div class="card">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold"><i class="far fa-calendar-alt"></i> Calendar</h5>
                    <hr class="">
                    <div class="row align-items-center">
                      <!-- content here -->
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- graph 2 -->
              <div class="col-lg-6">
                <div class="card ">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold"><i class="far fa-calendar-alt"></i> Schedule </h5>
                      <hr class="">
                    <div class="row align-items-center">
                    </div>
                  </div>
                </div>
              </div>

        </div>
