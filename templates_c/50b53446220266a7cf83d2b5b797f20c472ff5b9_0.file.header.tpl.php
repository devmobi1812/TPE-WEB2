<?php
/* Smarty version 4.5.1, created on 2024-10-05 00:24:02
  from 'C:\xampp\htdocs\TPE-WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67006b024d2241_58829262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b53446220266a7cf83d2b5b797f20c472ff5b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\header.tpl',
      1 => 1728080639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67006b024d2241_58829262 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <header>  
      <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Libreria</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="libros">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="autores">Autores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login">Iniciar sesión</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    </header>
    <main>

    <?php }
}
