<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Show Product</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <style>
            body {
                background-color: #f0f4f7;
                /* Background color */
            }
            .card {
                border-radius: 0.5rem;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            }
            .card-body {
                padding: 2rem;
            }
            .card-img {
                max-width: 100%;
                height: auto;
                border-radius: 0.5rem;
            }
            .card-title {
                font-size: 1.5rem;
                font-weight: bold;
                margin-bottom: 1rem;
            }
            .card-price {
                font-size: 1.25rem;
                color: #28a745;
                /* Green color for price */
                margin-bottom: 1rem;
            }
            .card-description {
                margin-bottom: 1rem;
            }
            .card-stock {
                font-size: 1rem;
                color: #6c757d;
                /* Gray color for stock */
            }
        </style>
    </head>
    <body>

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <img
                                src="{{ asset('/storage/products/'.$product->image) }}"
                                class="card-img"
                                alt="{{ $product->title }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <h3 class="card-title">{{ $product->title }}</h3>
                            <hr/>
                            <p class="card-price">{{ "Rp " . number_format($product->price, 2, ',', '.') }}</p>
                            <p class="card-description">{!! $product->description !!}</p>
                            <hr/>
                            <p class="card-stock">Stock:
                                {{ $product->stock }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>