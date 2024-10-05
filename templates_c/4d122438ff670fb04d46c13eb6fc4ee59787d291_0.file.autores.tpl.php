<?php
/* Smarty version 4.5.1, created on 2024-10-05 01:14:49
  from 'C:\xampp\htdocs\TPE-WEB2\templates\autores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_670076e99235b7_81987834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d122438ff670fb04d46c13eb6fc4ee59787d291' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\autores.tpl',
      1 => 1728083687,
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
function content_670076e99235b7_81987834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        <div class="container">
            <h1>Autores</h1> 
            <a href="autores/crear" class="btn btn-primary">Cargar</a>
            <section class="autores">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['autor']->value->imagen;?>
" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['autor']->value->biografia;?>
</p>
                        <a href="autores/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
" class="btn btn-primary">Ver libros</a>
                    </div>
                    <div class="card-body">
                        <a href="autores/editar/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
" class="btn btn-primary">Editar</a>
                        <a href="autores/eliminar/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
" class="btn btn-primary">Eliminar</a>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </section>
        </div>
        
        
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
