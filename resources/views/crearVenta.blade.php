<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venta</title>
    
</head>
<body>
    <div class="container mt-5">
        
            <h1>Crear Venta</h1>
            <div></div>
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <form action="{{ route('almacenarVenta') }}"  method="post">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="fechaVenta" class="form-label">Fecha de Venta</label>
                            <input type="date" class="form-control" id="fechaVenta" placeholder="fechaVenta" name="fechaVenta">
                        </div>
                        <div class="mb-3">
                            <label for="codigoProducto" class="form-label">Codigo Producto</label>
                            <input type="text" class="form-control" id="codigoProducto" placeholder="codigoProducto" name="codigoProducto">
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad" placeholder="cantidad" name="cantidad">
                        </div>
        
                        <div class="mb-3">
                            <a href="{{ route('verVentas') }}" class="btn btn-secondary">Volver</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
        
                    </form>
                </div>
            </div>

        
    </div>

</body>
</html>