@extends('layouts.admin')
@section('content')
@include('layouts.top_nav')
@include('customer.admin_nav')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          
          
            <div class="card">
                <div class="card-body">
                    <div class="row">
                <div class="col-md-6">
                <h4 class="card-title">Data list</h4>
                <p class="mb-0 text-muted font-weight-light">Simple crud list</p>
                </div>
                <div class="col-md-6">
<button type="button" class="btn btn-primary btn-fw float-right" data-toggle="modal" data-target="#exampleModal-2">Add Data</button>
                </div>
            </div>
                </div>
            </div>

            

            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-12 table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                         @foreach ($crudData as $key => $val )
                           
                         <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$val->f_name}}</td>
                            <td>{{$val->l_name}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->phone}}</td>
                            <td>
                              <button class="btn btn-outline-primary edit" data-toggle="modal" id="{{$val->id}}" data-target="#exampleModal-3">Update</button>
                              <button id="{{$val->id}}" class="btn btn-outline-danger delete">Delete</button>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>

        </div>
      </div>
    </div>
  </div>



  {{-- add model --}}
  <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-2">Add Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <form id="myform" class="forms-sample" method="POST" action="{{url('customer/data-post')}}">
             @csrf
            <div class="form-group">
            <label for="first_name">First Name</label>
            <input class="form-control" name="first_name" placeholder="first name type here" required="">
            </div>

            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input class="form-control" name="last_name" placeholder="last name type here" required="">
              </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" placeholder="email type here" required="">
            </div>

            <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" name="phone" placeholder="phone type here" required="">
            </div>
            <button form="myform" type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
        </form>
        </div>
      </div>
    </div>
  </div>


    {{-- edit model --}}
    <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel-3">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form id="myform2" class="forms-sample" method="POST" action="{{url('customer/data-update')}}">
               @csrf

               <input type="hidden" id="id" name="id" >
              <div class="form-group">
              <label for="first_name">First Name</label>
              <input id="f_name" class="form-control" name="first_name" placeholder="first name type here" required="">
              </div>
  
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="l_name" class="form-control" name="last_name" placeholder="last name type here" required="">
                </div>
  
              <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" name="email" placeholder="email type here" required="">
              </div>
  
              <div class="form-group">
              <label for="phone">Phone</label>
              <input id="phone" class="form-control" name="phone" placeholder="phone type here" required="">
              </div>
              <button form="myform2" type="submit" class="btn btn-success">Update</button>
              <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
          </form>
          </div>
        </div>
      </div>
    </div>

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

    
$(document).ready(function(){
  $(".edit").click(function(){
    $tr = $(this).closest('tr');
    var id = $(this).attr("id");

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();
    $("#id").val(id);
    $("#f_name").val(data[1]);
    $("#l_name").val(data[2]);
    $("#email").val(data[3]);
    $("#phone").val(data[4]);
  });

  $(".delete").click(function(){
    var id = $(this).attr("id");
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3f51b5',
        cancelButtonColor: '#ff4081',
        confirmButtonText: 'Great ',
        buttons: {
          cancel: {
            text: "No, cancel!",
            value: null,
            visible: true,
            className: "btn btn-danger",
            closeModal: true,
          },
          confirm: {
            text: "OK",
            value: true,
            visible: true,
            className: "btn btn-primary",
            closeModal: true,
          }
        },
      }).then(function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
        type: "GET",
        url: "{{url('customer/data-delete')}}",
        data: {"id":id},
        success: function() {
          $.toast({
          heading: "Delete",
          text: "Data has been delete successfully",
          showHideTransition: 'slide',
          icon: "success",
          loaderBg: "#46c35f",
          position: 'bottom-right'
        })
        setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 1500); }

        


        });


      });   
  });
  

});





      
</script>
  <script src="{{asset('template/admin/js/data-table.js')}}"></script>
  <script src="{{asset('template/admin/js/toastDemo.js')}}"></script>
  <script src="{{asset('template/admin/js/modal-demo.js')}}"></script>
 
  

  @endsection
  
@endsection
