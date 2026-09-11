<h1>Selamat datang di halaman tambah obat</h1>

<form action="/obat/store" method="POST">
    @csrf
    <input type="text" name="a" id="" placeholder="Masukan nama obat..">
    <input type="text" name="b" id="" placeholder="masukan deskripsi obat">
    <input type="number" name="c" id="" placeholder="masukan harga obat..">
    <input type="date" name="d" id="" >
    <button type="submit">Submit</button>
</form>