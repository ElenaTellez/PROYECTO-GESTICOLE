<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
            Añadir un nuevo elemento al listado de castillos:
        </div>
        <div class="panel-body">
            <form action="../Controller/grabaCastillo.php"  enctype="multipart/form-data" method="POST">
                <h3>Título</h3>
                <input type="text" size="40" name="titulo">
                <h3>Imagen</h3>
                <input type="file" id="imagen" name="imagen">
                <br><h3>Descripción</h3>
                <textarea name="descripcion" cols="60" rows="6">
                </textarea><hr>
                <input type="submit" value="Aceptar">
            </form>
        </div>

    </div>
</div>
