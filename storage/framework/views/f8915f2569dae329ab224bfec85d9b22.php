

<?php $__env->startSection('home'); ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
              <?php if(session('sucess')): ?>
              <div class="alert alert-sucess">
                <?php echo e(session('sucess')); ?>

              </div>  
            <?php endif; ?>
              <div class="title_left">
                <h3>Cursos</h3>
              </div>
            </div>
            <!--erro-->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <p>Área para visualizar, cadastrar, editar e apagar as Cursos </p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">ID</th>
                          <th >Curso</th>
                          <th>Departamento</th>
                          <th>Tipo</th>
                          <th style="width: 20%">#Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php $__currentLoopData = $allCursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($curso->id); ?></td>
                          <td>
                            <a><?php echo e($curso->curso); ?></a>
                            <br />
                          </td>
                           <td>
                            <a href=""><?php echo e($curso->departamento); ?></a>  
                          </td>
                          <td>
                            <a><?php echo e($curso->tipo); ?></a>
                          </td>
                          
                            <td>
                            <div class="btn-group">
                              <button type="submit" class="btn btn-info btn-xs" style="background-color:#E9765B;border:none;" name="update" value="edit">
                                <i class="fa fa-pencil"></i> <a style="color:white;" href="<?php echo e(route('curso.form.edit', $curso->id)); ?>"> Editar </a>
                            </button>
                            <button type="submit" class="btn btn-danger btn-xs" name="delete" value="delete"  data-url="<?php echo e(route('aluno.delete', $curso->id)); ?>">
                                <i class="fa fa-trash-o"></i> <a style="color:white;" href="<?php echo e(route('funcionario.delete', $curso->id)); ?>"> Delete </a>
                            </button>
                              </div>
                            </td>
                          
                        </tr> 
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                    
                    <!-- end project list -->
                    <a href="<?php echo e(route('curso.form')); ?>" class="btn" style="background-color:#478BA2; color: white;">Cadastrar</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div id="meuModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="tituloModal">Admin</h1>
                    </div>
                    <div class="modal-body">
                        Carregando...
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/curso/curso.blade.php ENDPATH**/ ?>