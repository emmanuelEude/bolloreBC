@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Bons de commandes</h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a class="btn btn-primary" href="{{route('bon.create')}}">

                        <i class="fa fa-plus"></i>
                        Nouveau bon
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
                                        <th>N° </th>
                                        <th class="text-center">Société</th>
                                        <th class="text-center">Fournisseur</th>
                                        <th class="text-center">N° Facture</th>
                                        <th class="text-center">Net à payer (devise)</th>
                                        <th class="text-center">Créer le</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>                                        
                                <tbody>                                
                                    @foreach ($bons as $bon)
                                    <tr role="row" class="even">
                                    <td class="sorting_1">{{$bon->numero}}</td>
                                            <td class="text-center">{{$bon->societe->nom}}</td>
                                            <td class="text-center">{{$bon->fournisseur->societe_frs}}</td>
                                            <td class="text-center">{{$bon->facture->numero}}</td>
                                            <td class="text-center">{{net_a_payer($bon)}} ({{$bon->devise}})</td>
                                            <td class="text-center">{{date_format(new \Datetime($bon->created_at),'d-m-Y') }}</td>
                                            <td class="text-center">
                                                <div>
                                                    <a href="{{route('bon.consulter',$bon)}}" class="btn btn-info"><i class="fa fa-info"></i></a>
                                                    <a disabled href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('bon.remove',$bon)}}" class="btn btn-danger"><i class="fa fa-remove"></i></a>
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
