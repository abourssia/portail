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

              <li class="breadcrumb-item active">Modifier</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
   
</div>
                <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                @if (session('txt')) 
                <div class="alert alert-warning"> {{(session('txt'))}} </div>
            @endif
                <form class="user" action="" method="POST">
                @csrf
                    <div class="row">
                    <div class="col-sm-12 mb-3 mb-sm-0">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Modifier une entreprise </h1>
                        </div>
                    </div>

                        <div class="col-9">
                        <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input name="name" type="text" class="form-control  " id="exampleFirstName"
                                            placeholder="Appellation  de l’entreprise " value="{{$entreprise -> enname}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for=""> Site web </label>
                                        <input  type="text" class="form-control  " id="exampleFirstName"
                                            placeholder="Https:\\..." name="website" value="{{$entreprise -> website}}">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for=""> Address </label>
                                    <textarea  name="address" class="form-control  " id="exampleFormControlTextarea1"
                                     rows="6"
                                     placeholder="address" value="{{$entreprise -> address}}"></textarea>
                                    </div>
                                </div>     
                        </div>    
                        </div>     
                    <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for=""> Forme Juridique </label>                                

                                <select name="forme" id="" class="form-control" style="border-radius:50px;">
                                <option value=""  class="form-control  " value="{{$entreprise -> fjur}}" disabled selected> {{$entreprise -> fjur}} </option>
                                <option value="E.U.R.L"  class="form-control  " onclick="formejurF2()"> E.U.R.L </option>
                                    <option value="S.A.R.L"  class="form-control  " onclick="formejurF2()"> S.A.R.L </option>
                                    <option value="S.P.A"  class="form-control  " onclick="formejurF2()"> S.P.A </option>
                                    <option value="S.N.C"  class="form-control  " onclick="formejurF2()"> S.N.C </option> 
                                    <option  class="form-control  " onclick="formejurF()"> AUTRE </option>
                                </select>
                                                                 
                                <div id="formejurDIV" style="margin-top:15px; "> 
                                <input name="formejur" type="text" class="form-control" id="exampleFirstName"
                                            placeholder="Précisez " >

                                </div>   
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for=""> Propriété de l’entreprise </label>                                
                                    <select name="propriety" id="" class="form-control" style="border-radius:50px">
                                    <option value=""  class="form-control  " disabled selected value="{{$entreprise -> propentre}}">  {{$entreprise -> propentre}} </option>
                                    <option value="Publique"  class="form-control  " onclick="proprietyentF2()"> Publique </option>
                                    <option value="Privé"  class="form-control  "  onclick="proprietyentF2()"> Privé </option>
                                    <option value="Etrangère"  class="form-control  "  onclick="proprietyentF2()"> Etrangère </option>
                                    <option value="Multinationale"  class="form-control  "  onclick="proprietyentF2()"> Multinationale </option> 
                                    <option  class="form-control"  onclick="proprietyentF()"> AUTRE </option>
                                </select>
                                <div id="proprietyentDIV" style="margin-top:15px; "> 
                                    <input name="proprietyent" type="text" class="form-control  " id="exampleFirstName"
                                            placeholder="Précisez " >

                                    </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for=""> Type de l’entreprise </label>                                
                                    <select name="typeentr" id="" class="form-control" style="border-radius:50px;">
                                    <option value=""  class="form-control  " disabled selected value="{{$entreprise -> typeentreprise}}">  {{$entreprise -> typeentreprise}}</option>
                                    <option value="Direction générale"  class="form-control  " onclick="typetrF2()">Direction générale </option>
                                    <option value="GROUPE"  class="form-control  " onclick="typetrF2()"> GROUPE </option>
                                    <option value="FILIALE"  class="form-control  " onclick="typetrF2()"> FILIALE </option>
                                    <option value="SUCCURSALE"  class="form-control  " onclick="typetrF2()"> SUCCURSALE </option> 
                                    <option  class="form-control  " onclick="typetrF()"> AUTRE </option>
                                </select>
                                <div id="typetrDIV" style="margin-top:15px; "> 
                                    <input name="typetr" type="text" class="form-control  " id="exampleFirstName"
                                            placeholder="Précisez " >

                                    </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for=""> Domaine d’activité de l’entreprise </label>                                
                                    <select name="domaineact" id="" class="form-control" style="border-radius:50px;">
                                    <option value=""  class="form-control  " disabled selected value="{{$entreprise -> domact}}"> {{$entreprise -> domact}} </option>     
                                    <option value="Commerciale"  class="form-control  " onclick="domaineactentrF2()"> Commerciale </option>
                                    <option value="Industrielle"  class="form-control  " onclick="domaineactentrF2()"> Industrielle </option>
                                    <option value="Prestataire"  class="form-control  " onclick="domaineactentrF2()"> Prestataire </option>
                                    <option  class="form-control" onclick="domaineactentrF()"> AUTRE </option>
                                </select>
                                <div id="domaineactentrDIV" style="margin-top:15px; "> 
                                    <input name="domaineactentr" type="text" class="form-control  " id="exampleFirstName"
                                            placeholder="Précisez " >

                                    </div> 
                                    </div>
                                </div>
                                </div>
                                <div class="col-6" style="margin-top: 35px">
                
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                    <textarea class="form-control  " id="exampleFormControlTextarea1"
                                     rows="2"
                                     placeholder="Type d’activités" name="typeact" value=""> {{$entreprise -> typeact}} </textarea>
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for=""> Secteur d’activité de l’entreprise </label>                                

                                <select name="secteurac" id="" class="form-control" style="border-radius:50px;">
                                <option value=""  class="form-control  " disabled selected value="{{$entreprise -> secact}}"> {{$entreprise -> secact}} </option>
                                    <option value="Mines"  class="form-control  " onclick="secteuractF2()"> Mines </option>
                                    <option value="Energie"  class="form-control " onclick="secteuractF2()"> Energie </option>
                                    <option value="Industrie"  class="form-control " onclick="secteuractF2()"> Industrie </option>
                                    <option value="Agriculture"  class="form-control  " onclick="secteuractF2()"> Agriculture </option>
                                    <option value="Informatique"  class="form-control  " onclick="secteuractF2()"> Informatique </option>
                                    <option  class="form-control  " onclick="secteuractF()"> AUTRE </option>
                                </select>
                                <div id="secteuractDIV" style="margin-top:15px; "> 
                                    <input name="secteuract" type="text" class="form-control  " id="exampleFirstName"
                                            placeholder="Précisez " >

                                    </div> 
                                    </div>
                                    </div>   
                                    </div>   
                                
