@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Modification Fournisseur</h2>
            
        </div>
        <div class="body">
        <form action="{{route('fournisseur.update',[$fournisseur])}}" method="POST">

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
                                <input type="text" required name="societe_frs" value="{{$fournisseur->societe_frs}}" class="form-control">
                                <label class="form-label">Société</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" required name="adresse_frs" value="{{$fournisseur->adresse_frs}}" class="form-control">
                                <label class="form-label">Adresse Société</label>
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" required name="nom" value="{{$fournisseur->nom}}" class="form-control">
                                        <label class="form-label">Nom</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required name="prenom"  value="{{$fournisseur->prenom}}" class="form-control">
                                        <label class="form-label">Prénom</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" required name="email"  value="{{$fournisseur->email}}" class="form-control">
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" required name="contact"  value="{{$fournisseur->contact}}" class="form-control">
                                        <label class="form-label">Contact</label>
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
