<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Empleados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Empleados</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('Empleado.create') }}"> Create empleado</a>
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
                    <th>Horas trabajadas</th>
                    <th>Precio por hora</th>
                    <th>Trabajador</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Empleado as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->horasTrabajadas }}</td>
                        <td>{{ $empleado->precioPorHora }}</td>
                        <td>{{ $empleado->trabajador_id }}</td>
                        <td>
                            <form action="{{ route('Empleado.destroy',$empleado->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('Empleado.edit',$empleado->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <button class="btn bg-dark text-white" type="button" onclick="window.location='{{ route("Persona.index") }}'">Empleados</button>
        <button class="btn bg-dark text-white" type="button" onclick="window.location='{{ route("Trabajador.index") }}'">Trabajadores</button>
        <button class="btn bg-dark text-white" type="button" onclick="window.location='{{ route("Gerente.index") }}'">Gerentes</button>
        
    </div>
</body>
</html>