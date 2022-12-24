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
                                <li class="breadcrumb-item active">Users</li>

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
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Role</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach ($user as $user)

             
                  <tr>
                    <td>{{ $user -> name}} </td>
                    <td>{{ $user -> pname}} </td>
                    <td>{{ $user -> username}} </td>
                    <td>{{ $user -> email}} </td>            
                    @if($user -> role_as== '2')
                    <td><span class="badge badge-danger">Chercheur</span></td>
                    @elseif($user -> role_as== '0')
                    <td><span class="badge badge-warning">Partenaire socio-eco</span></td>
                    @else 
                    <td><span class="badge badge-success">Adminisatrateur</span></td>

                    @endif

                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Role</th>

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
        <!-- /.row -->




                    </div><!-- /.container-fluid -->
                </div>
     </div>
    </div>
</div>
@endsection
