{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="col-12 col-md-10 col-lg-7 col-xl-6 my-5">
    <div class="card shadow-lg rounded-4">
        <form method="POST" action="autores/guardar" class="p-4">
            <h1>Editar autor</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="nombre" value="{$autor.nombre}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Biografía</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="biografia" value="{$autor.biografia}" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="imagen" value="{$autor.imagen}" >
            </div>
            <input type="hidden" name="id" value="{$autor.id}">
            <div class="d-flex justify-content-between">
                <a class="btn btn-secondary" href="autores" role="button">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
{include file='footer.tpl'}