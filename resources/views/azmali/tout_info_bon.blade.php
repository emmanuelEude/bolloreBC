@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
    <div class="body">
            <div class='' class='table' width="50%">
                <table class='table ' > 
                    <tr>
                        <td rowspan="4" a> logo</td>
                        <td a>Document N°BTL-BEN-ACH 0001</td>
                    </tr>
                    <tr>
                        <td a> BON DE COMMANDE</td>
                    </tr>
                    <tr>
                        <td a> Rév N°02 du 05 sepembre 2016</td>
                    </tr>
                    <tr>
                        <td a> Adresse</td>
                    </tr>
                </table>
            </div>
            <br/>

            <div class=''>
            <h4 class="card-inside-title">Infos liées au Bon de commande</h4> 
                    <div class='row'>
                        <h5 class='col-sm-3 '>N° du bon :</h5>
                        <h5 class='col-sm-3'>P/c : </h5>
                        <h5 class='col-sm-3'>Devise :</h5>
                        <h5 class='col-sm-3'  >Date du bon :{{ \Carbon\Carbon::now()->format('d/m/Y') }} </h5> 
                    </div>
                
            <br/><br/>
            <h4 class="card-inside-title">Infos liées au Fournisseur</h4> 
                <div class='row'>
                    <h5 class='col-sm-3 '>Nom :</h5>
                    <h5 class='col-sm-3'>Prénom : </h5>
                    <h5 class='col-sm-3'>Email :</h5>
                    <h5 class='col-sm-3'  >Contact :</h5> 
                </div>
            <br/><br/>
            <h4 class="card-inside-title">Infos liées à la société du Fournisseur</h4> 
                <div class='row'>
                    <h5 class='col-sm-4' >Nom de la société : </h5> 
                    <h5 class='col-sm-4'>Adresse de la société: </h5>
                    <h5 class='col-sm-4'>Date de la pro forma: </h5>
                </div>
            <br/><br/>
            <h4 class="card-inside-title">Infos liées à la facture proforma</h4> 
                <div class='row'>
                    <h5 class='col-sm-4' >Num facture : </h5> 
                    <h5 class='col-sm-4'>Date émission : </h5>
                    <h5 class='col-sm-4'>Date validation: </h5>
                </div>



            <table class='table' width="50%"><br/>
            <h4 class="card-inside-title">Article</h3><br/>
            <thead>
            <tr>
                    <td> Qté</td>
                    <td> Désignation</td>
                    <td> Référence</td>
                    <td> P.U.</td>
                    <td> P.T.</td>
                    <td> Imputation</td>
                </tr>
            </thead>
            <tbody>    
                    <tr>
                    <td> 02</td>
                    <td> clavier</td>
                    <td> dell01</td>
                    <td> 6000</td>
                    <td> 12000</td>
                    <td> </td>
                    </tr>
                    
                    <tr>
                    <td> 05</td>
                    <td> ecran</td>
                    <td> dell01</td>
                    <td> 25000</td>
                    <td> 50000</td>
                    <td> </td>
                    </tr>
                    
                    <tr>
                    <td colspan="2"> Préciser HT ou TTC</td>
                    <td colspan="4"> </td>
                    </tr>
                    
        </table>
            </div>
                    <br/><br/>
                <table class='table' width="50%"><br/>
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

                    <br/>   
                <table class='table' width="50%">
                    <tr>
                        <td>
                            <h5 class='col-sm-4 '>xxxxx</h5>
                            <h5 class='col-sm-4'>Bon de commande</h5>
                            <h5 class='col-sm-4'>xxxxx</h5>
                        </td>
                    </tr>
                </table>       
    </div>
</div>
<div class="row text-center">
    <!--<button type="submit" class="btn btn-success">Imprimer</button>-->
    <button type="submit" class="btn btn-success">Fermer</button>
</div>
@endsection
