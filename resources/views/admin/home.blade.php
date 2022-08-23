@extends('app')
@section('css')

@endsection
@section('body')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 header_top d-flex align-items-center justify-content-between">
          
            <h5 class="m-0 text-light">Home</h5>
            <h5 class="m-0 text-light">Logged in as Admin <a href="{{route('logout')}}"><img style="width: 20px" src="{{asset('assets/image/loggedinAsAdmin.png')}}"></a></h5>
        </div>

    </div>

    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 header_bottom text-center">
        <!--<img src="{{asset('assets')}}/image/logo_white.png">-->
        </div>

    </div>

    <div class="row">
        <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-1 main_page">
            <div class="row main_page_row">
                <a href="{{url('admin/download-message')}}">
                    <div class="col-md-2 col-sm-2 col-2">
                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets')}}/image/user_creation.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="button_text_section">
                        <a href="{{url('admin/download-message')}}"  class="text-decoration-none"> <p class="text-center text-uppercase button_text">Downlaoad Message</p></a>
                        </div>

                    </div>
                </a>

                <a href="{{url('admin/error-message')}}">
                    <div class="col-md-2 col-sm-2 col-2">

                        <div class="shadow p-4 mb-2 main_page_button text-center">
                            <div class="image_section text-center">
                                <img src="{{asset('assets/image/new_order.png')}}" class="img-fluid">
                            </div>

                        </div>
                        <div class="button_text_section">
                        <a href="{{url('admin/error-message')}}"  class="text-decoration-none"> <p class="text-center text-uppercase button_text">Error Message</p></a>
                        </div>

                    </div>
                </a>

                <a href="{{url('admin/item_list')}}">
                    <div class="col-md-2 col-sm-2 col-2">

                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets/image/report.png')}}" class="img-fluid" width="100%" height="100%">
                            </div>

                        </div>
                        <div class="button_text_section">
                            <a href="{{url('admin/item_list')}}"  class="text-decoration-none"><p class="text-center text-uppercase button_text">Item List</p></a>
                        </div>

                    </div>
                </a>

                <a href="{{url('admin/route')}}">
                    <div class="col-md-2 col-sm-2 col-2">

                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets/image/report.png')}}" class="img-fluid" width="100%" height="100%">
                            </div>

                        </div>
                        <div class="button_text_section">
                            <a href="{{url('admin/route')}}" class="text-decoration-none"><p class="text-center text-uppercase button_text">Route</p></a>
                        </div>

                    </div>
                </a>

                

            </div>
            <div class="row main_page_row">
               

                <a href="{{url('admin/voucher-details')}}">
                    <div class="col-md-2 col-sm-2 col-2">
                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets')}}/image/user_creation.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="button_text_section">
                        <a  href="{{url('admin/voucher-details')}}" class="text-decoration-none"> <p class="text-center text-uppercase button_text">Voucer Details</p></a>
                        </div>

                    </div>
                </a>
                <a href="{{url('admin/voucher-head')}}">
                    <div class="col-md-2 col-sm-2 col-2">
                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets')}}/image/user_creation.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="button_text_section">
                        <a href="{{url('admin/voucher-head')}}" class="text-decoration-none"> <p class="text-center text-uppercase button_text">Voucer Head</p></a>
                        </div>

                    </div>
                </a>
                
                  <a href="{{url('admin/report_menu')}}">
                    <div class="col-md-2 col-sm-2 col-2">
                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets')}}/image/user_creation.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="button_text_section">
                        <a href="{{url('admin/report_menu')}}" class="text-decoration-none"> <p class="text-center text-uppercase button_text">Report</p></a>
                        </div>

                    </div>
                </a>
				
				 <a href="{{url('admin/route_with_number')}}">
                    <div class="col-md-2 col-sm-2 col-2">
                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets')}}/image/user_creation.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="button_text_section">
                        <a href="{{url('admin/route_with_number')}}" class="text-decoration-none"> <p class="text-center text-uppercase button_text">Route with Number</p></a>
                        </div>

                    </div>
                </a>
				
				 <a href="{{url('admin/response_log')}}">
                    <div class="col-md-2 col-sm-2 col-2">
                        <div class="shadow p-4 mb-2 main_page_button">
                            <div class="image_section text-center">
                                <img src="{{asset('assets')}}/image/user_creation.png" class="img-fluid">
                            </div>

                        </div>
                        <div class="button_text_section">
                        <a href="{{url('admin/response_log')}}" class="text-decoration-none"> <p class="text-center text-uppercase button_text">Response Log</p></a>
                        </div>

                    </div>
                </a>


              
               


            </div>



        </div>

    </div>
</div>
@endsection
