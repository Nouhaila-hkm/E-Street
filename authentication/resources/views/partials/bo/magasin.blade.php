@extends('layoutbo')

@section('content')
<div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Magasins</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">se deconnecter
                                </a>
                        </div>
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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Vos Magasins</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <a href="{{ route('magasin.creation', [$manager]) }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Ajouter un magasin</a>
                            <br>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            @if ($message = Session::get('danger'))
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nom</th>
                                            <th class="border-top-0">Adresse</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Telephone</th>
                                            <th class="border-top-0">Modifier</th>
                                            <th class="border-top-0">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($magasin as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->nom }}</td>
                                            <td>{{ $value->adresse }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>{{ $value->tel }}</td>
                                            <td><a href="{{ route('magasin.updateform', [$value->id]) }}" class="fa fa-pencil-alt" ></a></td>
                                            <td><a href="{{ route('magasin.deleted', [$value->id]) }}" class="fa fa-trash-alt" ></a></td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

@endsection