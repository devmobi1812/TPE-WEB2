{include file='head.tpl'}  
{include file='header.tpl'} 
    <div class="container">
        <h1>Editar autor</h1>
        <form method="POST" action="autores/guardar">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="{$autor.nombre}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Biografia</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="biografia" value="{$autor.biografia}" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imagen" value="{$autor.imagen}" >
            </div>
            <input type="hidden" name="id" value="{$autor.id}">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-primary" href="autores" role="button">Cancelar</a>
        </form>
    </div>
{include file='footer.tpl'}