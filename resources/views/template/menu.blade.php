<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PRD</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                <li><a href="{{ url('formulario1') }}">Forma</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="./"><i class="glyphicon glyphicon-calendar"></i> <?php echo $hoy = date("d/m/Y");  ?> <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Bienvenido</a></li>
            </ul>
        </div>
    </div>
</nav>

