@extends('layoutbo')

@section('content')


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Ajouter Catalogue</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        <div class="card">
                            <div class="card-body">
                             
                            <a href="{{ route('magasin.creation', [$manager]) }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Ajouter un magasin</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

@endsection