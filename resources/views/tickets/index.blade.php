    <h1>Listado de Tickets</h1>
    
    <a href="{{ url('tickets/create') }}" class="btn btn-primary">Crear Nuevo Ticket</a>
    <br>
    @if (Session::has ('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    <table class="table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->nombre }}</td>
                    <td>{{ $ticket->apellido }}</td>
                    <td>{{ $ticket->correo }}</td>
                    <td>{{ $ticket->area }}</td>
                    <td>
                        <a href="{{ route ('tickets.show', $ticket->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route ('tickets.edit', $ticket->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route ('tickets.destroy', $ticket->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

