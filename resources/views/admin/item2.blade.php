@extends('app')
@section('css')
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
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
        height:257px !important;
        max-height:257px !important;
        border:none !important;
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
            <p  class= "text-right">Home/User Creation</p>
        </div>
    </div>

    @if(Session::has('success'))
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-success" >

        {{Session::get('success')}}

        </div>
    @endif

    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 main_page">
            <div class=" my-3 d-flex justify-content-end">
                <a href="{{url('admin/add-item')}}" class="btn btn-success">Add Item</a>
            </div>
            <div class="my-3 table-responsive">
                <table class="table  table-border">
                    <thead>
                        <tr>
                           <th>#</th>
                            
                            <th>Item Id</th>
                          
                            <th>Item Name</th>
                            <th></th>
                            <th></th>
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contents as $content)
                     <tr>
                    
                         <td>{{$content->serial}}</td>
                         <td>{{$content->item_id}}</td>
                         <td>{{$content->name}}</td>
                         <td class="text-center"><a href="edit_item/{{$content->id}}"><img style="width:20px" src="{{asset('assets/image/Edit.png')}}" alt=""></a></td>
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
<script>

    $(function() {
        $('.table').dataTable({
            searching: true,
            paging: true,
            info: false,
             pageLength: 20
            // scrollY: 240,
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
        url: 'delete_item_data/'+id,
        success: function (data) {
           alert('Content Delete Successfully')
           location.reload();

        }
    })
}
}
</script>
@endsection
