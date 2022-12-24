@extends('layouts.adminmaster')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      @if (session('txt')) 
                <div class="alert alert-success"> {{(session('txt'))}} </div>
            @endif

      
      <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> PNR </h3>
              </div>
              <div class="card-body">
                <table id="users" class="table table-bordered table-hover">
                <thead class="table-dark">

                    <tr>
                    <th> ID </th>
                    <th> ETABLISSEMENT </th>
                    <th> DESCRIPTION </th>
                    <th> IMAGE </th>
                    <th> ACTION </th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($pnr as $pnr)
                  <tr>
                    <td> {{ $pnr -> id}}</td>            
                    <td> {{ $pnr -> etablissement}}</td>            
                    <td> {!! html_entity_decode($pnr->desc) !!}</td>            
                    <td><img style="height:150px; width:150p" src="{{ asset('/images/'.$pnr->image) }}" /></td>            
                    <TD> 
                    <a href="{{ route('deletepnr',$pnr->id)}}"><i class="fa-solid fa-ban red" title="supprimer"></i></a>
                    <a href="{{ route('editpnr',$pnr->id)}}"><i class="fa-solid fa-pen green" title="MODIFIER"></i></a></TD>
                  </tr>

                  @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


</div>
</div>

                    </div><!-- /.container-fluid -->
                </div>
     </div>
    </div>
</div>
@endsection
