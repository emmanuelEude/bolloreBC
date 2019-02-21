@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="body">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Liste des utilisateurs</b></div>
                <div class="panel-body">
    
                <table class='table' width="50%">
                    <thead>
                         <tr>
                            <td class="text-center"> Nom</td>
                            <td class="text-center"> Prénoms</td>
                            <td class="text-center"> E-mail</td>
                            <td class="text-center"> Contact</td>
                            <td class="text-center"> Nom de Service</td>
                            <td class="text-center"> Actions</td>
                        </tr>
                    </thead>
                    <tbody>    
                        <tr>
                            <td class="text-center"> Agossou</td>
                            <td class="text-center"> Liverien</td>
                            <td class="text-center"> agoss@hotmail.com</td>
                            <td class="text-center"> 60003025</td>
                            <td class="text-center"> Service achat</td>
                            <td class="text-center"> 
                                                <div>
                                                    <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                                                    <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                                </div>
                            </td>
                            
                        </tr>
                            
                        <!--<tr>
                            <td> gg</td>
                            <td> tttttt</td>
                            <td> fffffff32@1.com</td>
                            <td> 95002014</td>
                            <td> service info</td>
                            <td >
                                                <div>
                                                    <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                                                    <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                                </div>
                            </td>
                        </tr>-->
                    </tbody>
                </table>
                                   
            </div>
        </div>
    <div class="row text-center">
        <button type="submit" class="btn btn-success">Fermer</button>
    </div>
</div>
@endsection
