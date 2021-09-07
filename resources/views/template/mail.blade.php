<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @php
        $total=0;
    @endphp


    <div class="container">
        <h1> Anda telah melakukan pembelian:</h1>

        <table>
            <thead>
                <th> no</th>
                <th> Nama Product</th>
                <th> Harga</th>
                <th> Qty</th>
                <th> Subtotal</th>
            </thead>
            <tbody>
                	@foreach ( $carts as $cart)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cart->product->name }}</td>
                        <td>{{ $cart->product->price }}</td>
                        <td>{{ $cart->product->qty }}</td>
                        <td>Rp {{ number_format($cart->qty * $cart->product->price) }}</td>

                        @php
                            $total += ($cart->qty * $cart->product->price)
                        @endphp
                    @endforeach
            </tbody>
        </table>

        <h1> Total Pesanan: Rp {{ number_format($total) }}</</h1>
    </div>



    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
