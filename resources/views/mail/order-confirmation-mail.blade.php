<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        /* Add custom styles for email */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details th,
        .order-details td {
            padding: 8px 12px;
            text-align: left;
        }

        .order-details th {
            background-color: #f4f4f4;
            color: #333;
        }

        .order-details td {
            background-color: #fafafa;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Gamala Ghar</h1>

        <p>Dear {{ $user->name }},</p>

        <p>Your order has been confirmed. We are pleased to inform you that your order will be delivered within 3 days.</p>

        <div class="order-details">
            <h2>Order Details</h2>
            <p><strong>Order Number:</strong> {{ $orderNumber }}</p>
            <table width="100%" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['quantity'] }}</td>
                        <td>NPR {{ $product['price'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p><strong>Total Price:</strong> NPR {{ $totalPrice }}</p>
        </div>

        <footer>
            <p>Thank you for choosing Gamala Ghar.</p>
        </footer>
    </div>
</body>

</html>
