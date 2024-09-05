<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Kalbe Farma</title>
</head>
<body>
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
--><!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-10 w-35" src="data:image/png;base64,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" alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="{{ route('products.index')}}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Inventory system</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
  
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>
  
                <!--
                  Dropdown menu, show/hide based on menu state.
  
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
 
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-3">
              <div class="text-base font-medium leading-none text-white">Tom Cook</div>
              <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
            </div>
            <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
          </div>

        </div>
      </div>
    </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">INVENTORY SYSTEM</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
      </div>
    </main>
  </div>
  
<form enctype="multipart/form-data" class="px-40 mb-40" action="{{ route('products.store')}}" method="POST">
    @csrf
    <div class="space-y-12 ">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">INPUT OBAT</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Masukan Data Dengan Teliti</p>
        <div div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Obat</label>
            <div class="mt-2">
                <input type="text" name="nama" id="nama" placeholder="  paracetamol" autocomplete="given-nama" class="@error('nama') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('nama')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
            </div>
            </div>
  
            <div class="sm:col-span-3" >
            <label for="harga" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
            <div class="mt-2">
                <input type="text" name="harga" id="harga" placeholder="  25000" class="@error('harga') is-invalid @enderror ml-30 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('harga')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
            </div>
            </div>
  
            <div class="sm:col-span-4">
            <label for="deskripsi" class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
            <div class="mt-2">
                <input id="deskripsi" name="deskripsi" type="deskripsi" class="@error('deskripsi') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-60">
            @error('deskripsi')
                <p class="invalid-feedback">{{$message}}</p>
            @enderror
            </div>
            </div>
            <div class="col-span-full">
                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Foto Obat</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                <input type="file" class="form-control form-control-lg" name="gambar">
                </div>
              </div>
        </div>
      </div>
  

  
    <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('products.index')}}" class="px-6 py-2 min-w-[120px] text-center text-black bg-slate-300 border border-black rounded active:text-violet-500 hover:bg-transparent hover:text-violet-600 focus:outline-none focus:ring"
            >Back</a>
      <button type="submit" class=" btn btn-primary px-6 py-2 min-w-[120px] text-center text-white bg-violet-600 border border-violet-600 rounded active:text-violet-500 hover:bg-transparent hover:text-violet-600 focus:outline-none focus:ring"
            >Save</button>
    </div>
  </form>
  
</body>
</html>