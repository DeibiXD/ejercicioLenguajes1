<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    
</head>
<body>
    <div class="container mt-5">
        
            <h1>Agregar nuevo producto</h1>
            <div></div>
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <form action="{{ route('almacenarProducto') }}"  method="post">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="codigoProducto" class="form-label">Codigo Producto</label>
                            <input type="text" class="form-control" id="codigoProducto" placeholder="codigoProducto" name="codigoProducto">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" class="form-control" id="precio" placeholder="precio" name="precio">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="date" class="form-control" id="stock" placeholder="stock" name="stock">
                        </div>
        
                        <div class="mb-3">
                            <a href="{{ route('verProductos') }}" class="btn btn-secondary">Volver</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
        
                    </form>
                </div>
            </div>

        
    </div>

</body>
</html>