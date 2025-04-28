<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Product</title>
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
            .form-group {
                margin-bottom: 1.5rem;
            }
            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
            }
            .btn-primary:hover {
                background-color: #0069d9;
                border-color: #0062cc;
            }
            .btn-warning {
                background-color: #ffc107;
                border-color: #ffc107;
            }
            .btn-warning:hover {
                background-color: #e0a800;
                border-color: #d39e00;
            }
            .alert {
                border-radius: 0.5rem;
            }
        </style>
    </head>
    <body>

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form
                                action="{{ route('products.update', $product->id) }}"
                                method="POST"
                                enctype="multipart/form-data">
                                @csrf @method('PUT')

                                <div class="row">
                                    <div class="col-md-4">
                                        <img
                                            src="{{ asset('/storage/products/'.$product->image) }}"
                                            class="img-fluid rounded mb-3"
                                            alt="Product Image">
                                        <input
                                            type="file"
                                            class="form-control mb-3 @error('image') is-invalid @enderror"
                                            name="image">
                                        <!-- error message untuk image -->
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="font-weight-bold">TITLE</label>
                                            <input
                                                type="text"
                                                class="form-control @error('title') is-invalid @enderror"
                                                name="title"
                                                value="{{ old('title', $product->title) }}"
                                                placeholder="Enter Product Title">
                                            <!-- error message untuk title -->
                                            @error('title')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">DESCRIPTION</label>
                                            <textarea
                                                class="form-control @error('description') is-invalid @enderror"
                                                name="description"
                                                rows="5"
                                                placeholder="Enter Product Description">{{ old('description', $product->description) }}</textarea>
                                            <!-- error message untuk description -->
                                            @error('description')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold">PRICE</label>
                                                    <input
                                                        type="number"
                                                        class="form-control @error('price') is-invalid @enderror"
                                                        name="price"
                                                        value="{{ old('price', $product->price) }}"
                                                        placeholder="Enter Product Price">
                                                    <!-- error message untuk price -->
                                                    @error('price')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold">STOCK</label>
                                                    <input
                                                        type="number"
                                                        class="form-control @error('stock') is-invalid @enderror"
                                                        name="stock"
                                                        value="{{ old('stock', $product->stock) }}"
                                                        placeholder="Enter Product Stock">
                                                    <!-- error message untuk stock -->
                                                    @error('stock')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('description');
        </script>
    </body>
</html>