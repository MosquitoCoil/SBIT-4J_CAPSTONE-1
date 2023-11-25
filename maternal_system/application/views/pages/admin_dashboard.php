<div class="container-fluid">
  
<div class="alert alert-success" role="alert" id="successAlert">
  <strong><i class="fas fa-check-circle"></i> Success! </strong> Welcome Admin...
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
                    <h5 class="card-title mb-9 fw-semibold">Health Center</h5>
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
                            <i class="fas fa-landmark" style="font-size: 25px"></i>
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
                    <h5 class="card-title mb-9 fw-semibold">Patients</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">345</h4>
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
                            <i class="fas fa-wheelchair" style="font-size: 25px"></i>
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
                    <h5 class="card-title mb-9 fw-semibold">Staff</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">100</h4>
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
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Patients</h5>
                <div class="table-responsive">
                  <table class="table table-bordered text-nowrap mb-0 align-middle text-center">
                    <thead class="text-dark fs-4 bg-light">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Patient ID</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Appointment</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Elite Admin</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="">Date&Time</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="badge bg-primary fw-semibold mb-0 fs-2">Pending</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="text-center">Date&Time</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="badge bg-success fw-semibold mb-0 fs-2">Check-up</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="text-center">Date&Time</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="badge bg-danger fw-semibold mb-0 fs-2">Cancelled</h6>
                        </td>
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Hosting Press HTML</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="text-center">Date&Time</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="badge bg-warning fw-semibold mb-0 fs-2">Absent</h6>
                        </td>
                      </tr>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

              <!-- graph 2 -->
              <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card ">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Appointment</h5>
                      <hr class="">
                    <div class="row align-items-center">
                      <canvas id="myDoughnutChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>

        </div>


        <script>
    // Get the canvas element
    var ctx = document.getElementById('myDoughnutChart').getContext('2d');

    // Data for the doughnut chart
    var data1 = {
        labels: ['Check-up', 'Cancelled','Pending', 'Absent'],
        datasets: [{
            data: [30, 40, 35, 45],
            backgroundColor: ['rgb(85, 199, 132)', 'rgb(85, 205, 186)', 'rgb(35, 202, 292)', 'rgb(55, 125, 186)'],
        }]
    };

    // Create the doughnut chart
    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data1,
        options: {
            cutoutPercentage: 0, // Ensure cutoutPercentage is 0
            elements: {
                arc: {
                    borderWidth: 0, // Set arc border width to 0 to remove any residual border
                }
            },
            plugins: {
                doughnutlabel: {
                    labels: [
                        {
                            text: 'Total',
                            font: {
                                size: '20'
                            }
                        },
                        {
                            text: '100',
                            font: {
                                size: '16'
                            }
                        }
                    ]
                }
            }
        }
    });
</script>


<script>
    var ctx2 = document.getElementById('myDoughnutChart2').getContext('2d');

    var data2 = {
        labels: ['Payatas', 'Bagong Silangan', 'Batasan Hills', 'Holy Spirit', 'Commonwealth'],
        datasets: [{
            data: [30, 40, 35, 10, 75],
            backgroundColor: ['rgb(85, 199, 132)', 'rgb(75, 192, 192)', 'rgb(85, 205, 186)', 'rgb(35, 202, 292)', 'rgb(55, 125, 186)'],
        }]
    };

    var myDoughnutChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: data2,
        options: {
            cutoutPercentage: 0,
            elements: {
                arc: {
                    borderWidth: 0,
                }
            },
            plugins: {
                legend: {
                    display: false // Hide the internal labels
                }
            }
        }
    });
</script>

