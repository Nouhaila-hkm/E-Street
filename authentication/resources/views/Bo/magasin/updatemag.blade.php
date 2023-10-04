@extends('layoutbo')

@section('content')


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <h4 class="page-title">Modification Magasin <i>{{ $magasin->nom }}</i></h4>
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
                             
                            <form action="{{ route('magasin.updated', [$magasin->id]) }}" method="POST" class="register-form" id="register-form">
                            @csrf    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nom</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nom" value="{{ $magasin->nom }}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Adresse</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="adresse" value="{{ $magasin->adresse }}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email"  name="email" value="{{ $magasin->email }}"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Num Tel</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="tel" value="{{ $magasin->tel }}" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Modifier</button>
                                            <a href="{{ route('magasinPage') }}" class="btn btn-primary">Retour</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

@endsection