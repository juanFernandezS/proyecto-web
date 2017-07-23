<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UBBNews</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <li><a class="btn btn-inverse" data-toggle="modal" data-target="#myModal">
                            <i class="glyphicon glyphicon-log-in"></i>  Iniciar Sesión</a></li>
                    </li>

                </ul>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Iniciar</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="rut" class="form-control" placeholder="Rut" value="">
                            <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                        </div>
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" placeholder="Clave">
                            <span class="input-group-addon"><i class=" glyphicon glyphicon-lock"></i></span>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->

                    <div class="modal-footer">
                        <button class="form-control btn btn-default">
                            <i class="glyphicon glyphicon-log-in"></i> Login</button>
                        <li><a href="">Crear cuenta</a></li>
                    </div><!-- /.modal-footer -->
                </form>

            </div> <!-- /.modal-body -->

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
