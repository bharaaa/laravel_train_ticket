<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket List</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
        }
        button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049; /* Darker Green */
        }
    </style>
</head>
<body>
    <h1>Ticket List</h1>
    <a href="{{ route('train-tickets.create') }}">Add Ticket</a>

    <ul>
        @foreach($tickets as $ticket)
            <li>
                <strong>{{ $ticket->name }}</strong><br>
                Nama Kereta: {{ $ticket->nama }}<br>
                Stasiun Asal: {{ $ticket->stasiun_asal }}<br>
                Stasiun Tujuan: {{ $ticket->stasiun_tujuan }}<br>
                Harga: {{ $ticket->harga }}<br>
                <form action="{{ route('train-tickets.buy', $ticket->id) }}" method="GET">
                    @csrf
                    <button type="submit">Buy</button>
                </form>
                | <a href="{{ route('train-tickets.edit', $ticket->id) }}">Edit</a> | <a href="{{ route('train-tickets.destroy', $ticket->id) }}">Delete</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
