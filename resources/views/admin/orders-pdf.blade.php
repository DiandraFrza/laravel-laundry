<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Pesanan</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; text-align: left; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Laporan Data Pesanan Laundry</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Berat</th>
                <th>Total</th>
                <th>Jenis Paket</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td class="text-center">{{ $order->nama }}</td>
                <td class="text-center">{{ $order->alamat }}</td>
                <td class="text-center">{{ $order->noHp }}</td>
                <td class="text-center">{{ $order->total_berat }} KG</td>
                <td class="text-center">{{ $order->jenis_paket }}</td>
                <td class="text-right">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                <td class="text-center">{{ ucfirst($order->status) }}</td>
                <td class="text-center">{{ $order->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>