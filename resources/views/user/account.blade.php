@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Mon Compte</h2>
            
        </div>
        <div class="body">
        <form action="" method="POST">
                <div class="row clearfix">
                   
                <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control" readonly>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                </div>

                <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="_password" class="form-control">
                                        <label class="form-label">Ancien Mot de passe</label>
                                    </div>
                                </div>
                </div>

                <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="new_password" class="form-control">
                                        <label class="form-label">Nouveau mot de passe</label>
                                    </div>
                                </div>
                </div>

                    <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="_password" class="form-control">
                                        <label class="form-label">Confirmer votre nouveau mot de passe</label>
                                    </div>
                                </div>
                    </div>

                </div>
                <div class="row text-center">
                        <button type="submit" disabled title="inactif pour le moment" class="btn btn-success">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection