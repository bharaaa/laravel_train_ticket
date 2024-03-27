<?php

namespace App\Http\Controllers;

use App\Models\TrainTicket;
use Illuminate\Http\Request;

class TrainTicketController extends Controller
{
public function index()
{
    $tickets = TrainTicket::all();
    return view('train-tickets.index', compact('tickets'));
}

public function create()
{
    return view('train-tickets.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|string',
        'stasiun_asal' => 'required|string',
        'stasiun_tujuan' => 'required|string',
        'harga' => 'required|integer',
    ]);

    $ticket = new TrainTicket();
    $ticket->nama = $validatedData['nama'];
    $ticket->stasiun_asal = $validatedData['stasiun_asal'];
    $ticket->stasiun_tujuan = $validatedData['stasiun_tujuan'];
    $ticket->harga = $validatedData['harga'];
    $ticket->save();
    return redirect()->route('train-tickets.index');
}

public function edit($id)
{
    $ticket = TrainTicket::findOrFail($id);
    return view('train-tickets.edit', compact('ticket'));
}

public function update(Request $request, $id)
{
    $ticket = TrainTicket::findOrFail($id);
    
    $request->validate([
        'nama' => 'required',
        'stasiun_asal' => 'required',
        'stasiun_tujuan' => 'required',
        'harga' => 'required|numeric',
    ]);

    $ticket->nama = $request->nama;
    $ticket->stasiun_asal = $request->stasiun_asal;
    $ticket->stasiun_tujuan = $request->stasiun_tujuan;
    $ticket->harga = $request->harga;

    $ticket->save();

    return redirect()->route('train-tickets.index')->with('success', 'Ticket updated successfully.');
}

public function destroy($id)
{
    $ticket = TrainTicket::findOrFail($id);
    $ticket->delete();
    return redirect()->route('train-tickets.index');
}

}
