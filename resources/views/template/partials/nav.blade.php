<style type="text/css">
    body { padding-top: 70px; }
</style>
<nav class="navbar navbar-default navbar-fixed-top navbar-inner">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><img src="/images/Designcontest-Ecommerce-Business-Dollar.ico" height="50px" width="50px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('productos.index') }}">Productos</a></li>
                <li><a href="{{ route('categorias.index') }}">Categorias</a></li>
                <li><a href="{{ route('lugares.index') }}">Lugares</a></li>
                <li><a href="{{ route('users.index') }}">Usuarios</a></li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Inicia Sesión</a></li>
                    </li>
                </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>