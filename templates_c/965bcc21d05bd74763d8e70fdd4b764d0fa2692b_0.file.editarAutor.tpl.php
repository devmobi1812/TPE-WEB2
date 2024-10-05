<?php
/* Smarty version 4.5.1, created on 2024-10-05 03:09:25
  from 'C:\xampp\htdocs\TPE-WEB2\templates\editarAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_670091c5b76d50_81561786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965bcc21d05bd74763d8e70fdd4b764d0fa2692b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\editarAutor.tpl',
      1 => 1728090554,
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
function content_670091c5b76d50_81561786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="container">
        <h1>Editar autor</h1>
        <form method="POST" action="autores/guardar">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value['nombre'];?>
">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Biografia</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="biografia" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value['biografia'];?>
" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imagen" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value['imagen'];?>
" >
            </div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value['id'];?>
">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-primary" href="autores" role="button">Cancelar</a>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
