<link
    href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css"
    rel="stylesheet"
    type="text/css"/>
<script src="https://cdn.tailwindcss.com"></script>

<h2 class="text-xl">
    INPUT PRODUK
    <br>

        {{-- <div class="ml-10 mt-20">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Harga Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
    <td>{{ $item }}</td>
    <td>{{ $desc[$index] }}</td>
    <td>{{ $harga[$index] }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
--}}

<div>
<form method="POST" action="{{ route('produk.simpan') }}">
@csrf
<table class="overflow-x-auto">
<thead>
    <tr class="bg-green-500">
        <th>No</th>
        <th>Nama Produk</th>
        <th>Deskripsi Produk</th>
        <th>Harga Produk</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>

    @foreach ($nama as $index => $item)
    <tr>
        <td class="bg-blue-700">{{ $index + 1 }}</td>
        <td class="bg-blue-700">{{ $item }}</td>
        <td class="bg-blue-700">{{ $desc[$index] }}</td>
        <td class="bg-blue-700">{{ $harga[$index] }}</td>
        <td>
            <form action="{{ route('produk.delete', $id) }}" method="POST">
                @csrf @method("DELETE")
                <button
                    class="btn btn-primary"
                    type="submit"
                    onclick="return confirm('Are you sure you want to delete {{ $item }}?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
<br>
    <tr>
        <td>Nama:</td>
        <td colspan="3">
            <input
                type="text"
                class="input input-bordered input-primary w-full max-w-xs"
                id="nama"
                name="nama"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3">
                <textarea class="textarea textarea-primary" name="deskripsi" id="deskripsi"></textarea>
            </td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td>
                <input
                    type="number"
                    class="input input-bordered input-primary w-full max-w-xs"
                    id="harga"
                    name="harga"></td>
            </tr>

        </table>
        <br>
            <button type="submit" class="btn btn-outline">Simpan</button>
        </form>
    </div>