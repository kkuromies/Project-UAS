<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .card {
            background-color: #f3f4f6; 
        }
        .card-title {
            color: #007bff; 
        }
        .card-body {
            padding: 20px; 
        }
        .card-body p {
            color:rgb(0, 0, 0); 
            align: justify; 
        }
        .btn-custom {
            background-color: #f3f4f6; 
        }
    </style>
</head>
<body style="background: rgb(255, 255, 255)">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route ('welcome') }}" class="btn btn-custom mb-4">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/products/'.$product->image) }}" alt="" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $product->title }}</h3>
                        <p>{{ "Rp.".number_format($product->price, 2,',','.') }}</p>
                        <hr/>
                        <h5>Deskripsi</h5>
                            <p>{!! $product->description !!}</p>
                        <hr/>
                        <p>Stock: {{ $product->stock }}</p>
                        <a href="{{ route('keranjang_checkout', ['product_id' => $product->id]) }}" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> <!-- Bootstrap Icons -->
</body>
</html>