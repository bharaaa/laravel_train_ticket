<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($ticket) ? 'Edit Ticket' : 'Create Ticket' }}</title>
</head>
<body>
    <h1>{{ isset($ticket) ? 'Edit Ticket' : 'Create Ticket' }}</h1>

    <form method="POST" action="{{ isset($ticket) ? route('train-tickets.update', ['id' => $ticket->id]) : route('train-tickets.store') }}">

        @csrf

        @if(isset($ticket))
            @method('PUT')
        @endif

        <div>
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" value="{{ isset($ticket) ? $ticket->nama : old('nama') }}" required>
        </div>

        <div>
            <label for="stasiun_asal">Stasiun Asal</label>
            <input id="stasiun_asal" type="text" name="stasiun_asal" value="{{ isset($ticket) ? $ticket->stasiun_asal : old('stasiun_asal') }}" required>
        </div>

        <div>
            <label for="stasiun_tujuan">Stasiun Tujuan</label>
            <input id="stasiun_tujuan" type="text" name="stasiun_tujuan" value="{{ isset($ticket) ? $ticket->stasiun_tujuan : old('stasiun_tujuan') }}" required>
        </div>

        <div>
            <label for="harga">Harga</label>
            <input id="harga" type="number" name="harga" value="{{ isset($ticket) ? $ticket->harga : old('harga') }}" required>
        </div>

        <div>
            <button type="submit">{{ isset($ticket) ? 'Update' : 'Create' }}</button>
        </div>
    </form>
</body>
</html>
