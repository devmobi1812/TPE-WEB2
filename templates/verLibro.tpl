{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="col-12 col-md-10 col-lg-7 col-xl-6 my-5">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">ISBN</th>
                <td>{$libro->isbn}</td>
            </tr>
            <tr>
                <th scope="row">Título</th>
                <td>{$libro->titulo}</td>
            </tr>
            <tr>
                <th scope="row">Fecha de publicación</th>
                <td>{$libro->fecha_de_publicacion}</td>
            </tr>
            <tr>
                <th scope="row">Editorial</th>
                <td>{$libro->editorial}</td>
            </tr>
            <tr>
                <th scope="row">Encuadernado</th>
                <td>{$libro->encuadernado}</td>
            </tr>
            <tr>
                <th scope="row">Sinopsis</th>
                <td>{nl2br($libro->sinopsis)}</td>
            </tr>
            <tr>
                <th scope="row">Autor</th>
                <td>{$libro->autor_nombre}</td>
            </tr>
            <tr>
                <th scope="row">Número de páginas</th>
                <td>{$libro->nro_de_paginas}</td>
            </tr>
        </tbody>
    </table>
</div>
{include file='footer.tpl'}