</div>

        <div class="form-group row">  
            <div class="col-6">
                    <label for=""> Existe –il une unité R&D dans votre entreprise ? </label>  
            </div>
            <div class="col-6">
                    <div class="row">
                        <div class="form-check form-check-inline" style="margin-right:135px">
                                <input class="form-check-input" type="radio" name="rndnon" onclick="rnds()">
                                <label class="form-check-label" for="inlineRadio1" value="Oui" > Oui </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rndnon" value="Non" onclick="rndh()">
                                <label class="form-check-label" for="inlineRadio1" > Non </label>
                        </div>
                        
                    </div>
                    <div id="myDIV2">
                        <div class="row" style="margin-top: 10px">
                        <input type="text" class="form-control  " id="exampleFirstName"  name="rnd" placeholder="Précisez ">
                        </div>
                    </div>
            </div>

        </div> 
        <div class="form-group row">  
            <div class="col-6">
                    <label for=""> Avez-vous déjà fais appel aux compétences Scientifiques ?  </label>  
            </div>
            <div class="col-6">
                    <div class="row">
                        <div class="form-check form-check-inline" style="margin-right:135px">
                                <input class="form-check-input" type="radio"  name="compscnon" onclick="myFunction33()" >
                                <label class="form-check-label" for="inlineRadio1"> Oui </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="compscnon" value="Non" onclick="myFunction23()" name="compsc" >
                                <label class="form-check-label" for="inlineRadio1"  > Non </label>
                        </div>
                    </div>
                    <div id="myDIV3">

                    <div class="row" style="margin-top: 10px">
                    <input type="text" class="form-control  " id="exampleFirstName" name="compsc" placeholder="Précisez ">
                    </div>
                    </div>
            </div>

        </div> 
        <div class="form-group row">  
                                     <label for=""> Quelles sont les problématiques liées à la chaine de valeur de votre entreprise ? </label>
                                    <textarea name="problems" class="form-control  " id="exampleFormControlTextarea1"
                                     rows="6"
                                     placeholder="" value=""> {{$entreprise -> problems}} </textarea>

        </div> 
        <div class="form-group row">  
                                     <label for=""> Vos remarques complémentaires : </label>
                                    <textarea  name="naremarquesme" class="form-control  " id="exampleFormControlTextarea1"
                                     rows="6"
                                     placeholder="" value=""> {{$entreprise -> remarques}} </textarea>

        </div> 
</div>


<div class="card-footer">

<div class="row" style="margin-left: 500px; margin-top: 25px">
<div class="col-sm-5">

    <button type="submit" class="btn btn-primary btn-user btn-block"> Modifier  </button>
    </div>


</div>
</div>
                               
                            </form>
                    </div>

                    <!-- Content Row -->
                   

                    </div>
                    </div>

<!-- End of Main Content -->

@endsection