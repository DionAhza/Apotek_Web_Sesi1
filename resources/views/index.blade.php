<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-gray-300">
<div class="border-b border-gray-200 bg-gray-100 px-4 py-2 text-gray-900">
  <p class="text-center font-medium">
    Apotek terbaik di jonggol
    <a href="#" class="inline-block underline"> Diskon 50%</a>
  </p>
</div>
    <x-navbar></x-navbar>
    <section class="bg-white lg:grid lg:h-screen lg:place-content-center">
  <div
    class="mx-auto w-screen max-w-7xl px-4 py-16 sm:px-6 sm:py-24 md:grid md:grid-cols-2 md:items-center md:gap-4 lg:px-8 lg:py-32"
  >
    <div class="max-w-prose text-left">
      <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">
        Mencegah lebih baik
        <strong class="text-indigo-600"> daripada </strong>
        mengobati
      </h1>

      <p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi. Natus, provident
        accusamus impedit minima harum corporis iusto.
      </p>

      <div class="mt-4 flex gap-4 sm:mt-6">
        <a
          class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
          href="#"
        >
          Get Started
        </a>

        <a
          class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900"
          href="#"
        >
          Learn More
        </a>
      </div>
    </div>

    <img src="/images/doodles.png" alt="">
  </div>
</section>
 
    <section class="bg-gray-100 px-4 py-10">
        <div class="mx-auto gap-6 grid max-w-7xl grid-cols-1 lg:grid-cols-3 md:grid-cols-2">

       @foreach ($medicines as $item)
           
<a href="/obat/{{ $item->id }}" class="group block overflow-hidden">
  <div class="relative h-87.5 sm:h-112.5">
    <img
      src="{{ asset('gambars/'. $item->medicine_image ) }}"
      alt=""
      class="absolute inset-0 h-full w-full object-cover opacity-100 "
    />
  </div>
  <div class="p-5">
    <h3 class="text-lg font-bold text-gray-900">
      {{ $item->name }}
    </h3>
    <p class="text-xl mt-2 text-indigo-600">
      {{ number_format( $item->price) }}
    </p>
    <p class="mt-3 text-sm leading-relaxed">
     {{$item->description}}
    </p>
    <div class="mt-4 border-t border-gray-200 pt-3">
      <p>
        Tanggal kadaluwarsa
      </p>
      <p> 
        {{ \Carbon\Carbon::parse($item->expired )->format('d M Y') }}
      </p>
    </div>
  </div>
</a>
       @endforeach   

        </div>
    </section>

    <x-footer></x-footer>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ( session('sukses'))
        <script>
    Swal.fire({
        title: "Berhasil",
        text: @json( session('sukses') ),
         icon: "success"
      });
        </script>
    @endif  
</body>
</html>