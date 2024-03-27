<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Ticket</title>
</head>
<body>
    <h1>Delete Ticket</h1>
    
    <p>Are you sure you want to delete this ticket?</p>
    <p><strong>Name:</strong> {{ $ticket->name }}</p>
    <p><strong>Destination:</strong> {{ $ticket->destination }}</p>
    <p><strong>Price:</strong> {{ $ticket->price }}</p>

    <form action="{{ route('train-tickets.destroy', $ticket->id) }}" method="POST">
        @csrf
     
