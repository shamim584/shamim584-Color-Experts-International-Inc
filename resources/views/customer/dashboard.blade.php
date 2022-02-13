@extends('layouts.admin')
@section('content')
@include('layouts.top_nav')
@include('customer.admin_nav')

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




        </div>
      </div>
    </div>
  </div>
@endsection



@section('script')
<script>
   <?php if (session('message')): ?>
   $.toast({
    heading: "{{session('heading')}}",
    text: "{{session('message')}}",
    showHideTransition: 'slide',
    icon: "{{session('icon')}}",
    loaderBg: "{{session('loaderBg')}}",
    position: 'bottom-right'
  })
  <?php endif; ?>
</script>
<script src="{{asset('template/admin/js/toastDemo.js')}}"></script>
@endsection