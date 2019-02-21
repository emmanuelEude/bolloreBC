@extends('layouts.base')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>Nouveau bon de commande</h2>
            
        </div>
        <div class="body">
        <form action="{{route('bon.store')}}" method="POST">
                {{ csrf_field() }}
                        <h2 class="card-inside-title">Infos générales</h2>
                <div class="row clearfix">
                       

                        <div class="col-sm-6">
                                <select class="form-control show-tick" name="societe" required>
                                        <option value="">-- Selectionnez une société --</option>
                                        @foreach ($societes as $item)
                                        <option value="{{$item->id}}">{{$item->nom}}<option>
                                       @endforeach
                                    </select>

                        </div>
                      
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" required name="pc">
                                        <label class="form-label">Pour compte</label>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required class="form-control" name="devise">
                                        <label class="form-label">Devise</label>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select class="form-control show-tick" required name="precision">
                                        <option value="">-- Preciser --</option>
                                        <option >HT</option>
                                        <option >TTC</option>
                                       
                                    </select>
                                </div>
                            </div>
                    </div>
                       
                </div>
                <h2 class="card-inside-title">Infos fournisseurs</h2>
                <div class="row clearfix">
                       

                        <div class="col-sm-6">
                                <select class="form-control show-tick" required name="fournisseur">
                                        <option value="">-- Selectionnez un fournisseur --</option>
                                        @foreach ($fournisseurs as $item)
                                         <option value="{{$item->id}}">{{$item->societe_frs}}<option>
                                        @endforeach
                                    </select>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" required class="form-control" name="num_facture">
                                        <label class="form-label">N° Facture</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" required class="form-control" name="date_emission">
                                        <label class="form-label">Date emission</label>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" required class="form-control" name="date_validation">
                                        <label class="form-label">Date validation</label>
                                    </div>
                                </div>
                        </div>
                      
                       
                </div>
                <h2 class="card-inside-title">Articles</h2>
                <input type="hidden" value="1" name="size" id="size">
                <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                    <tr>
                                            <th>Qte</th>
                                            <th>Ref</th>
                                            <th>Designation</th>
                                            <th>PU</th>
                                        </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="qte_1">
                                    </td>
                                    <td>
                                            <input type="text" class="form-control" name="ref_1">
                                    </td>
                                    <td>
                                            <input type="text" class="form-control" name="lib_1">
                                    </td>
                                    <td>
                                            <input type="text" class="form-control" name="pu_1">
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3"></td>
                                   
                                    <td>
                                            <button type="button" id="add_row" class="btn btn-info">Ajouter une ligne</button>
                                        </td>
                                </tr>
                            </tfoot>
                        </table>
                </div>
                <div class="row text-center">
                        <button type="submit" class="btn btn-success">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <script>
        var size=1;
        $('#add_row').click(function(){
            size++;
                $('#tbody').append('<tr>'+
                                    '<td>'+
                                        '<input type="text" class="form-control" name="qte_'+size+'">'+
                                   ' </td>'+
                                    '<td>'+
                                            '<input type="text" class="form-control" name="ref_'+size+'">'+
                                    '</td>'+
                                   ' <td>'+
                                           ' <input type="text" class="form-control" name="lib_'+size+'">'+
                                    '</td>'+
                                   ' <td>'+
                                           ' <input type="text" class="form-control" name="pu_'+size+'">'+
                                    '</td>'+
                                '</tr>');
                       $('#size').val(size);         
        });
       /* $('#remove_row').click(function(){
            $('table #tbody:last-child',this).remove();
            size--;
            $('#size').val(size);    
        })*/
    </script>   
@endpush
