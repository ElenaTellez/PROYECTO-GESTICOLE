<?php
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$colegio = $_POST['colegio'];
$edad = $_POST['edad'];
$curso = $_POST['curso'];
$actividad = $_POST['actividad'];
?>
<div class="container">
    <h3 class="text-center">Se borrará el alumno seleccionado de la base de datos:</h3>
     
    <table  id="table" class="table table-responsive">
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Colegio</th>
            <th>Edad</th>
            <th>Curso</th>
            <th>Actividad</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td><?= $dni ?></td>
            <td><?= $nombre ?></td>
            <td><?= $colegio ?></td>
            <td><?= $edad ?></td>
            <td><?= $curso ?></td>
            <td><?= $actividad ?></td>
        </tr>            
    </table>        
    <h3>¿Está seguro?</h3>

    <table>
        <tr>
            <td>
                <form action="pagina.php" method="post">
                    <input type="hidden" name="ejercicio" value="02">
                    <input type="hidden" name="dni" value="<?= $dni ?>">
                    <input type="hidden" name="accion" value="Eliminar">
                    <button type="submit" class="btn btn-primary">
                        Eliminar
                    </button>
                </form>
            </td>
            <td>&nbsp;</td>
            <td>
                <a class="btn btn-danger" href="pagina.php?ejercicio=02" role="button">Cancelar</a>
            </td>
        </tr>
    </table>
</div>
