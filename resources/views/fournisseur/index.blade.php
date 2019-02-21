@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Fournisseurs</h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                <a class="btn btn-primary" href="{{route('fournisseur.create')}}">

                        <i class="fa fa-plus"></i>
                        Nouveau fournisseur
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
                                        <th>Societe</th>
                                        <th class="text-center">Adresse Societe</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Prénom</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>                                        
                                <tbody>         
                                    @foreach ($fournsseurs as $fournsseur)
                                    <tr role="row" class="even">
                                            <td class="sorting_1">{{$fournsseur->societe_frs}}</td>
                                            <td class="sorting_1">{{$fournsseur->adresse_frs}}</td>
                                             <td class="sorting_1">{{$fournsseur->nom}}</td>
                                        
                                            <td class="text-center">{{$fournsseur->prenom}}</td>
                                            <td class="text-center">{{$fournsseur->email}}</td>
                                            <td class="text-center">{{$fournsseur->contact}}</td>
                                            <td class="text-center">
                                                <div>
                                                <a href="{{route('fournisseur.edit',$fournsseur)}}" class="btn btn-warning">Modifer</a>
                                                    <a href="{{route('fournisseur.delete',$fournsseur)}}" class="btn btn-danger">Supprimer</a>
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
