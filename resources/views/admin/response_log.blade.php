@extends('app')
@section('css')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@endsection
@section('body')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 header_top_new_order d-flex align-items-center justify-content-between">
            <h5 class="m-0 text-light"><a href="javascript:history.back()" style="text-decoration: none;" class="text-light mr-2"><</a> <a href="{{route('admin')}}" style="text-decoration: none;" class="text-light mr-2">Home</a></h5>
            <h5 class="m-0 text-light">Logged in as Admin <a href="{{route('logout')}}"><img style="width: 20px" src="{{asset('assets/image/loggedinAsAdmin.png')}}"></a></h5>
        </div>

    </div>

    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 header_bottom_new_order text-center">
       
        </div>

    </div>
    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 breadcumb">
            <p  class= "text-right">Home/Route</p>
        </div>
    </div>
 @if(Session::has('success'))
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-success" >

        {{Session::get('success')}}

        </div>
    @endif
    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 main_page">
            
            <div class="my-3 table-responsive">
           
                <table class="table  table-border">
                    <thead>
                        <tr>
							<th>#</th>
                            <th>Timestamp</th>
                            <th>Address</th>
                           
                            <th>Message Id</th>
							<th>Status Detail</th>
							<th>Status Code</th>
							
                            
                          
                        </tr>
                    </thead>
                    <tbody>
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
    $(function () {

      var table = $('.table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('response_log') }}",
          columns: [
              {data: 'sl_no', name: 'sl_no'},

              {data:'date',name:'date'},
           

            {

                data: 'address',
                name: 'address',


            },
            {
                data:'messageId',
                name:'messageId',
            },
			 {
                data:'statusDetail',
                name:'statusDetail',
            },
			
			 {
                data:'statusCode',
                name:'statusCode',
            },

           





          ]
      });

    });
	
	  function delete_route_with_number_data(id)
{
    var conf=confirm('Are you sure?');

    if(conf==true){
    $.ajax({
        processData: false,
        contentType: false,
        type: 'GET',
        url: 'delete_route_with_number_data/'+id,
        success: function (data) {
           alert('Content Delete Successfully')
           location.reload();

        }
    })
}
}
  </script>
@endsection
