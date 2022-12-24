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
                                <li class="breadcrumb-item active">Responsables</li>

                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                       
        <!-- /.row -->
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Les utilisateurs </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="users" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> Nom</th>
                    <th> Prénom</th>
                    <th> Poste de responsable</th>
                    <th> Email </th>
                    <th> Telephone</th>
                    <th> Fax</th>
                    <th> Entreprise</th>
                    <th> Pref </th>
                    <th> Publier </th>
                    <th> Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach ($responsable as $responsable)

             
                  <tr>
                    <td>{{ $responsable -> fname}}</td>
                    <td>{{ $responsable -> lname}}</td>
                    <td>{{ $responsable -> posteres}}</td>
                    <td>{{ $responsable -> email}}</td>
                    <td>{{ $responsable -> tel}}</td>
                    <td>{{ $responsable -> fax}}</td>
                    <td>{{ $responsable -> entreprise}}</td>
                    <td>{{ $responsable -> status}}</td>
                    <td></td>
                    <td></td>


                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th> Nom</th>
                    <th> Prénom</th>
                    <th> Poste de responsable</th>
                    <th> Email </th>
                    <th> Telephone</th>
                    <th> Fax</th>
                    <th> Entreprise</th>
                    <th> Pref </th>
                    <th> Publier </th>
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
