<?php
/* Smarty version 4.5.1, created on 2024-10-05 01:34:32
  from 'C:\xampp\htdocs\TPE-WEB2\templates\crearAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67007b88abf897_06636904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2743553a4757d0938d0859eb6d7288c51a308247' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\crearAutor.tpl',
      1 => 1728084868,
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
function content_67007b88abf897_06636904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="container">
        <h1>Crear autor</h1>
        <form method="POST" action="autores/enviar">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Biografia</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="biografia" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a class="btn btn-primary" href="autores" role="button">Cancelar</a>
        </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
