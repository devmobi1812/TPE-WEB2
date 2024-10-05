<?php
/* Smarty version 4.5.1, created on 2024-10-05 00:49:28
  from 'C:\xampp\htdocs\TPE-WEB2\templates\verAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_670070f8cfeea0_41402660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f527a0ade522fce45072e7f8fbd8677714812e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\verAutor.tpl',
      1 => 1728082166,
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
function content_670070f8cfeea0_41402660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <tbody>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->isbn;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->autor_nombre;?>
</td>
                    <td>
                        <a href="libros/<?php echo $_smarty_tpl->tpl_vars['libro']->value->isbn;?>
" class="btn btn-primary">Ver</a>
                        <a href="libros/editar/<?php echo $_smarty_tpl->tpl_vars['libro']->value->isbn;?>
" class="btn btn-primary">Editar</a>
                        <a href="libros/eliminar/<?php echo $_smarty_tpl->tpl_vars['libro']->value->isbn;?>
" class="btn btn-primary">Eliminar</a>
                    </td>
                </tr>
            </tbody>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
