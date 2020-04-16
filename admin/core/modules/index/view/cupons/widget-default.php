        <!-- Main Content -->

        <div class="row">
            <div class="col-md-12">
                  
  <!-- Button trigger modal -->


            <h2>CUPONES</h2>
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-th-list"></i> Cupones
                </div>
                <div class="widget-body medium no-padding">
<?php
$categories = CouponData::getAll();
 if(count($categories)>0):?>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tbody>
<thead>
  <th>Nombre</th>
  <th>Descripcion</th>
  <th>Valor</th>
  <th>Clase</th>
  <th>Activo</th>
  <th>Creacion</th>
  
</thead>
<?php foreach($categories as $cat):?>
                        <tr>
                        <td><?php echo $cat->name; ?></td>
                        <td><?php echo $cat->description; ?></td>
                        <td><?php echo $cat->val; ?></td>
                        <td><?php echo $cat->kind; ?></td>
                        <td style="width:90px;"><center><?php if($cat->is_active==1):?><i class="fa fa-check"></i><?php else: ?><i class="fas fa-window-close"></i><?php endif; ?></center> </td>
                        <td><?php echo $cat->created_at; ?></td>
                        </tr>
<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
<?php else:?>
  <div class="panel-body">
  <p class="alert alert-warning">No hay productos, puedes empezar agregando tu lista de productos.</p>
  </div>
 <?php endif; ?>

                </div>
              </div>
            </div>

          </div>
