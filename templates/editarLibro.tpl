{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="col-12 col-md-10 col-lg-7 col-xl-6 my-5">
    <div class="card shadow-lg rounded-4">
        <form method="POST" action="libros/guardar" class="p-4">
            <h1>Editar libro</h1>
            <input type="hidden" name="old_isbn" value="{$old_isbn}">
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="number" class="form-control" name="isbn" required value="{$libro->isbn}">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo" required value="{$libro->titulo}">
            </div>
            <div class="mb-3">
                <label for="fecha_de_publicacion" class="form-label">Fecha de publicación</label>
                <input type="date" class="form-control" name="fecha_de_publicacion" required value="{$libro->fecha_de_publicacion}">
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial" required value="{$libro->editorial}">
            </div>
            <div class="mb-3">
                <label for="encuadernado" class="form-label">Encuadernado</label>
                <select class="form-select" name="encuadernado">
                    <option value="Tapa dura" {if $libro->encuadernado == "Tapa dura"}selected{/if}>Tapa dura</option>
                    <option value="Tapa blanda" {if $libro->encuadernado == "Tapa blanda"}selected{/if}>Tapa blanda</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                <textarea class="form-control" rows="4" name="sinopsis">{$libro->sinopsis}</textarea>
            <div class="mb-3">
                <label for="isbn" class="form-label">Autor</label>
                <select class="form-select" name="autor">
                {foreach from=$autores item=autor}
                    <option value="{$autor->id}" {if $autor->id == $libro->autor_id}selected{/if}>{$autor->nombre}</option>
                {/foreach}
                </select>
            </div>
            <div class="mb-3">
                <label for="nro_de_paginas" class="form-label">Número de páginas</label>
                <input type="number" class="form-control" name="nro_de_paginas" required value="{$libro->nro_de_paginas}">
            </div>
            <div class="d-flex justify-content-between">
                <a class="btn btn-secondary" href="libros" role="button">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
{include file='footer.tpl'}