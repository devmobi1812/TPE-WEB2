{include file='head.tpl'}  
{include file='header.tpl'} 
        <div class="container">
            <h1>Autores</h1> 
            {if {$isAdmin}}
                <a href="autores/crear" class="btn btn-primary">Cargar</a>
            {/if}
            <section class="autores">
                {foreach from=$autores item=$autor}
                <div class="card" style="width: 18rem;">
                    <img src="{$autor->imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$autor->nombre}</h5>
                        <p class="card-text">{$autor->biografia}</p>
                        <a href="autores/{$autor->id}" class="btn btn-primary"><i class="fa-solid fa-eye"></i>  Ver libros</a>
                        {if {$isAdmin}}
                            <a href="autores/editar/{$autor->id}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a> <!--BOTON DE EDITAR-->
                            <a href="autores/eliminar/{$autor->id}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>   <!--BOTON DE ELIMINAR-->
                        {/if}
                    </div>
                    
                </div>
                {/foreach}
            </section>
        </div>
        
        
{include file='footer.tpl'}