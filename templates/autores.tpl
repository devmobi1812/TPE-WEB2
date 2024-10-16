{include file='head.tpl'}  
{include file='header.tpl'} 
    <div class="col-12 col-md-10 col-lg-7 col-xl-6 my-5">
            <h1>Autores</h1> 
            {if {$isAdmin}}
                <a href="autores/crear" class="btn btn-primary mb-3"><i class="fa-solid fa-circle-plus"></i> Cargar</a>
            {/if}
            <section class="autores">
                {foreach from=$autores item=$autor}
                <div class="card card-autor" >
                    <img src="{$autor->imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{$autor->nombre}</h5>
                        <p class="card-text text-truncate">{$autor->biografia}</p>
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