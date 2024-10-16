{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="col-12 col-md-10 col-lg-7 col-xl-6 my-5">
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
                    <a href="libros/{$libro->isbn}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a><!--BOTON DE VER-->
                    {if {$isAdmin}}
                        <a href="libros/editar/{$libro->isbn}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                        <a href="libros/eliminar/{$libro->isbn}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>   <!--BOTON DE ELIMINAR-->
                    {/if}
                </td>
            </tr>
        </tbody>
        {/foreach}
    </table>
</div>
{include file='footer.tpl'}
