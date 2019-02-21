@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Modification Société</h2>
            
        </div>
        <div class="body">
        <form action="{{route('societe.update',$societe)}}" method="POST" enctype="multipart/form-data">

                <div class="row clearfix">
                       

                        {{ csrf_field() }}
                        
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="file" name="logo"    class="form-control">
                                        <label class="form-label">Logo</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" name="nom" required value="{{$societe->nom}}"  class="form-control">
                                        <label class="form-label">Nom</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required name="adresse" value="{{$societe->adresse}}" class="form-control">
                                        <label class="form-label">Adresse</label>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea  name="ref_doc" required class="form-control">{{$societe->ref_doc}}</textarea>
                                    <label class="form-label">Reference document</label>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea  name="ref_revision" class="form-control">{{$societe->ref_revision}}</textarea>
                                <label class="form-label">Reference Revision</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line"> 
                                <textarea  name="ref_societe" required class="form-control">{{$societe->ref_societe}}</textarea>
                                <label class="form-label">Reference Societe</label>
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
