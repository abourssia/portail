@extends('layouts.homemaster')
@section('title', 'PORTAIL - HOME ')

@section('content')
<section id="getstarted" class="section" style="padding: 150px">

<div class = "container">
<div class="services-box ">

                <div class = "header-title">
                    <h4></h4>
                </div>
                <div class="box">
                <div class = "header-form ">
                    
                    <div class="home">
                        <h1 style="text-transform:uppercase"> Vous Cherchez </h1>
                        </div>
                        
                    <form class="toggle">
                                <input type="radio" id="choice1" name="choice" onclick="fentreprise()">
                                <label for="choice1">UN LABORATOIRE</label>
                                <input type="radio" id="choice2" name="choice" onclick="fchercheur()">
                                <label for="choice2">UNE ENTREPRISE</label>
                            </form>
                            <div id="entreprise"> 
        <form class="user" action="/result" method="get">
                @csrf
                
                        <div class="row">
                            <div class="col-md-3">
                            <input type = "text" class = "form-control" placeholder="Mot Clé" name="kwlabo">
                            </div>

                            <div class="col-md-3">
                            <select name="region" id="" class="form-select" >
                            <option value="" disable>  Choisissez une région </option>

                            @foreach ($region as $region)
                                <option value="{{$region->region }}"> {{$region->region }}</option>
                             @endforeach
                            </select>  
                            </div>

                            <div class="col-md-3">
                            <select name="domaine" id="" class="form-select" >
                            <option value="" disable>  Choisissez un domaine </option>

                            @foreach ($domaine as $domaine)
                                    <option value="{{$domaine->domaine }}"> {{$domaine->domaine }}</option>
                             @endforeach
                            </select>                              </div>
                            <input type="submit" class = "btn" value = "Chercher" target="_blank">
                        </div>
                    </form>
               </div>  
               <div id="chercheur"> 
               <form class="user" action="/results" method="get">
                     @csrf

                        <div class="row">

                            <div class="col-md-9">
                                <br>
                            <input type = "text" name="kwentre" class = "form-control" placeholder="Entrez un mot clé">
                            </div>
                            <div class="col-md-3" style="margin-top:15px">

                            <input type="submit" class = "btn" value = "Chercher" target="_blank">
                            </div>

                        </div>
                    </form>
               </div>  
         
               </div>  
                    
                </div>
            </div>
        </div>
            </section> 

            <section  id="skills" class="section parallax">
       <div class="overlay"></div>
       <div class="container">
           <div class="row  d-flex justify-content-center">
                    
             <div class="title-box text-center white">
                <h2 class="title"> QUELQUES CHIFFRES </h2>
             </div>
              
                 <!--Skill #1-->
                <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <h4 style="color:white; font-size:45px" class="text-secondary counter" data-toggle="counter-up">
                {{$countlaboratoires}}
            </h4>

                    <h4>LABORATORIES</h4>
                 </div>
                
                <!--Skill #2-->
                <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <h4 style="color:white; font-size:45px" class="text-secondary counter" data-toggle="counter-up">
                {{$counentreprise}} </h4>

                    <h4>ENTREPRISES</h4>
                 </div>
                
                <!--Skill #3-->
                <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <h4 style="color:white; font-size:45px" class="text-secondary counter" data-toggle="counter-up">24</h4>

                    <h4>PNR - 2021 </h4>
                 </div>
                
                <!--Skill #4-->


            
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section> 

  
    
  <!--Start Team-->
  <section id="team" class="section">
		<div class="container">
            <div class="row">
                    
             <div class="title-box text-center">
                <h2 class="title"> PNR 2021 </h2>
             </div>
              
             </div>
			
                <!-- Team -->
				<div class="team-items team-carousel">
                      <!-- Team Member #1 -->
                      @foreach ($pnr as $pnr)
                      <div class="item">
                          <img class="pnrimg" src="{{ asset('/images/'.$pnr->image) }}" />
                          <h5>{{$pnr->etablissement}}</h5>
                          <p>      {!! html_entity_decode($pnr->desc) !!}</p>
                    
                          <div class="socials">

                          </div>
                      </div>
                      <!-- End Member -->
                      @endforeach
                      
                      
				</div>
                <!-- End Team -->
			</div>
            <!-- End Content -->
	</section>
  <!--End Team-->

@endsection
