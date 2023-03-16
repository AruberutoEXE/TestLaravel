<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Añadir persona Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php 
$message='illo sus muertos esto no funciona D:';
?>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Añadir persona</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Persona.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('Persona.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Elena">
                        @error('nombre')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Apellidos:</strong>
                        <input type="text" name="apellidos" class="form-control" placeholder="Nito del Bosque">
                        @error('apellidos')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Edad:</strong>
                        <input type="number" name="edad" class="form-control" placeholder="20">
                        @error("edad")
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