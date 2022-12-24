@extends('layouts.usermaster')

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
            chercheur
                     
</div>



      
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection