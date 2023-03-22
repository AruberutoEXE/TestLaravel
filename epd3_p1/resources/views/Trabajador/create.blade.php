<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Añadir trabajador Form</title>
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
                    <h2>Añadir trabajador</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('Trabajador.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('Trabajador.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telefonos:</strong>
                        <input type="text" name="telefonos" class="form-control" placeholder="987456321;123456789">
                        @error('telefonos')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Persona:</strong>
                        <input type="number" name="persona_id" class="form-control" placeholder="0">
                        @error('persona_id')
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