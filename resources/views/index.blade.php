<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Products</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <style>
            body {
                background-color: #f0f4f7;
                /* Background color */
            }
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100%;
                background-color: #007bff;
                /* Sidebar background */
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
            .sidebar a {
                display: block;
                padding: 0.5rem 1rem;
                color: #ffffff;
                /* Sidebar text color */
                text-decoration: none;
            }
            .sidebar a:hover {
                background-color: #0056b3;
                /* Sidebar link hover color */
            }
            .content {
                margin-left: 250px;
                /* Adjust margin to accommodate sidebar */
                padding: 1rem;
            }
            .card {
                border-radius: 0.5rem;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            }
            .btn {
                font-size: 0.875rem;
                padding: 0.75rem 1.5rem;
                border-radius: 0.375rem;
            }
            .btn-success {
                background-color: #28a745;
                border-color: #28a745;
            }
            .btn-success:hover {
                background-color: #218838;
                border-color: #1e7e34;
            }
            .btn-dark {
                background-color: #343a40;
                border-color: #343a40;
            }
            .btn-dark:hover {
                background-color: #23272b;
                border-color: #1d2124;
            }
            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
            }
            .btn-primary:hover {
                background-color: #0069d9;
                border-color: #0062cc;
            }
            .btn-danger {
                background-color: #dc3545;
                border-color: #dc3545;
            }
            .btn-danger:hover {
                background-color: #c82333;
                border-color: #bd2130;
            }
            .alert {
                border-radius: 0.5rem;
            }
            .navbar {
                background-color: #007bff;
                /* Navbar background color */
                padding: 0.5rem 1rem;
                /* Adjust padding */
            }
            .navbar-brand {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
            }
            .navbar-brand img {
                border-radius: 50%;
                max-height: 40px;
                margin-right: 10px;
            }
            .navbar-title {
                font-size: 1.5rem;
                font-weight: bold;
                color: #ffffff;
                margin-right: auto;
                /* Push to the right */
            }
            @media (max-width: 768px) {
                .navbar-title {
                    display: none;
                    /* Hide title on small screens */
                }
                .content {
                    margin-left: 0;
                    /* Adjust margin for small screens */
                }
            }
        </style>
    </head>
    <body>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="text-center mb-4">
                <h3 class="text-white">Sidebar</h3>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('products.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.create') }}">Tambahkan Konser Baru</a>
                </li>
                <!-- Add additional sidebar items as needed -->
            </ul>
        </div>

        <!-- Page content -->
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/Logo.jpg') }}" alt="Logo">
                        <span class="navbar-title d-none d-lg-block">Concert.tix</span>
                        <span class="navbar-title">Data Products</span>
                    </a>
                </div>
            </nav>

            <div class="container mt-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">IMAGE</th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">STOCK</th>
                                        <th scope="col" style="width: 20%">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                    <tr>
                                        <td class="text-center">
                                            <img
                                                src="{{ asset('/storage/products/'.$product->image) }}"
                                                class="rounded"
                                                style="max-width: 150px;">
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td class="text-center">
                                            <form
                                                onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('products.destroy', $product->id) }}"
                                                method="POST">
                                                <a
                                                    href="{{ route('products.show', $product->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a
                                                    href="{{ route('products.edit', $product->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <div class="alert alert-danger">Data Products belum Tersedia.</div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>

        <script>
            //message with sweetalert
            @if(session('success'))
            Swal.fire(
                {icon: "success", title: "BERHASIL", text: "{{ session('success') }}", showConfirmButton: false, timer: 2000}
            );
            @elseif(session('error'))
            Swal.fire(
                {icon: "error", title: "GAGAL!", text: "{{ session('error') }}", showConfirmButton: false, timer: 2000}
            );
            @endif
        </script>

    </body>
</html>