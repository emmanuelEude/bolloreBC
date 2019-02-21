@extends('layouts.base_print')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="body">
            
            <div class="container">
                <div class='row' >
                <div class="col-md-3">
                    <img src="{{asset('images/bollore/logo.jpg')}}"/>
                </div>
                <div class='col-md-9 container-fluid' >
                        
                            <table class='table ' width="50%"> 
                                <tr class="">
                                    
                                    <td class="text-center " >Document N°BTL-BEN-ACH 0001</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>BON DE COMMANDE</b></td>
                                </tr>
                                <tr>
                                    <td class="text-center"> Rév N°02 du 05 sepembre 2016</td>
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
                                <h5 class='col-sm-4 '>N° du bon :</h5>
                                <h5 class='col-sm-4'>P/c : </h5>
                                <h5 class='col-sm-4'>Société fournisseur :</h5>
                            </td>
                        </tr>
                    </table>   
                    <div class='row'>
                        <table class='table' width="50%">
                        <tr>
                            <td>
                                <h5 for="dateBon"class='col-sm-4'>Date du bon :{{ \Carbon\Carbon::now()->format('d/m/Y') }} </h5> 
                                <h5 for="numPro" class='col-sm-4'>N° de pro forma : </h5>
                                <h5 for="datePro" class='col-sm-4'>Date de la pro forma: </h5>
                            </td>
                        </tr>
                        </table>   
                    </div>
                </div>
            </div>
 
            <table class='table table-bordered' width="50%">
                <h3 class='text-center' class="card-inside-title">Articles</h3>
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
                        <tr>
                        <td> 02</td>
                        <td> clavier</td>
                        <td> dell01</td>
                        <td> 6000</td>
                        <td> 12000</td>
                        <td>dghnj </td>
                        </tr>
                        
                        <tr>
                        <td> 05</td>
                        <td> ecran</td>
                        <td> dell01</td>
                        <td> 25000</td>
                        <td> 50000</td>
                        <td>rtzkfmchg </td>
                        </tr>
                        <tr>
                        <td colspan="2"> Préciser HT ou TTC</td>
                        <td colspan="4"> </td>
                        </tr>
                        <tr>
                        <td colspan="2">Signature</td>
                        <td colspan="4"> </td>
                        </tr>
                        <tr>
                        <td colspan="2"> </td>
                        <td colspan="4" align="right"> Fournisseur</td>
                        </tr>
                </tbody>
            </table>
                    <br/>
            <table class='table' width="50%">
                <tr>
                    <td>
                        SIEGE SOCIAL: Route du Collège de L'Union Z.I.Akpakpa COTONOU 01 BP 433
                        </b> Tel:(229)21 33 16 11/21 33 11 78 - Fax:(229)21 33 06 11<br/>
                        Base Logistique Port:(229)21 31 39 70 - Fax:(229)21 31 59 09 <br/>
                        INSAE N°2957123085020<b>.</b>R.C.N°23487-B <b>COTONOU</b> - IFU N°3 200 700 066 416<br/>
                        S.A avec Conseild'Administration au Capital de 2.461.540.000F CFA
                    <td>
                <tr>    
            </table>
            <table class='table' width="50%">
                <tr>
                    <td>
                        <div class=''>
                            <div class='row' >
                            <ul class="list-unstyled">

                            
                                <li><h5 class='col-sm-4 '>xxxxx</h5></li>
                                <li><h5 class='col-sm-4'>Bon de commande</h5></li>
                                <li><h5 class='col-sm-4'>xxxxx</h5></li>
                            </ul>
                            </div>
                        </div>
                    <td>
                <tr> 
            </table>             
        </div>
    </div>
    <div class="row text-center hidden-print">
        <button type="submit" class="btn btn-success">Imprimer</button>
        <button type="submit" class="btn btn-success">Fermer</button>
    </div>
</div>
@endsection
