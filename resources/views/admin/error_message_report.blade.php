@extends('app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
            <p  class= "text-right">Home/Error Message</p>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-success" >

        {{Session::get('success')}}

        </div>
    @endif
    
     @if(Session::has('error'))
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-danger" >

        {{Session::get('error')}}

        </div>
    @endif
    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 main_page">
        
            <div class="my-3 table-responsive">
			<button type="button" class="btn btn-primary" onclick="window.location.href='edit_sms'">Process</button>
                <table class="table  table-border">
                    <thead>
                        <tr>
                          
                            <th>Sl</th>
                            <th>Message Date</th>
                             <th>Mobile Number</th>
                            <th style="word-break:break-all;width:400px">Message Text</th>
                           
                            <th style="word-break:break-all;width:400px">Error</th>
                           <th></th>
                            <th></th>
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contents as $content)
					<?php
						$date = explode('.',$content->created_at);
						$date = $date[0];
						$date =  date("d/m/Y g:i:s A", strtotime($date));
					?>
                     <tr>
                    
                         <td>{{$content->serial}}</td>
                       
                           <td>{{$date}}</td>
                         <td>{{$content->mobile_number}}</td>
                         <td style="word-break:break-all;width:400px">{{$content->sms_text}}</td>
       
                         <td style="word-break:break-all;width:400px">{{$content->error_report}}</td>
						 <td class="text-center"><a href="edit_error_msg/{{$content->id}}"><img style="width:20px" src="{{asset('assets/image/Edit.png')}}" alt=""></a></td>
                          
                        <td class="text-center"><a href="javascript:;" onclick='delete_data({{$content->id}})'><img style="width:20px" src="{{asset('assets/image/delete.png')}}" alt=""></a></td>
                         

                     </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
<script>
    $(function() {
        $('.table').dataTable({
            searching: true,
            paging: true,
            info: false,
            pageLength: 25
            // sScrollX: "100%",
            // sScrollXInner: "110%",
            // bJQueryUI: true,
        });
    })
    
        function delete_data(id)
{
    var conf=confirm('Are you sure?');

    if(conf==true){
    $.ajax({
        processData: false,
        contentType: false,
        type: 'GET',
        url: 'delete_error_data/'+id,
        success: function (data) {
           alert('Content Remove Successfully')
           location.reload();

        }
    })
}
}
</script>
@endsection