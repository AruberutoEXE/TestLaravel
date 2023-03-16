<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerentes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Gerentes</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('Gerente.create') }}"> Create gerente</a>
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
                    <th>Salario</th>
                    <th>Trabajador</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Gerente as $gerente)
                    <tr>
                        <td>{{ $gerente->id }}</td>
                        <td>{{ $gerente->salario}}</td>
                        <td>{{ $gerente->trabajador_id}}</td>
                        <td>
                            <form action="{{ route('Gerente.destroy',$gerente->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('Gerente.edit',$gerente->id) }}">Edit</a>
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
        <button class="btn bg-dark text-white" type="button" onclick="window.location='{{ route("Persona.index") }}'">Gerentes</button>
        
    </div>
</body>
</html>