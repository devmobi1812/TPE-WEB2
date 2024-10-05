{include file='head.tpl'}  
{include file='header.tpl'} 
        <div class="container">
            <h1>Autores</h1> 
            <a href="autores/crear" class="btn btn-primary">Cargar</a>
            <section class="autores">
                {foreach from=$autores item=$autor}
                <div class="card" style="width: 18rem;">
                    <img src="{$autor->imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$autor->nombre}</h5>
                        <p class="card-text">{$autor->biografia}</p>
                        <a href="autores/{$autor->id}" class="btn btn-primary">Ver libros</a>
                    </div>
                    <div class="card-body">
                        <a href="autores/editar/{$autor->id}" class="btn btn-primary">Editar</a>
                        <a href="autores/eliminar/{$autor->id}" class="btn btn-primary">Eliminar</a>
                    </div>
                </div>
                {/foreach}
            </section>
        </div>
        
        
{include file='footer.tpl'}