<link
    href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css"
    rel="stylesheet"
    type="text/css"/>
<script src="https://cdn.tailwindcss.com"></script>

<h2 class="text-xl">
    INPUT PRODUK
    <br>

<div>
    <form method="POST" action="{{ route('produk.simpan') }}">
        @csrf
        <table class="table-pin-rows">
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