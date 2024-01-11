<p class="lead">
</p>
<div class="container">
	<div class="row">
        <div class="col-xs-12">
            <div class="container-form-admin">
                <h3 class="text-info text-center">IVA</h3>
                <?php
                	$admin=ejecutarSQL::consultar("SELECT * FROM administrador WHERE id='".$_SESSION['adminID']."'");
                	$dataAdmin=mysqli_fetch_array($admin, MYSQLI_ASSOC);
                ?>
                <form action="./process/updateAdmin.php" method="POST" role="form" class="FormCatElec" data-form="update">
                	<input type="hidden" name="admin-code" value="<?php echo $_SESSION['adminID']; ?>">
                	<input type="hidden" name="admin-name-old" value="<?php echo $dataAdmin['Nombre']; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre de usuario</label>
                                    <input class="form-control" type="text" name="admin-name" value="<?php echo $dataAdmin['Nombre']; ?>" maxlength="9" pattern="[a-zA-Z0-9]{4,9}" required="">
                                </div>
                            </div>
                            
                            
                            
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Actualizar cuenta</button></p>
                </form>
            </div>
        </div>
    </div>
</div>