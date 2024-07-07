@extends('back.layouts.master')
@section('title', 'Request Contact Form')

@section('head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css" />
@endsection

@section('master')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Request Contact Form Show</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Show</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="blog-table-header card-header">
                            <h4 class="card-title mb-0 flex-grow-1">Request Contact Form Show</h4>
                        </div><!-- end card header -->

                        <div class="card-body table-responsive">
                            <div class="">
                                <strong>Name:</strong> {{ $requestContact->name }}
                            </div>
                            <br>
                            <div class="">
                                <strong>Email:</strong> {{ $requestContact->email }}
                            </div>
                            <br>
                            <div class="">
                                <strong>Subject:</strong> {{ $requestContact->subject }}
                            </div>
                            <br>
                            <div class="">
                                <strong>Phone:</strong> {{ $requestContact->phone }}
                            </div>
                            <br>
                            <div class="">
                                <strong>Message:</strong> {{ $requestContact->message }}
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('footer')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                order: [
                    [0, "asc"]
                ],
            });
        });
    </script>
@endsection
