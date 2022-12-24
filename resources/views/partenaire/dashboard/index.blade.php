@extends('layouts.partenairemaster')

@section('title', 'USER HOME')


@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="align-items-center justify-content-between">
    <div class="row mb-2">
          <div class="col-sm-6 float-left">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <div  class=" float-right">
              
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
</div>

<!-- Content Row -->
@if (session('txt')) 
                <div class="alert alert-warning"> {{(session('txt'))}} </div>
            @endif
            @if (session('txt2')) 
                <div class="alert alert-warning"> {{(session('txt2'))}}
                   </div>
            @endif
<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        @if ( $platinum == 1)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <a href="{{ route('entrepriseadd') }}" class="nav-link disabled">
                                               <p>  Ajouter une Entreprise  </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-building fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            
                                            <a href="{{ route('updateindex') }}" class="nav-link ">
                                               <p>   Modifier Votre Entreprise </p>
                                                </a>
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-building fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if ( $platinum == 0)

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                
                                            
                                                <a href="{{ route('entrepriseadd') }}" class="nav-link">
                                               <p>  Ajouter une Entreprise  </p>
                                                </a>
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-building fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            
                                            <a href="{{ route('updateindex') }}" class="nav-link disabled">
                                               <p>   Modifier Votre Entreprise </p>
                                                </a>
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-building fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if ( $gold == 0)

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="{{ route('resadd') }}">
                                            Ajouter un responsable de communication

                                            </a>
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-plus fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 disabled">
                                            <a href="" class="nav-link disabled">
                                           Modifier le responsable de communication 
                                           </a>                                        
                                        
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-pen fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if ( $gold == 1)

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            
                                               <a href="{{ url('user/dashboard/responsable')}} " class="nav-link disabled">
                                            Ajouter un responsable de communication

                                            </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                           <a href="http://" class="nav-link">
                                           Modifier le responsable de communication 
                                           </a>  </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-pen fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

</div>


<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Entreprise </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                @if ( $platinum == 1)
                <table>
                    <tr>
                    <th><label for="name"> Nom : </label> 
                    </th>
                    <td> <label for="">  {{ $entreprise -> enname}} </label>  </td>
                    </tr>
                    <tr>
                    <th><label for="name"> Adresse : </label> 
                    </th>
                    <td> <label for="">  {{ $entreprise -> address}} </label>  </td>
                    </tr>
                    <tr>
                    <th><label for="name"> Status : </label> 
                    </th>
                    <td> 
                            @if ($entreprise -> validated == 'Non')
                            <label for="">  <i class="fa-solid fa-x red" title="Votre entreprise n'est pas encore validée"></i> </label>  
                            @endif
                            @if ($entreprise -> validated == 'Oui')
                            <label for="">   <i class="fa-solid fa-check green"></i> </label>  
                            @endif
                    </td>
                    </tr>
                </table>
                @endif
                @if($platinum == 0)
                        <p> Vous n'avez pas encore ajouté une entrepise</p>
                @endif
                </div>

            </div>
            </div>
        </div>

        <!-- Color System -->
      
    </div>

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Responsable </h6>
            </div>
            <div class="card-body">
            <p> Vous n'avez pas encore ajouté le reponsable de communication</p>
            </div>
        </div>

        <!-- Color System -->
      
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection