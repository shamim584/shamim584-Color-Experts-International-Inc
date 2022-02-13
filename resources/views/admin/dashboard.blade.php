@extends('layouts.admin')
@section('content')
@include('layouts.top_nav')
@include('admin.admin_nav')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          

          <div class="row">

            <div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row">
										<img src="{{asset('template/admin/img/user-dummy.png')}}" class="img-lg rounded" alt="profile image">
										<div class="ml-3">
											<h6>{{Auth::user()->name}}</h6>
											<p class="text-muted">{{Auth::user()->email}}</p>
											<p class="mt-2 text-success font-weight-bold">
                        @if (Auth::user()->role ===1)
                        Admin
                        @elseif (Auth::user()->role ===2)
                        Customer
                        @else(Auth::user()->role ===3)
                        Customer Support
                        @endif
                      </p>
										</div>
									</div>
								</div>
							</div>
						</div>


            <div class="col-md-8 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0">Info</h4>
									<div class="d-flex justify-content-between align-items-center">
										
                    <table class="table table-borderless w-100 mt-4">
                      <tbody><tr>
                        <td><strong>Full Name :</strong> {{ Auth::user()->name }}</td>
                        <td><strong>Email :</strong> {{ Auth::user()->email }}</td>
                      </tr>
                      
                      
                    </tbody></table>
								
									</div>
								</div>
							</div>
						</div>


            
          </div>
          
          {{-- <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-dark text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-handbag icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Total invoices</h4>
                      <h3 class="font-weight-light mb-3">75, 650</h3>
                      <p class="mb-0 font-weight-light">39% more growth </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-primary text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-user icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">New users</h4>
                      <h3 class="font-weight-light mb-3">37, 650</h3>
                      <p class="mb-0 font-weight-light">43% more this year </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-danger text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-screen-desktop icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Unique visits</h4>
                      <h3 class="font-weight-light mb-3">1349</h3>
                      <p class="mb-0 font-weight-light">69% increase</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-success text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-support icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Bounce rate</h4>
                      <h3 class="font-weight-light mb-3">37, 580</h3>
                      <p class="mb-0 font-weight-light">65% higher rate </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card text-white border-0">
                <img class="card-img h-100 rounded-0" src="{{asset("template/admin/img/cover.png")}}" alt="Card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                  <h4 class="font-weight-light">
                      10 Oct 2018
                  </h4>
                  <div>
                    <h4 class="font-weight-light">
                        Check our unlimited elements
                    </h4>
                    <h3 class="font-weight-light mb-0">
                        Welcome to Flare Admin dashboard
                    </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div>
                        <p class="mb-1"><span class="h4 mb-0 mr-2">Google</span>Google Inc.</p>
                        <p class="mb-0 text-muted font-weight-light">The search engine giant</p>                        
                      </div>
                      <div>
                        <h6 class="font-weight-normal">Czech Republic</h6>
                        <span class="badge badge-primary">+3.53%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div>
                        <p class="mb-1"><span class="h4 mb-0 mr-2">Tesla</span>Tesla, Inc.</p>                        
                        <p class="mb-0 text-muted font-weight-light">Master of innovations</p>
                      </div>
                      <div>
                        <h6 class="font-weight-normal">South Africa</h6>
                        <span class="badge badge-primary">+1.26%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Performance</h4>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Data
                      <span class="ml-auto font-weight-bold">70%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Email
                      <span class="ml-auto font-weight-bold">15%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Website
                      <span class="ml-auto font-weight-bold">35%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Mobile App
                      <span class="ml-auto font-weight-bold">30%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Branding
                      <span class="ml-auto font-weight-bold">50%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div>
                    <p class="d-flex mb-2">
                      UI Kits
                      <span class="ml-auto font-weight-bold">90%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}




        </div>
      </div>
    </div>
  </div>
@endsection
