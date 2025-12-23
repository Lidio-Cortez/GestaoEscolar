

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
                <h3>Alunos</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content" style="overflow-x: scroll;">

                    <p>Área para visualizar, cadastrar, editar e apagar alunos.</p>
                    <p>Área para visualizar, cadastrar, editar e apagar alunos.</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects "   >
                      <thead>
                        <tr>
                          <th >Matricula</th>
                          <th >Nome</th>
                          <th>Nome do pai</th>
                          <th>Nome da mãe</th>
                          <th>Telefone do pai</th>
                          <th>Genero</th>
                          <th>Data de nascimento</th>
                          <th>Provincia</th>
                          <th>Municipio</th>
                          <th>Rua</th>
                          <th>Data da matricula</th>
    
                          <th style="width: 20%">#Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php $__currentLoopData = $aluno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alunos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($alunos->id); ?></td>
                          <td>
                            <a><?php echo e($alunos->nome); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->pai); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->mae); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->contacto); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->sexo); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->data_nascimento); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->provincia); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->municipio); ?></a>
                            <br />
                          </td>
                          <td>
                            <a><?php echo e($alunos->residencia); ?></a>
                            <br />
                          </td>
                          
                           <td>
                            <a href=""><?php echo e($alunos->data_inscricao); ?></a>  
                          </td>

                            <td>
                              <div class="btn-group">
                                <button type="submit" class="btn btn-info btn-xs" style="background-color:#E9765B;border:none;" name="update" value="edit">
                                    <i class="fa fa-pencil"></i> <a style="color:white;" href="<?php echo e(route('aluno.form.edit', $alunos->id)); ?>"> Editar </a>
                                </button>
                                <button type="submit" class="btn btn-danger btn-xs" name="delete" value="delete"  data-url="<?php echo e(route('aluno.delete', $alunos->id)); ?>">
                                    <i class="fa fa-trash-o"></i> <a style="color:white;" href="<?php echo e(route('aluno.delete', $alunos->id)); ?>"> Delete </a>
                                </button>
                        </div>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/aluno/aluno.blade.php ENDPATH**/ ?>