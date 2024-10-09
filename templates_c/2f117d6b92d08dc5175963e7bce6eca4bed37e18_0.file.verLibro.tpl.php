<?php
/* Smarty version 4.5.1, created on 2024-10-08 00:42:51
  from '/var/www/html/templates/verLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6704800b328051_82419297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f117d6b92d08dc5175963e7bce6eca4bed37e18' => 
    array (
      0 => '/var/www/html/templates/verLibro.tpl',
      1 => 1728322820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6704800b328051_82419297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<div class="container">
<table class="table">
    <tbody>
        <tr>
            <th scope="row">ISBN</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->isbn;?>
</td>
        </tr>
        <tr>
            <th scope="row">Título</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</td>
        </tr>
        <tr>
            <th scope="row">Fecha de publicación</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->fecha_de_publicacion;?>
</td>
        </tr>
        <tr>
            <th scope="row">Editorial</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->editorial;?>
</td>
        </tr>
        <tr>
            <th scope="row">Encuadernado</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->encuadernado;?>
</td>
        </tr>
        <tr>
            <th scope="row">Sinopsis</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->sinopsis;?>
</td>
        </tr>
        <tr>
            <th scope="row">Autor</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->autor_nombre;?>
</td>
        </tr>
        <tr>
            <th scope="row">Número de páginas</th>
            <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->nro_de_paginas;?>
</td>
        </tr>
    </tbody>
</table>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
