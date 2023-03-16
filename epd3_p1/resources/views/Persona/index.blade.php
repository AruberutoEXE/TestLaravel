<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Personas</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('Persona.create') }}"> Create persona</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>persona Nombre</th>
                    <th>persona Apellidos</th>
                    <th>persona Edad</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Persona as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->apellidos }}</td>
                        <td>{{ $persona->edad }}</td>
                        <td>
                            <form action="{{ route('Persona.destroy',$persona->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('Persona.edit',$persona->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <button class="btn bg-dark text-white" type="button" onclick="window.location='{{ route("Empleado.index") }}'">Empleados</button>
        <button class="btn bg-dark text-white" type="button" onclick="window.location='{{ route("Trabajador.index") }}'">Trabajadores</button>
        <button class="btn bg-dark text-white" type="button" onclick="window.location='{{ route("Gerente.index") }}'">Gerentes</button>
        
    </div>
</body>
</html>