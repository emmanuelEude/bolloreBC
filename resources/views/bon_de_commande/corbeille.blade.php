@extends('layouts.base_admin')
@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Corbeille des bons de commande</h2>
           
        </div>
        <div class="body">
                <div class="row">
                <div class="table-responsive">
                       
                <table class='table table-bordered' width="50%">
                    <thead>
                         <tr>
                            <td class="text-center"> N° du Bon</td>
                            <td class="text-center"> Société</td>
                            <td class="text-center"> Fournisseur</td>
                            <td class="text-center"> N° de la facture</td>
                            <td class="text-center"> Net à payer (devise)</td>
                            <td class="text-center"> Créé le</td>
                            <td class="text-center"> supprimé le</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>    
                        
                            @foreach ($bons as $bon)
                                    <tr>
                                    <td class="text-center"> {{$bon->numero}}</td>
                                            <td class="text-center"> {{$bon->societe->nom}}</td>
                                            <td class="text-center"> {{$bon->fournisseur->societe_frs}}</td>
                                            <td class="text-center"> {{$bon->facture->numero}}</td>
                                            <td class="text-center"> {{net_a_payer($bon)}} ({{$bon->devise}})</td>
                                            <td class="text-center"> {{date_format(new \Datetime($bon->created_at),"d-m-Y")}}</td>
                                            <td class="text-center"> {{date_format(new \Datetime($bon->date_suppresion),"d-m-Y H:i")}}</td>
                                             <td class="text-center">
                                                    <a href="{{route('bon.consulter',$bon)}}" class="btn btn-info"><i class="fa fa-info"></i></a>     
                                            </td>   
                                            
                                    </tr>
                            @endforeach
                            
                       <!-- <tr>
                            <td> gg</td>
                            <td> tttttt</td>
                            <td> fffffff32</td>
                            <td> 95002014</td>
                            <td> service info</td>
                            <td> </td>
                            <td> </td>
                            <td class="text-center">
                                                <div>
                                                    <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                                                    <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                                </div>
                            </td>-->

                        </tr>
                    </tbody>
                </table>
                                   
            </div>
        </div>
   
</div>
@endsection
