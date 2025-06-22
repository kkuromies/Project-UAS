<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apps Laravel 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background: lightgrey;">
    <div class="container mt-5">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div>
                            <h3 class="text-center my-4">App Laravel 12</h3>
                            <h5 class="text-center">by adinda</h5>
                            <hr>
                        </div>
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <a href="{{ route('products.create') }}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col" style="width: 20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 150px;">
                                            </td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ "Rp.".number_format($product->price, 2,',','.') }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-dark">Tampil</a>
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Ubah</a>
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data produk tidak ada.
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success'))
        Swal.fire({
    icon: "success",
    title: "Berhasil",
    text: "{{ session('success') }}",
    showConfirmButton: false,
    timer: 2000
        });
        @elseif (session('error'))
        Swal.fire({
            icon: "Error",
    title: "Gagal",
    text: "{{ session('success') }}",
    showConfirmButton: false,
    timer: 2000
        })
        @endif
    </script>
</body>
</html>