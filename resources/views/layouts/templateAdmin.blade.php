
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="{{  asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{  asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{  asset('css/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{  asset('css/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{  asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{  asset('css/jqvmap.min.css') }}" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="{{  asset('css/custom.min.css') }}" rel="stylesheet">

    <link href="{{  asset('css/sweetalert2.min.css') }}" rel="stylesheet">
  
  </head>

  <body class="nav-md " >    
    <div class="container body " >
      <div class="main_container " >
        <div class="col-md-3 left_col" >
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('admin.dashboard') }}" class="site_title"><i class="fa fa-book"></i> <span>C.E.P.S.S</span></a>
            </div>
          
            <div class="clearfix"></div>

          <!-- menu profile quick info -->
            <div class="profile clearfix">
                
            <div class="profile_info text-center">
              <span >Seja bem vindo,</span>
              <h2 >{{ Illuminate\Support\Facades\Auth::user()->name }}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  
                  <li><a style="font-weight:bold;" href="{{ route('dashboard') }}" ><i class="fa fa-house"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> Aluno <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('aluno.form') }} ">Inscrição</a></li>
                     <!-- <li><a href="{{ route('aluno.academico') }}">Dados academicos</a></li>-->
                      <li><a href="{{ route('aluno') }}">Dados pessoas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>  Funcionario <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('funcionario') }}">Funcionario</a></li>
                      <li><a href="{{ route('professor') }}" >Professor</a></li>
                    </ul>
                  </li>
                  <li><a ><i class="fa fa-puzzle-piece"></i>Implementação <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('curso') }}">Curso</a></li>
                      <li><a href="{{ route('turma') }}">Turma</a></li>
                     <li><a href="{{ route('disciplina') }}">Disciplina</a></li>
                    </ul>
                  </li>
                  <!--<li><a ><i class="fa-solid fa-calendar"></i> Horário</a> -->
                  </li>
                  <li><a ><i class="fa-solid fa-gear"></i> Configuracao</a>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
            </div>
            </div>
            <!-- top navigation -->
  <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a class="dropdown-item text-danger"  href="{{ Route('logout') }}"><i class="fa fa-sign-out pull-right"></i>Sair</a>
                  
                </li>
              
    </ul>
  </li>
</ul>
</nav>
</div>
</div>
<!-- /top navigation -->
@yield('home')
  <!-- footer content -->
<footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{  asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{  asset('js/all.js') }}"></script>
    <script src="{{  asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{  asset('js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{  asset('js/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{  asset('js/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{  asset('js/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <!-- bootstrap-progressbar -->
    <script src="{{  asset('js/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{  asset('js/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{  asset('js/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{  asset('js/jquery.flot.js') }}"></script>
    <script src="{{  asset('js/jquery.flot.pie.js') }}"></script>
    <script src="{{  asset('js/jquery.flot.time.js') }}"></script>
    <script src="{{  asset('js/jquery.flot.stack.js') }}"></script>
    <script src="{{  asset('js/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{  asset('js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{  asset('js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{  asset('js/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{  asset('js/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{  asset('js/jquery.vmap.js') }}"></script>
    <script src="{{  asset('js/jquery.vmap.world.js') }}"></script>
    <script src="{{  asset('js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{  asset('js/moment.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{  asset('js/custom.min.js') }}"></script>

    <script src="{{  asset('js/sweetalert2.min.js') }}"></script>
  <script>
      document.addEventListener('DOMContentLoaded', function(){
   const deleteButton = document.querySelectorAll('button[name="delete"]');
   deleteButton.forEach((button)=>{
    button.addEventListener('click', function(event){
    event.preventDefault(); 
    let url = this.dataset.url; // <-- pega o link corretamente
      console.log(url)
      Swal.fire({
        title: 'Tem certeza?',
        text: 'Esta ação não pode ser desfeita!',
        icon: 'Warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, apagar!',
        cancelButtonText: 'Cancelar'

  }).then((result) => {
    if(result.isConfirmed){
      window.location.href = url;
      
    }
  });
    });
  });
});
  </script>
    <script>
   
      $BODY = $("body"), 
      $MENU_TOGGLE = $("#menu_toggle"), 
      $SIDEBAR_MENU = $("#sidebar-menu"), 
      $SIDEBAR_FOOTER = $(".sidebar-footer"), 
      $LEFT_COL = $(".left_col"), 
      $RIGHT_COL = $(".right_col"), 
      $NAV_MENU = $(".nav_menu"), 
      $FOOTER = $("footer");

      function o() { 
        $SIDEBAR_MENU.find("li").removeClass("active active-sm"), 
        $SIDEBAR_MENU.find("li ul").slideUp()
      } 
      $SIDEBAR_MENU.find("a").on("click", function (e) { 
        var a = $(this).parent(); a.is(".active") ? (a.removeClass("active active-sm"), $("ul:first", a).slideUp(function () { 
          t() 
        })) : (a.parent().is(".child_menu") ? $BODY.is("nav-sm") && (a.parent().is("child_menu") || o()) : o(), a.addClass("active"), $("ul:first", a).slideDown(function () { 
          t() })) }), $MENU_TOGGLE.on("click", function () { 
            $BODY.hasClass("nav-md") ? ($SIDEBAR_MENU.find("li.active ul").hide(), $SIDEBAR_MENU.find("li.active").addClass("active-sm").removeClass("active")) : ($SIDEBAR_MENU.find("li.active-sm ul").show(), $SIDEBAR_MENU.find("li.active-sm").addClass("active").removeClass("active-sm")), $BODY.toggleClass("nav-md nav-sm"), t(), $(".dataTable").each(function () { 
              $(this).dataTable().fnDraw() 
            }) 
          }),
          $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent("li").addClass("current-page"), $SIDEBAR_MENU.find("a").filter(function () { 
              return this.href == CURRENT_URL }).parent("li").addClass("current-page").parents("ul").slideDown(function () { 
                t() }).parent().addClass("active"), $(window).smartresize(function () { 
                  t() });
    
    
    function validarTelefone(input){
      const erro = document.getElementById('erro');
      const valor = input.value;

      if(valor.length < 9){
        erro.textContent = 'O número deve ter exatamente 9 dígitos.';
      }else if(valor.length > 9){
        input.value = valor.slice(0, 9);
        erro.textContent = 'O número deve ter exatamente 9 dígitos.';
      }else{
        erro.textContent = '';
      }
    }

    document.getElementById('demo-form2').addEventListener('submit', function(event){
      const telefone = document.getElementById('phone-number').value;
      if(telefone.length !== 9){
        event.preventDefault();
        Swal.fire({
        title: 'Erro!',
        text: 'O número deve ter exatamente 9 dígitos!',
        icon: 'Error',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok!'

      });
      }
    })
 
    </script>
	<script>

    const myModel = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')
    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
    })
  </script>
  </body>
</html>
        
