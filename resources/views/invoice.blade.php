<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body { font-family: Arial; }
        .container { width: 80%; margin: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px;}
        table, th, td { border: 1px solid #000; padding: 10px; }
        .text-right { text-align: right; }
        .btn-group {
    margin-top: 30px;
    display: flex;
    gap: 15px;
}

.btn {
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s;
    font-weight: bold;
}

/* Print button */
.print-btn {
    background-color: #28a745;
    color: white;
}

.print-btn:hover {
    background-color: #218838;
}

/* Home button */
.home-btn {
    background-color: #007bff;
    color: white;
}

.home-btn:hover {
    background-color: #0069d9;
}

/* Hide buttons when printing */
@media print {
    .btn-group {
        display: none;
    }
}
    </style>
</head>
<body>

<div class="container">
    <h2>Invoice #{{ $order->id }}</h2>

    <p><strong>Name:</strong> {{ $order->name }}</p>
    <p><strong>Phone:</strong> {{ $order->phone }}</p>
    <p><strong>Address:</strong> {{ $order->address }}</p>

    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>

        @foreach($items as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>${{ $item['price'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>${{ $item['price'] * $item['quantity'] }}</td>
        </tr>
        @endforeach

        <tr>
            <td colspan="3" class="text-right"><strong>Total</strong></td>
            <td><strong>${{ $order->total }}</strong></td>
        </tr>
    </table>

    <br>
    <div class="btn-group">
    <button class="btn print-btn" onclick="window.print()">
        🖨️o Print Invoice
    </button>

    <a href="/" class="btn home-btn">
        🏠 Return to HomePage
    </a>
</div>
</div>

</body>
</html>