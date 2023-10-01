<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $datosTicket = $request->except('_token');
    
        DB::table('tickets')->insert($datosTicket);
    
        return redirect('tickets')->with('mensaje', 'Ticket creado exitosamente.');
    }

    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.show', compact('ticket'));
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $ticket->update($request->all());

        return redirect('tickets')->with('mensaje', 'Ticket actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect('tickets')->with('mensaje', 'Ticket eliminado exitosamente.');
    }
}

