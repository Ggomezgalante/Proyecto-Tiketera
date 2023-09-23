<div class="container">
    <h1 class="mt-5">Detalles del Ticket #{{ $ticket->id }}</h1>

    <table class="table table-bordered mt-3">
        <tbody>
            <tr>
                <th scope="row">Nombre</th>
                <td>{{ $ticket->nombre }}</td>
            </tr>
            <tr>
                <th scope="row">Apellido</th>
                <td>{{ $ticket->apellido }}</td>
            </tr>
            <tr>
                <th scope="row">Correo Electrónico</th>
                <td>{{ $ticket->correo }}</td>
            </tr>
            <tr>
                <th scope="row">Área</th>
                <td>{{ $ticket->area }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Volver</a>
</div>


