@extends('layouts.base_print')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="body">
            
            <div class="container">
                <div class='row' >
                <div class="col-md-3 col-sm-3 col-lg-3">
                    <img src="{{asset('uploads/logo')}}/{{$bon->societe->logo}}"   style="height:100px;width:110px" alt="" >
                </div>
                <div class='col-md-9 col-sm-9 col-lg-9 container-fluid' >
                        
                            <table class='table ' width="50%"> 
                                <tr class="">
                                    
                                    <td class="text-center " >{{$bon->societe->ref_doc}}</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>BON DE COMMANDE</b></td>
                                </tr>
                                <tr>
                                    <td class="text-center"> {{$bon->societe->ref_revision}}</td>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>


            <div class=''>

                <div class='row'>
                    <table class='table' width="50%">
                        <tr>
                            <td>
                            <h5 class='col-sm-3 '>N° du bon : {{$bon->numero}}</h5>
                            <h5 class='col-sm-3 '>Devise : {{$bon->devise}}</h5>
                                <h5 class='col-sm-3'>P/c :  {{$bon->pour_compte}}</h5>
                                <h5 class='col-sm-3'>Société fournisseur :  {{$bon->fournisseur->societe_frs}}</h5>
                            </td>
                        </tr>
                    </table>   
                    <div class='row'>
                        <table class='table' width="50%">
                        <tr>
                            <td>
                                <h5 for="dateBon"class='col-sm-4'>Date du bon : {{date_format(new \Datetime($bon->created_at),'d-m-Y') }} </h5> 
                                <h5 for="numPro" class='col-sm-4'>N° de la facture pro forma : {{$bon->facture->numero}} </h5>
                                <h5 for="datePro" class='col-sm-4'>Date de la facture pro forma: {{date_format(new \Datetime($bon->facture->date_validation),'d-m-Y') }} </h5>
                            </td>
                        </tr>
                        </table>   
                    </div>
                </div>
            </div>
            <h3 class='text-center' class="card-inside-title">Articles</h3>
            <table class='table table-bordered' width="50%">
               
                <thead>
                    <tr>
                        <th> Qté</th>
                        <th> Désignation</th>
                        <th> Référence</th>
                        <th> P.U.</th>
                        <th> P.T.</th>
                        <th> Imputation</th>
                    </tr>
                </thead>
                <tbody>    
                    
                        
                      @foreach ($bon->articles as $item)
                        <tr>
                        <td> {{$item->qte}}</td>
                            <td> {{$item->libelle}}</td>
                            <td> {{$item->ref}}</td>
                            <td> {{$item->pu}}</td>
                            <td> {{$item->qte*$item->pu}}</td>
                            <td> </td>
                            </tr>
                      @endforeach
                      
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"> Préciser HT ou TTC</td>
                        <td colspan="4"> <strong> Net à payer : {{net_a_payer($bon)}} ({{$bon->precision}})</strong> </td>
                        </tr>
                        <tr>
                        <td colspan="2">Signature</td>
                        <td colspan="4"> </td>
                        </tr>
                        <tr>
                        <td colspan="2"> </td>
                        <td colspan="4" > Fournisseur</td>
                    </tr>
                </tfoot>
            </table>
                    <br/>
            <table class='table' width="50%">
                <tr>
                    <td>
                        {{$bon->societe->ref_societe}}
                    <td>
                <tr>    
            </table>
            <table class='table' width="50%">
                <tr>
                    <td>
                        <div class=''>
                            <div class='row' >
                            <ul class="list-unstyled">

                            
                                <li><h5 class='col-sm-4 '>{{$bon->societe->ref_doc}}</h5></li>
                                <li><h5 class='col-sm-4'>Bon de commande</h5></li>
                                <li><h5 class='col-sm-4'> {{$bon->societe->ref_revision}}</h5></li>
                            </ul>
                            </div>
                        </div>
                    <td>
                <tr> 
            </table>             
        </div>
    </div>
    <div class="row text-center hidden-print" style="margin-bottom: 3vh">
        <button type="submit" onclick="print()" class="btn btn-success">Imprimer</button>
    <a href="{{route('bon.index')}}"  class="btn btn-success">Fermer</a>
    </div>
</div>
@endsection
