<?php $i = 1; ?>
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">Tipos de solicitudes</h4>
            </div>
                <?php if(isset($type_requests) && !empty($type_requests)): ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Creado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($type_requests as $key => $value):  ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['slug']; ?></td>
                                    <td><?php echo substr($value['create_at'], 11)?></td>
                                    <td><a href="backend/solicitudes/actualizar-tipo-solicitud/<?php echo $value['slug']; ?>">Actualizar</a></td>
                                    <td><a href="backend/solicitudes/eliminar-tipo-solicitud/<?php echo $value['slug']; ?>">Eliminar</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="alert alert-info" role="alert">
                        Lo sentimos no existen tipos de solicitudes a mostrar.
                    </div>
                <?php endif; ?>
            </div>    
        </div>
    </div>
</div>