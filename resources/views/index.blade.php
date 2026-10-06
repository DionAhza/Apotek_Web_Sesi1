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
<a href="#" class="group block overflow-hidden">
  <div class="relative h-87.5 sm:h-112.5">
    <img
      src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&q=80&w=1160"
      alt=""
      class="absolute inset-0 h-full w-full object-cover opacity-100 "
    />

      
  </div>

  <div class="relative bg-white pt-3">
    <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
      Limited Edition Sports Trainer
    </h3>

    <div class="mt-1.5 flex items-center justify-between text-gray-900">
      <p class="tracking-wide">$189.99</p>

      <p class="text-xs tracking-wide uppercase">6 Colors</p>
    </div>
  </div>
</a>
<a href="#" class="group block overflow-hidden">
  <div class="relative h-87.5 sm:h-112.5">
    <img
      src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&q=80&w=1160"
      alt=""
      class="absolute inset-0 h-full w-full object-cover opacity-100 "
    />

  </div>

  <div class="relative bg-white pt-3">
    <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
      Limited Edition Sports Trainer
    </h3>

    <div class="mt-1.5 flex items-center justify-between text-gray-900">
      <p class="tracking-wide">$189.99</p>

      <p class="text-xs tracking-wide uppercase">6 Colors</p>
    </div>
  </div>
</a>
<a href="#" class="group block overflow-hidden">
  <div class="relative h-87.5 sm:h-112.5">
    <img
      src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&q=80&w=1160"
      alt=""
      class="absolute inset-0 h-full w-full object-cover opacity-100 "
    />

   
  </div>

  <div class="relative bg-white pt-3">
    <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
      Limited Edition Sports Trainer
    </h3>

    <div class="mt-1.5 flex items-center justify-between text-gray-900">
      <p class="tracking-wide">$189.99</p>

      <p class="text-xs tracking-wide uppercase">6 Colors</p>
    </div>
  </div>
</a>
        </div>
    </section>

    <x-footer></x-footer>
    
</body>
</html>