<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}"  rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          @if ($errors->any())
          <div id="error-message" class="alert alert-danger" >
            @foreach ($errors->all() as $error)
            <p class="text-center"><strong> {{ $error }}</strong></p>
              @endforeach
            </div>
          @endif
          <section class="login_content">
          <img width="150px;" height="120px;" class="t" src="{{ asset('images/logo.png') }}" alt="logo">
          <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="post" action="{{ route('login') }}">
            @csrf
              <h1>Seja bem vindo</h1>
              <div>
                <input type="text" class="form-control" placeholder="Digite o seu nome" name="name" :value="old('name')" required autofocus />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Digite a sua senha" name="password" required autocomplete="current-password" />
              </div>
              <div>
                <input type="submit" value="Entrar" class="btn btn-primary submit" href="index.html" >
                <a class="reset_pass" href="{{ route('register') }}">Esqueceste a sua senha?</a>
              </div>

              <div class="clearfix"></div>
  
              <div class="separator">
  <!--          <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>              
  -->
                <br />

                <div>
                  <h1 class="text-primary"><i class="fa fa-book text-primary"></i> C.E.P.S.S</h1>
                  <p>©2024 Todos os direitos reservados.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
<!--
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2024 Todos os direitos reservados</p>
                </div>
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>
    <script>
      function showError(){
        var errorMessage = document.getElementById('error-message');
        errorMessage.classList.add('visible');        
        console.log("Elemento: ", errorMessage);

       setTimeout(function(){
            errorMessage.classList.remove('visible');
        }, 7000);
        
        }
      
     
       
    </script>
  </body>
</html>
