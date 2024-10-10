{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="container">
<table class="table">
    <thead>
    <tr>
        <th scope="col">ISBN</th>
        <th scope="col">Libro</th>
        <th scope="col">Autor</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    {foreach from=$libros item=$libro}
    <tbody>
        <tr>
            <td>{$libro->isbn}</td>
            <td>{$libro->titulo}</td>
            <td>{$libro->autor_nombre}</td>
            <td>
                <a href="/libros/{$libro->isbn}" class="btn btn-primary">
                    <i class="fa-solid fa-eye"></i>
                </a>
            {if $isAdmin}
                <a href="/libros/editar/{$libro->isbn}" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="/libros/eliminar/{$libro->isbn}" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </a>
            {/if}
            </td>
        </tr>
    </tbody>
    {/foreach}
</table>
</div>
{include file='footer.tpl'}