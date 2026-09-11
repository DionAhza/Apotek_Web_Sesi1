<h1>saya ingin mengedit data dengan id {{ $edit->id }}</h1>
<h2>{{ $edit->name }}</h2>

<form action="/obat/update/{{ $edit->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="a" id="" value="{{ $edit->name }}" placeholder="Masukan nama obat..">
    <input type="text" name="b" id="" value="{{ $edit->description }}" placeholder="masukan deskripsi obat">
    <input type="number" name="c" id="" value="{{ $edit->price }}" placeholder="masukan harga obat..">
    <input type="date" name="d" id="" value="{{ $edit->expired }}"  >
    <button type="submit">Submit</button>
</form>