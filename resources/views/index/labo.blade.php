@extends('layouts.homemaster')

@section('title', 'Laboratoire ')

@section('content')


<section id="why-choose" class="section">
        <div class="container">
        <div class="row">
                        <h1> </h1>
                    </div>
            <div class="row">
                  <div class="tabs tabs-main">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#one" data-toggle="tab">Laboratorie</a></li>
					  <li><a href="#two" data-toggle="tab">Equipes</a></li>
					  <li><a href="#three" data-toggle="tab">Directeur</a></li>
					</ul>
           
					<div class="tab-content">

						<!--Start Tab Item #1 -->
						<div class="tab-pane in active" id="one">
                        <table class="table table-borderless">
                        <tr>
                            <th><label for="name"> Code du Laboratoire :   </th>
                            <td>   {{$labo -> code}}    </td>
                        </tr>
                        <tr>
                            <th><label for="name"> Intitulé du Laboratoirs :   </th>
                            <td>   {{$labo -> intitule}}    </td>
                        </tr>  
                        <tr>
                            <th><label for="name"> Acronyme du Laboratoirs :   </th>
                            <td>   {{$labo -> acronyme}}    </td>
                        </tr>   
                        <tr>
                            <th><label for="name"> Région du Laboratoire :   </th>
                            <td>   {{$labo -> region}}    </td>
                        </tr>
                        <tr>
                            <th><label for="name"> Wilaya :   </th>
                            <td>   {{$labo -> wilaya}}    </td>
                        </tr>
                        <tr>
                            <th><label for="name"> Etablissement du Laboratoire :   </th>
                            <td>   {{$labo -> etablissement}}    </td>
                        </tr>
                        <tr>
                            <th><label for="name"> Grand domaine du Laboratoire :   </th>
                            <td>   {{$labo -> gdomainelabo}}    </td>
                        </tr>                         
                        <tr>
                            <th><label for="name"> Domaine du Laboratoire :   </th>
                            <td>   {{$labo -> domaine}}    </td>
                        </tr>
           
                        </table>
						</div>
						<!-- End Tab -->

						<!--Start Tab Item #2 -->
						<div class="tab-pane" id="two">
                        <table class="table table-borderless">
                            <th>Intitulé de l'équipe</th>
                            <th>Chef d'équipe</th>
                            <th>Description</th>
                            <th> Domaines</th>
                            @foreach ($team as $team)
                            <tr>
                                <td>{{ $team -> intituleequipe}}</td>
                                <td>{{ $team -> chefequipe}}</td>
                                <td style="width:50%">{{ $team -> desc}}</td>
                                <td>
                                    <ul>
                                        <li>{{ $team -> dom1}}</li>
                                        <li>{{ $team -> dom2}}</li>
                                        <li>{{ $team -> dom3}}</li>
                                    </ul>


                                </td>
                            </tr>
                            @endforeach

                        </table>
						</div>
						<!-- End Tab -->

						<!--Start Tab Item #3 -->
						<div class="tab-pane" id="three">
                        <table class="table table-borderless">

                        <tr>
                            <th><label for="name"> Directeur du laboratoire :   </th>
                            <td>   {{$labo -> directeur}}    </td>
                        </tr>
                        @auth
                                                <tr>
                            <th><label for="name"> Email du Directeur du laboratoire :   </th>
                            <td>   {{$labo -> emaildirec}}    </td>
                        </tr>
                        
                        <tr>
                            <th><label for="name"> Numéro du téléphone  :   </th>
                            <td>   {{$labo -> numdirec}}    </td>
                        </tr>
                        @endauth
                        @guest

                        <tr>
                                                      <td>Connectez vous pour voir le contact</td>  
                            </tr> 
                            @endguest
       
                        </table>
						</div>
						<!-- End Tab -->

					</div>
              </div>
            </diV>
        </diV>
</diV>

@endsection