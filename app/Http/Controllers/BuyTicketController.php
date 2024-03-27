<?php

namespace App\Http\Controllers;

use App\Models\BuyTicket;
use Illuminate\Http\Request;
use App\Models\TrainTicket;
use Illuminate\Support\Facades\Auth;

class BuyTicketController extends Controller
{
    public function index()
    {
        $tickets = TrainTicket::all();
        return view('train-tickets.index', compact('tickets'));
    }

    public function buy($id)
    {
        $ticket = TrainTicket::findOrFail($id);
        return view('train-tickets.buy', compact('ticket'));
    }

    public function storeTrans(Request $request, $id)
    {
    $ticket = TrainTicket::findOrFail($id);

    $quantity = $request->input('quantity');

    $buyTicket = new BuyTicket();
    $buyTicket->user_id = Auth::id();
    $buyTicket->train_ticket_id = $ticket->id;
    $buyTicket->quantity = $quantity;
    
    $buyTicket->save();

    return redirect()->route('train-tickets.index')->with('success', 'Ticket purchased successfully!');
    }
}
