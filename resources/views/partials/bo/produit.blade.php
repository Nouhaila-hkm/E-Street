@extends('layoutbo')

@section('content')
<div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Produits</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Produits</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a>
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
                            <h3 class="box-title">Vos Produits</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <a href="{{ route('produit.creation', [$catalogue]) }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Ajouter un catalogue</a>
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
                                            <th class="border-top-0">Id Catalogue</th>
                                            <th class="border-top-0">Nom</th>
                                            <th class="border-top-0">Reference</th>
                                            <th class="border-top-0">description</th>
                                            <th class="border-top-0">photo</th>
                                            <th class="border-top-0">date du poste</th>
                                            <th class="border-top-0">Modifier</th>
                                            <th class="border-top-0">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produit as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->catalogueId }}</td>
                                            <td>{{ $value->nomProd }}</td>
                                            <td>{{ $value->reference }}</td>
                                            <td>{{ $value->description }}</td>
                                            <td>{{ $value->photo }}</td>
                                            <td>{{ $value->datepost }}</td>
                                            <td><a href="{{ route('produit.updateform', [$value->id]) }}" class="fa fa-pencil-alt" ></a></td>
                                            <td><a href="{{ route('produit.deleted', [$value->id]) }}" class="fa fa-trash-alt" ></a></td>
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