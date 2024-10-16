{include file='head.tpl'}  
{include file='header.tpl'} 
<div class="col-12 col-md-10 col-lg-7 col-xl-6 my-5">
    <div class="card shadow-lg rounded-4">
        <form method="POST" action="login" class="p-4">
            <h1 class="text-center">Iniciar sesión</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de usuario</label>
                <input type="text" name="username" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
        </form>
    </div>
</div>
{include file='footer.tpl'}