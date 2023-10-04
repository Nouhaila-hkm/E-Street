@extends('layoutbo')

@section('content')


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Ajouter Promoltion</h4>
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
                             
                            <form action="{{ route('promotion.add') }}" method="POST" class="register-form" id="register-form">
                            @csrf    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Id produit</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select class="form-control  p-0 border-0" name="catalogueId" >
                                            <option value="0"> - </option>
                                            @foreach($produit as $value)
                                                <option value="{{ $value->id }}">{{ $value->nomProd }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Date Debut</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="nomProd" value="{{ $promotion->dateDebut }}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Date Fin</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="reference" value="{{ $promotion->dateFin }}"
                                                class="form-control p-0 border-0"> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Prix Original</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  name="description" value="{{ $promotion->prixorg }}"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Prix Solde</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  name="photo" value="{{ $promotion->prixsold }}"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Ajouter</button>
                                            <a href="{{ route('promotionPage') }}" class="btn btn-primary">Retour</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

@endsection