<?php $i = 1; ?>
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">Roles de solicitantes</h4>
            </div>
            <?php if(isset($applicant_role) && !empty($applicant_role)): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Creado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($applicant_role as $key => $value):  ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo substr($value['create_at'], 11)?></td>
                                <!--<td><a href="backend/dependencias/eliminar-dependencia/<?php echo $value['slug']; ?>">Eliminar</a></td>-->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info" role="alert">
                    No existen roles.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>