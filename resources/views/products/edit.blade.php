<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background: lightgrey">
    <div class="container mt-5 md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Upload Gambar</label>
                                <input type="file" name="image" id="" class="form-control @error('image') is-invalid @enderror">
                                {{-- tampilkan Pesan error --}}
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi Product</label>
                                <textarea name="description" id="" class="form-control" @error('description') is-invalid @enderror rows="5" placeholder="Masukan Deskripsi">{{ old ('description', $product->description) }}</textarea>
                                {{-- tampilkan pesan error --}}
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Judul</label>
                                <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Judul" value="{{ old('title', $product->title) }}">
                                {{-- tampilkan pesan error --}}
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">harga</label>
                                <input type="number" name="price" id="" class="form-control @error('price') is-invalid @enderror" placeholder="Masukan Judul" value="{{ old('price', $product->price) }}">
                                {{-- tampilkan pesan error --}}
                                @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                                <div class="form-group mb-3">
                                <label class="font-weight-bold">Stok</label>
                                <input type="number" name="stock" id="" class="form-control @error('stock') is-invalid @enderror" placeholder="Masukan Judul" value="{{ old('stock', $product->stock) }}">
                                {{-- tampilkan pesan error --}}
                                @error('stock')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-md btn-primary me-3">Ubah</button>
                            <button type="reset" class="btn btn-md btn-primary me-3">Batal</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</body>
</html>