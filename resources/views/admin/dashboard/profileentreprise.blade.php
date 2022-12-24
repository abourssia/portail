@extends('layouts.adminmaster')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
  
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0"> Profile : {{ $collection -> enname }} </h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">  </h6>
                    <div class="row">
                    <table class="table table-borderless">
                   <tr>
                    <th><label for="name"> Appellation de l’entreprise  :   
                    </th>
                    <td>   {{$collection -> enname}}    </td>
                    </tr>
                    <tr>
                    <th><label for="name"> Site web :   
                    </th>
                    <td>   {{$collection -> website}}    </td>
                    </tr>
                    <tr>
                    <th>
                        <label for="name">  Adresse de l’entreprise :   
                    </th>
                    <td>   {!! html_entity_decode($collection -> address) !!}    </td>

                    </tr>
                    <tr>
                    <th>
                        <label for="name">  Description de l’entreprise :   
                    </th>
                    <td>   {!! html_entity_decode($collection -> desc) !!}    </td>

                    </tr>
                    <tr>   
                    <th><label for="name">  Forme juridique :   
                    </th>
                    <td>   {{$collection -> fjur}}    </td>

                    </tr>
                    <tr>
                    <th><label for="name">   Propriété de l’entreprise :   
                    </th>
                    <td>   {{$collection -> propentre}}    </td>

                    </tr>
                    <tr>
                    <th><label for="name">  Type d’entreprise  :   
                    </th>
                    <td>   {{$collection -> typeentreprise}}    </td>

                    </tr>
                    <tr>
                    <th><label for="name">    Domaine d’activité de l’entreprise  :   
                    </th>
                    <td>  {{$collection -> typeact}}    </td>

                    </tr>
                    <tr>
                    <th><label for="name">  Domaine d’activité de l’entreprise :   
                    </th>
                    <td>  {{$collection -> domact}}    </td>

                    </tr>
                    <tr>
                    <th><label for="name">  Secteur d’activités :   
                    </th>
                    <td>   {{$collection -> secact}}    </td>

                    </tr>
        
                    <th><label for="name">  Telephone :   
                    </th>
                    <td>   {{$collection -> tel}}    </td>

                    </tr>
                    <th><label for="name">  Problématiques :   
                    </th>
                    <td>   {{$collection -> problems}}    </td>

                    </tr>
                    <tr>
                    <th><label for="name">  Des remarques complémentaires  :   
                    </th>
                    <td>   {{$collection -> remarques}}    </td>

                    </tr>
                    <th><label for="name">  Action :   
                    </th>
                    <td>   
                    @if ($collection -> validated == 'Oui')

                            <div class="form-group">
                            <div title="invalider l'entreprise" class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input title="invalider l'entreprise" type="checkbox" class="custom-control-input"
                                    {{ ($collection->validated) ? 'checked' : ''}}
                                        onclick="changeUserValidated(event.target, {{ $collection->id }});
                                        ">
                                <label class="custom-control-label pointer"> 
                            </div>
                            </div>
                            @else 
                            <div class="form-group">
                            <div title="Valider l'entreprise " class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input  title="Valider l'entreprise " type="checkbox" class="custom-control-input"
                                    {{ ($collection->validated) ? '' : ''}}
                                        onclick="changeUserValidated(event.target, {{ $collection->id }});
                                        ">
                                <label class="custom-control-label pointer"> 
                            </div>
                            </div>

                    @endif
                    </td>

                    </tr>
                </table>


                   
                                                </div>
                        </div>

                       
                        </div>
                    </div><!-- /.container-fluid -->
                </div>
     </div>
    </div>
</div>
@endsection
