

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <title>  ATRST: PORTAIL -  S'inscrire </title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror  
            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>

                                     </span>
            @enderror
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                    <h2 class="title">  S'inscrire </h2>
                    <div class="input-field">
                         <i class="fas fa-user"></i>
                         <input id="username" type="text"  placeholder="Choisissez un Nom d'utilisateur" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    </div>
                    <div class="input-field">
                         <i class="fas fa-user"></i>
                         <input id="name" type="text" placeholder="Nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('pname') }}" required autocomplete="name" autofocus>
                         @error('name')
                                    <span class="invalid-feedback" role="alert">
                                     </span>
                        @enderror                     </div>
                     <div class="input-field">
                         <i class="fas fa-user"></i>
                         <input id="pname" type="text"  placeholder="Prénom" class="form-control @error('pname') is-invalid @enderror" name="pname" value="{{ old('pname') }}" required autocomplete="pname" autofocus>
                         @error('pname')
                                    <span class="invalid-feedback" role="alert">
                                     </span>
                        @enderror
                    </div>
                    <div class="input-field">
                         <i class="fas fa-envelope"></i>
                         <input id="email" type="email" placeholder="Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                     </span>
                                @enderror                     </div>
                     <div class="input-field">
                         <i class="fas fa-lock"></i>
                         <input id="password" type="password"  placeholder="Mot De Passe"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                     </span>
                                @enderror                     
                    </div>
                     <div class="input-field">
                         <i class="fas fa-lock"></i>
                         <input id="password-confirm" type="password" placeholder="Confirmer votre mot De Passe" class="form-control" name="password_confirmation" required autocomplete="new-password">
                     </div>
                     <div class="input-field">
                         <i class="fas fa-lock"></i>
                         <select id="actor" name="role_as">
                              <!--  <option value="etabmesres">Etablissement MESRS</option> -->
                              <option disabled>Vous êtes</option>
                              <option value="0">Etablissement Socio-Economique</option>
                              <option value="2">Chercheur</option>
                        </select>                     
                    </div>
                     <button type="submit" class="btn btn-primary solid">
                                    {{ __('S\'inscrire') }}
                    </button>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                <h3>Un de nous ?</h3>
    <br>
                        <a href="login">
                          <button class="btn transparent" id="sign-up-btn" style="" > Connectez-vous</button>
                         </a>
                    </button>
                    <img src="{{asset('assets/img/log.svg')}}" class="image" alt="" />
                </div>
            </div>

        </div>
    </div>
    <script src="{{asset('app.js')}}"></script>
</body>
</html>