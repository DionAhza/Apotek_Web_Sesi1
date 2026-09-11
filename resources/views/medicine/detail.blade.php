<h1>Detail</h1>
{{ $detail }}

<h1>Ini adalah obat {{$detail->name}}</h1>
<h1>Ini adalah deskripsi {{$detail->description}}</h1>
<h1>Ini adalah harga {{ number_format($detail->price) }}</h1>
<h1>Ini adalah expired {{ date('d M Y', strtotime($detail->expired))  }}</h1>