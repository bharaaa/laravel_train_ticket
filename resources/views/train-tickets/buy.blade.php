<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Tiket</title>
</head>
<body>
    <h1>Pembelian Tiket</h1>
    <p>Silakan isi formulir di bawah ini untuk membeli tiket:</p>
    <form action="{{ route('train-tickets.store', $ticket->id) }}" method="POST">
        @csrf
        <label for="quantity">Jumlah Tiket:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1">
        <button type="submit">Beli Tiket</button>
    </form>
</body>
</html>
