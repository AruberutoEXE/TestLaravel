<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar empleado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php 
$message='illo sus muertos esto no funciona D:';
?>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Persona</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Persona.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('Persona.update',$Persona->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Horas trabajadas:</strong>
                        <input type="number" name="horasTrabajadas" class="form-control" placeholder="500">
                        @error('horasTrabajadas')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Precio por hora:</strong>
                        <input type="number" name="precioPorHora" class="form-control" placeholder="75">
                        @error('precioPorHora')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Trabajador:</strong>
                        <input type="number" name="trabajador_id" class="form-control" placeholder="20">
                        @error("trabajador_id")
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>