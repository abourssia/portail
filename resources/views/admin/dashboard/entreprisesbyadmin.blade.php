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
                <h3 class="card-title">Les ENTREPRISES </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="users" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Appelation</th>
                    <th>Website</th>
                    <th>Adresse</th>
                    <th>Domaine activité</th>
                    <th>Secteur activité</th>
                    <th>Utilisateur</th>
                    <th> Validée </th>
                    <th> Publier </th>
                    <th> Action </th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach ($entreprises as $entreprises)
                  <tr>
                    <td>{{ $entreprises -> enname}} </td>
                    <td>{{ $entreprises -> website}} </td>
                    <td> {!! html_entity_decode($entreprises -> address) !!}</td>
                    <td>{{ $entreprises -> domact}} </td>            
                    <td>{{ $entreprises -> secact}} </td>            
                    <td>{{ $entreprises -> created_by}} </td>            
                    <td>{{ $entreprises -> validated}} </td> 
                    @if ($entreprises -> validated =='Non')  
                    <td> 
                    <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2"></label>
                    </div>
                  </div>
                 </td>  
                 @else
                    @if ($entreprises -> published =='Oui')  
                    <td> 
                    <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                          <input type="checkbox" class="custom-control-input"
                                  {{ ($entreprises->published) ? 'checked' : ''}}
                                    onclick="changeUserStatus(event.target, {{ $entreprises->id }});
                                    ">
                              <label class="custom-control-label pointer"></label>
                        </div>
                     </div>
                 </td>    
                    @else
                 <td> 
                    <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                          <input type="checkbox" class="custom-control-input"
                                  {{ ($entreprises->published) ? '' : ''}}
                                    onclick="changeUserStatus(event.target, {{ $entreprises->id }});
                                    ">
                              <label class="custom-control-label pointer"></label>
                        </div>
                     </div>
                 </td>    
                 @endif     

                 @endif     
                 <td>
                 <a href="{{ route('profileentreprise',$entreprises->id)}}"><i class="far fa-copy"></i></a>
                  
                    
                  </td>            


                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Appelation</th>
                    <th>Website</th>
                    <th>Adresse</th>
                    <th>Domaine activité</th>
                    <th>Secteur activité</th>
                    <th>Utilisateur</th>
                    <th> Validée </th>
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
