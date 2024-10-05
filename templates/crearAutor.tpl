{include file='head.tpl'}  
{include file='header.tpl'} 
    <div class="container">
        <h1>Crear autor</h1>
        <form method="POST" action="autores/enviar">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Biografia</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="biografia" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a class="btn btn-primary" href="autores" role="button">Cancelar</a>
        </form>
    </div>

{include file='footer.tpl'}