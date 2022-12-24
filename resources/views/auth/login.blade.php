

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
    <title>  ATRST: PORTAIL - Se connecter  </title>
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
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                <h2 class="title">  Se connecter </h2>
                    <div class="input-field">
                         <i class="fas fa-envelope"></i>
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              
                    </div>
                     <div class="input-field">
                         <i class="fas fa-lock"></i>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">                 
                    </div>
                    <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __(' Mémoriser') }}
                                    </label>
                                </div>
                            </div>
                        </div>
     
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __(' Se connecter ') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Mot de Passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                     </form>

            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                <h3> Nouveau ici? </h3>
                <br>
                         
                    <a href="register">
                          <button class="btn transparent" id="sign-up-btn" > S'inscrire </button>
                         </a>
                    <img src="{{asset('assets/img/register.svg')}}" class="image" alt="" />
                </div>
            </div>

        </div>
    </div>
    <script src="{{asset('app.js')}}"></script>
</body>
</html>