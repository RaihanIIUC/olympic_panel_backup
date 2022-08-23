@extends('app')
@section('css')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<style>
    .search.form-control {
        margin-top: 12px;
        display: block;
        width: 100%;
        height: 30px;
        padding: 0px 5px;
        font-size: 12px;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        bcontent: 1px solid #ced4da;
        bcontent-radius: .25rem;
        transition: bcontent-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    table.dataTable{
        font-size: 14px;
    }
    table.table td, table.table th {
        /* padding: .50rem!important; */
        padding-top: 0.25rem!important;
        padding-right: 0.25rem!important;
        padding-bottom: 0.25rem!important;
        padding-left: 0.25rem!important;
    }
    table.dataTable thead th, table.dataTable thead td{
        padding: 0px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button{
        padding: 0px!important;
    }
    .dataTables_paginate.paging_simple_numbers{
        font-size: 13px!important;
        padding-top: 8px!important;
    }
    table thead{
        background-color: #E20001;
        color: #fff;
    }
    .dataTables_length{
        display: none!important;
    }
    .dataTables_scrollBody{
        height:295px !important;
        max-height:295px !important;
        bcontent:none !important;
    }
	.word_break{
		width:400px;
		word-break:break-all;
	}
</style>
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
            <p  class= "text-right">Home/Download Message</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 main_page">
        
            <div class="my-3 table-responsive">
           
                <table class="table  table-border">
                    <thead>
                        <tr>
                           
                            <th>Sl</th>
                            <th>Mobile Number</th>
                            <th style="word-break:break-all;width:400px">Message Text</th>
                            <th>Message Date</th>
                            <th>Download Flag</th>
                            <th>Parse Flag</th>
							
                           
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
          ajax: "{{ route('download-message') }}",
		  createdRow: function( row, data, dataIndex ) {

            // Add a class to the cell in the second column
            $(row).children(':nth-child(3)').addClass('word_break');

            // Add a class to the row
           
        },
          columns: [
              {data: 'id', name: 'id'},

              {data:'mobile_number',name:'mobile_number'},
           

            {

                data: 'message_text',
                name: 'message_text',


            },
            {
                data:'date',
                name:'date',
            },
			 {
                data:'download_flag',
                name:'download_flag',
            },
			
			 {
                data:'parse_flag',
                name:'parse_flag',
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
