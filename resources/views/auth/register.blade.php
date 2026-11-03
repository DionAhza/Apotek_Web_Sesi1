<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="items-center flex justify-center min-h-screen">

  

    <form
  action="/register/action"
  method="POST"
  class="mx-auto max-w-md w-full space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6"
>
@csrf
  <div>
    <label class="block text-sm font-medium text-gray-900" for="name">Name</label>

    <input
      class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
      id="name"
      type="text"
      name="name"
      placeholder="Your name"
    />
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-900" for="email">Email</label>

    <input
      class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
      id="email"
      type="email"
      name="email"
      placeholder="Your email"
    />
  </div>

  
  <div>
    <label class="block text-sm font-medium text-gray-900" for="password">password</label>

    <input
      class="mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
      id="password"
      type="password"
      name="password"
      placeholder="Your password"
    />
  </div>

  @if ($errors->any())
      <span class="text-red-500">
          @foreach ($errors->all() as $item)
              {{ $item }}
          @endforeach
      </span>
  @endif

  <button
    class="block w-full rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600"
    type="submit"
  >
    Send Message
  </button>
</form>
</body>
</html>