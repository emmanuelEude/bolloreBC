@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Sociétés</h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                <a class="btn btn-primary" href="{{route('societe.create')}}">

                        <i class="fa fa-plus"></i>
                        Nouvelle Société
                    </a>
                   
                </li>
            </ul>
        </div>
        <div class="body">
                <div class="row">
                <div class="table-responsive">
                       
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Adresse</th>
                                        <th class="text-center">Actions</th>
                                        
                                    </tr>
                                    </thead>                                        
                                <tbody>      
                                    @foreach ($societes as $societe)
                                    <tr role="row" class="even">
                                    <td  class="sorting_1"><img src="{{asset('uploads/logo')}}/{{$societe->logo}}" alt="" style="height:80px;width:90px"></td>
                                            <td class="sorting_1">{{$societe->nom}}</td>
                                            <td class="text-center">{{$societe->adresse}}</td>
                                            <td class="text-center">
                                                <div>
                                                <a href="{{route('societe.edit',$societe)}}" class="btn btn-warning">Modifer</a>
                                                    <a href="{{route('societe.delete',$societe)}}"  class="btn btn-danger">Supprimer</a>
                                                </div>
                                            </td>
                                    </tr>
                                    @endforeach                          
                                    
                                
                                </tbody>
                        </table>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
