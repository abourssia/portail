@extends('layouts.adminmaster')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
<!-- Content Row -->

      <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">AJOUTER PNR 2021</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form method="get" action="{{ route('updatepnr') }}" 
		enctype="multipart/form-data">
    @csrf
          <div class="card-body">
          <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input name="etablissement" id="etablissement" type="text" class="form-control  " value="{{$pnr -> etablissement}}" id="exampleFirstName"
                        placeholder="Appellation  de l’entreprise "  >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <textarea   id="summernote" name="desc" id="desc" class="form-control"  placeholder="DESC  de l’entreprise "  >

                        {{$pnr -> desc}}
                        </textarea>
                    </div>
                </div>
                <div class="image">
                <label><h4> Ajouter une image</h4></label>
                <input type="file" class="form-control"  name="image">
                </div>
          </div>
          <div class="card-footer">
            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="margin-left:250px">MODIFIER</button>
            </div>
        </div>
    </div>







   
  </form>

                    </div><!-- /.container-fluid -->
                </div>
     </div>
    </div>
</div>
@endsection
