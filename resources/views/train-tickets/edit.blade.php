<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ticket</title>
</head>
<body>
    <h1>Edit Ticket</h1>

    <form method="POST" action="{{ route('train-tickets.update', $ticket->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" value="{{ $ticket->nama }}" required>
        </div>

        <div>
            <label for="stasiun_asal">Stasiun Asal</label>
            <input id="stasiun_asal" type="text" name="stasiun_asal" value="{{ $ticket->stasiun_asal }}" required>
        </div>

        <div>
            <label for="stasiun_tujuan">Stasiun Tujuan</label>
            <input id="stasiun_tujuan" type="text" name="stasiun_tujuan" value="{{ $ticket->stasiun_tujuan }}" required>
        </div>

        <div>
            <label for="harga">Harga</label>
            <input id="harga" type="number" name="harga" value="{{ $ticket->harga }}" required>
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
