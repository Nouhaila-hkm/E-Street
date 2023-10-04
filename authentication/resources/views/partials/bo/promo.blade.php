@extends('layoutbo')

@section('content')
<div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Promotions</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Promotions</a></li>
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
                            <h3 class="box-title">Vos Promotion</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Ajouter une promotion</button>
                            <br>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Date début promo:</th>
                                            <th class="border-top-0">Date Fin Promo:</th>
                                            <th class="border-top-0">Prix Original:</th>
                                            <th class="border-top-0">Prix soldé:</th>
                                            <th class="border-top-0">Modifier</th>
                                            <th class="border-top-0">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($promotion as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->produitId }}</td>
                                            <td>{{ $value->dateDebut}}</td>
                                            <td>{{ $value->dateFin }}</td>
                                            <td>{{ $value->prixorg }}</td>
                                            <td>{{ $value->prixsold }}</td>
                                            <td><a href="{{ route('promotion.updateform', [$value->id]) }}" class="fa fa-pencil-alt" ></a></td>
                                            <td><a href="{{ route('promotion.deleted', [$value->id]) }}" class="fa fa-trash-alt" ></a></td>
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