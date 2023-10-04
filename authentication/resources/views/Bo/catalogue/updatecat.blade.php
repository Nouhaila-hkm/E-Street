@extends('layoutbo')

@section('content')


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Modification Catalogue <i>{{ $catalogue->nom }}</i></h4>
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
                             
                            <form action="{{ route('catalogue.updated', [$catalogue->id]) }}" method="POST" class="register-form" id="register-form">
                            @csrf    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Magasin</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="magasinId" value="{{ $magasinName }}" disabled
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nom</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nom" value="{{ $catalogue->nom }}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Reference</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="reference" value="{{ $catalogue->reference }}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Type</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  name="type" value="{{ $catalogue->type }}"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Modifier</button>
                                            <a href="{{ route('cataloguePage') }}" class="btn btn-primary">Retour</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

@endsection