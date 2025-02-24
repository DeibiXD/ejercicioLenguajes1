<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h1>Ventas</h1>
        </div>

        <div class="d-flex justify-content-between mb-3">
            
            <a href="{{ route('crearVenta')}}" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i>
                Crear
            </a>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Codigo Venta</th>
                    <th>Fecha Venta</th>
                    <th>Codigo Producto</th>
                    <th>Cantidad</th>
                    <th>SubTotal</th>
                    <th>ISV</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                <tr>
                    <td>{{$venta->codigo}}</td>
                    <td>{{$venta->fechaVenta}}</td>
                    <td>{{$venta->codigoProducto}}</td>
                    <td>{{$venta->cantidad}}</td>
                    <td>{{$venta->subtotal}}</td>
                    <td>{{ $venta->ISV }}</td>
                    <td>{{$venta->total}}</td>
                    <td class="action-buttons">
                        <a href="" class="btn btn-primary btn-sm">
                            Editar
                        </a>
                        <a href="" class="btn btn-info btn-sm">                            
                            Visualizar
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                            Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>