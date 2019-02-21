@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Profile</h2>
            
        </div>
        <div class="body">
        <form action="{{route('profil.update')}}" method="POST">
            {{ csrf_field() }}
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                            <input type="text" name="nom" value="{{auth()->user()->nom}}" class="form-control">
                                <label class="form-label">Nom </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="prenom" value="{{auth()->user()->prenom}}" class="form-control">
                                <label class="form-label">Prénoms</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control">
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                        </div>

                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="contact" value="{{auth()->user()->contact}}" class="form-control">
                                        <label class="form-label">Contact</label>
                                    </div>
                                </div>
                        </div>
                        
                       <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="service" value="{{auth()->user()->service}}" class="form-control">
                                        <label class="form-label">Nom de service</label>
                                    </div>
                                </div>
                        </div>

                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="fonction" value="{{auth()->user()->fonction}}" class="form-control">
                                        <label class="form-label">Fonction</label>
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