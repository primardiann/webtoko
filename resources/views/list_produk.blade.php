<div>
    <h1>INPUT PRODUK</h1>
</div>
<form method="POST" action="{{ route('produk.simpan') }}">
    @csrf
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3">
                <input type="text" class="form-control" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td>Deskripsi:</td>
                <td colspan="3">
                    <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                </td>
            </tr>
            <tr>
                <td>Harga:</td>
                <td>
                    <input type="number" class="form-control" id="harga" name="harga"></td>
                </tr>

            </table>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>