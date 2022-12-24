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

    @if ($labos->count() == 0) 
    
        nothing here
@else 
                 @foreach ($labos as $labo)

               <!--Services Item-->
               <div class="col-md-4">
                   <div class="resultat-box">
                       <div class="services-icon"> <i class="fa-solid fa-building"></i> </div> 
                       <div class="services-desc">
                          <h4> titre : {{$labo -> intitule}}</h4>
                          <p>      
                            <b> Region : </b> {{$labo -> region}} 
                            <br>
                            <b> Wilaya : </b> {{$labo -> wilaya}} 
                            <br>
                            <b>Domaine :   </b> {{$labo -> domaine}}
                                <br>

                                <a href="{{ route('laboprofile', $labo->id) }}" target="_blank">  <b> Plus de détails   </b> </a>

                            </p>
                            
                       </div>
                    </div>
                </div>
                   @endforeach
                
                @endif



               </div> <!--/.row-->

               <div class="row">
               <div class="d-flex justify-content-center center">
               {!! $labos->links() !!}
                </div>
                </div>


        </div> <!--/.container-->
   </section> 
  <!--End Services-->


@endsection