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
                                <h1 class="m-0">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">entreprisess</li>

                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                       
        <!-- /.row -->

        @if (session('txt')) 
                <div class="alert alert-success"> {{(session('txt'))}} </div>
            @endif

        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les LABORATOIRES </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="users" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Code</th>
                    <th>Intitulé</th>
                    <th>Acronyme</th>
                    <th>Etablissement</th>
                    <th>Directeur</th>
                    <th> Contact </th>
                  
                    <th> Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach ($laboratoires as $laboratoires)
                  <tr>
                    <td>{{ $laboratoires -> code}} </td>
                    <td>{{ $laboratoires -> intitule}} </td>
                    <td>{{ $laboratoires -> acronyme}} </td>
                    <td>{{ $laboratoires -> etablissement}} </td>            
                    <td>{{ $laboratoires -> directeur}} </td>            
                    <td> 
                        <ul>
                    <li>Email :{{ $laboratoires -> emaildirec}} </li>
                    <li>Numéro: {{ $laboratoires -> numdirec}}</li>
                    </ul>             
                     </td> 
                    <td>
                 <a href="{{ route('laboprofile',$laboratoires->id)}}" target="_blank"><i class="far fa-copy"></i></a>
                  
                    
                  </td>            


                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Code</th>
                    <th>Intitulé</th>
                    <th>Acronyme</th>
                    <th>Etablissement</th>
                    <th>Directeur</th>
                    <th> Contact </th>
               
                    <th> Action </th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
                    </div><!-- /.container-fluid -->
                </div>
     </div>
    </div>
</div>
@endsection
