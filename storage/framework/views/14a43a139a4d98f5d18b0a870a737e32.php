<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>"  rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('css/fontawesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('css/nprogress.css')); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('css/custom.min.css')); ?>" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <?php if($errors->any()): ?>
          <div id="error-message" class="alert alert-danger" >
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="text-center"><strong> <?php echo e($error); ?></strong></p>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php endif; ?>
          <section class="login_content">
          <img width="150px;" height="120px;" class="t" src="<?php echo e(asset('images/logo.png')); ?>" alt="logo">
          <?php if (isset($component)) { $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $attributes = $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $component = $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
            <form method="post" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
              <h1>Seja bem vindo</h1>
              <div>
                <input type="text" class="form-control" placeholder="Digite o seu nome" name="name" :value="old('name')" required autofocus />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Digite a sua senha" name="password" required autocomplete="current-password" />
              </div>
              <div>
                <input type="submit" value="Entrar" class="btn btn-primary submit" href="index.html" >
                <a class="reset_pass" href="<?php echo e(route('register')); ?>">Esqueceste a sua senha?</a>
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
<?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/auth/login.blade.php ENDPATH**/ ?>