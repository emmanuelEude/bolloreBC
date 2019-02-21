@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Nouveau Fournisseur</h2>
            
        </div>
        <div class="body">
        <form action="{{route('fournisseur.store')}}" method="POST">

                <div class="row clearfix">
                       
                        {{ csrf_field() }}
                       <!-- 
                    <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Code</label>
                                </div>
                            </div>
                        </div>
                    --> 
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="nom" class="form-control">
                                <label class="form-label">Nom </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="prenom" class="form-control">
                                <label class="form-label">Prénom</label>
                            </div>
                        </div>
                    </div>
                      
                      <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control">
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="fonction" class="form-control">
                                        <label class="form-label">Fonction</label>
                                    </div>
                                </div>
                        </div>
                       
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="service" class="form-control">
                                        <label class="form-label">Service</label>
                                    </div>
                                </div>
                        </div>

                       
                </div>
                <div class="row text-center">
                        <button type="submit" class="btn btn-success">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
