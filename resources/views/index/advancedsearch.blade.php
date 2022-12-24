@extends('layouts.homemaster')

@section('title', 'RESULTAT DE RECHERCHE ')

@section('content')



      <!--Start Services-->
   <section id="services" class="section">
        <div class="container">


<div class="row justify-content-start">
   

                 <div class="title-box text-center">
                    <h2 class="title">Résultat de votre recherche </h2>
</div>
</div>

    <div class="col-md-12">

    @if ($entreprises->count() == 0) 
    
        nothing here
@else 
                 @foreach ($entreprises as $entreprise)

               <!--Services Item-->
               <div class="col-md-12">
                   <div class="resultats-box">
                       <div class="services-icon"> <i class="fa-solid fa-building"></i> </div> 
                       <div class="services-desc">
                          <h4> <b>  Appelation : </b> {{$entreprise -> enname}}</h4>
                          <p>      
                             
                          <b>    Site web : </b> <a href="{{$entreprise -> website}}"> {{$entreprise -> website}}</a>
                          <br>
                          <b> Secteur d'activité : </b>  {{$entreprise -> secact}} 
                          <br>

                      <b>   Description de l’entreprise : </b> 
                          
                           {{$entreprise -> desc}}
                          <br>

                          <b>   Telephone  : </b>  {{$entreprise -> tel}}
                                <br>

                                <b>   Adresse  : </b>  {{$entreprise -> address}}

                            </p>
                            
                       </div>
                    </div>
                </div>
                   @endforeach
                
                @endif



               </div> <!--/.row-->

               <div class="row">
               <div class="d-flex justify-content-center center">
               {!! $entreprises->links() !!}
                </div>
                </div>


        </div> <!--/.container-->
   </section> 
  <!--End Services-->


@endsection