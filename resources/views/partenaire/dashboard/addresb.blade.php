@extends('layouts.partenairemaster')
@section('title', 'USER HOME')
@section('content')
<div class="container-fluid">
        <div class=" align-items-center justify-content-between ">
            <div class="row mb-6">
                  <div class="col-sm-12">
                    <ol class="breadcrumb float-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('userdashboard') }}">Dashboard</a></li>
                      <li class="breadcrumb-item active">Ajouter un responsable </li>
                    </ol>
                  </div><!-- /.col -->
            </div><!-- /.row -->
        </div>         
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="col">
                @if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif
                    <form class="user" action="" method="POST">
                        @csrf      
                        <div class="form-group row">
                            <div class="col-6">
                                Poste de Responsable 
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="posteres" id="inlineRadio1" value="Directeur Général" onclick="myFunction2()">
                                    <label class="form-check-label" for="inlineRadio1"> Directeur Général </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="posteres" id="inlineRadio1" value="Directeur" onclick="myFunction2()">
                                    <label class="form-check-label" for="inlineRadio1"> Directeur </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="posteres" id="inlineRadio1" value="Gérant" onclick="myFunction2()">
                                    <label class="form-check-label" for="inlineRadio1"> Gérant </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="posteres" id="inlineRadio1"  onclick="myFunction()">
                                    <label class="form-check-label" for="inlineRadio1"> Autre </label>
                                </div>
                                    <div id="myDIV">
                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-9">
                                            <input type="text" class="form-control form-control-user" name="posteres" id="exampleFirstName"placeholder="Précisez ">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="form-group row">  
                                <div class="col-6">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="lname" placeholder="Nom ">
                                </div>
                                <div class="col-6">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="fname" placeholder="Prénom ">
                                </div>
                            </div>
                            <div class="form-group row">  
                                <div class="col-9">
                                    <input type="email" class="form-control form-control-user" id="exampleFirstName" name="mail" placeholder="Email ">
                                </div>
                            </div> 
                            <div class="form-group row">  
                                <div class="col-6">
                                    <input type="text"  pattern="[0]{1}[5-7]{1}[0-9]{8}" class="form-control form-control-user" id="exampleFirstName" name="tel" placeholder="Telephone ">
                                </div>
                                <div class="col-6">
                                    <input type="text" pattern="[0]{1}[0-9]{8}" class="form-control form-control-user" id="exampleFirstName" name="fax" placeholder="Fax">
                                </div>
                            </div>
                            <div class="form-group row">  
                                <div class="col-6">
                                    <label for=""> Vous voulez votre contact </label>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Public">
                                        <label class="form-check-label" for="inlineRadio1"> Publique </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Private">
                                        <label class="form-check-label" for="inlineRadio1"> Privé </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"> 
                                <div class="row" style="margin-left: 500px; margin-top: 25px">
                                        <div class="col-sm-5">
                                            <button class="btn btn-primary btn-user btn-block"> Ajouter  </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
</div>

<!-- End of Main Content -->

@endsection