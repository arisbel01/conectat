<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agregar Paquete de Internet</title>
    <link href="{{ asset('css/agregar-paq.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Agregar Paquete de Internet</h1>
        <div class="row">
            <!-- Columna del formulario -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/agregar-paquete">
                            <div class="form-group">
                                <label for="nombre_paquete">Nombre del Paquete</label>
                                <input type="text" name="nombre_paquete" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="caracteristicas_paquete">Características</label>
                                <input type="text" name="caracteristicas_paquete" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="velocidad_paquete">Velocidad</label>
                                <input type="text" name="velocidad_paquete" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fk_promocion">Promoción</label>
                                <select name="fk_promocion" class="form-control" required>
                                    @if (isset($promociones) && $promociones->count() > 0)
                                        @foreach($promociones as $promocion)
                                            <option value="{{ $promocion->id_promocion }}">{{ $promocion->promocion }}</option>
                                        @endforeach
                                    @else
                                        <option value="">No hay promociones disponibles</option>
                                    @endif
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Agregar Paquete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Grid row -->
    <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Login:</h3>
                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" class="form-control">
                                <label for="defaultForm-email">Your email</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control">
                                <label for="defaultForm-pass">Your password</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default waves-effect waves-light">next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                    <div class="card indigo form-white">
                        <div class="card-body">
                            <h3 class="text-center white-text py-3"><i class="fa fa-user"></i> Login:</h3>
                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <input type="text" id="defaultForm-email1" class="form-control">
                                <label for="defaultForm-email1">Your email</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix white-text"></i>
                                <input type="password" id="defaultForm-pass1" class="form-control">
                                <label for="defaultForm-pass1">Your password</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-white waves-effect waves-light">next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
</body>

</html>
