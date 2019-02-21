@extends('layouts.base_admin')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Utilisateur</h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                <a class="btn btn-primary" href="{{route('user.create')}}">

                        <i class="fa fa-plus"></i>
                        Nouvel utilisateur
                    </a>
                   
                </li>
            </ul>
        </div>
        <div class="body">
                <div class="row">
                <div class="table-responsive">
    
                <table class='table table-bordered' width="50%">
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
                        
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center"> {{$user->nom}}</td>
                            <td class="text-center"> {{$user->prenom}}</td>
                            <td class="text-center"> {{$user->email}}</td>
                            <td class="text-center"> {{$user->contact}}</td>
                            <td class="text-center"> {{$user->service}}</td>
                            <td class="text-center"> 
                                    <div>
                                        <a href="" disabled class="btn btn-info"><i class="fa fa-info"></i></a>
                                        <a href="" disabled class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="" disabled class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                    </div>
                            </td>
                            
                        </tr>
                        @endforeach
                            
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
    
</div>
@endsection
