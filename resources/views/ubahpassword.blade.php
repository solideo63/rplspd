<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ubah Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="font-sans">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->



<div class="flex min-h-screen flex-col justify-center items-center px-6 py-12 bg-gray-100 relative">
  <!-- Container Putih -->
  <div class="bg-white w-3/4 lg:w-1/3 rounded-lg shadow-lg z-10">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm p-6 flex items-center">
      <!-- Kolom kiri untuk h2 dan h3 -->
      <div class="flex flex-col">
        <h2 class="text-2xl font-bold tracking-tight text-red-800 mb-2">
          SIMPPEL
        </h2>
        <h4 class="text-base text-blue-900 font-bold">
          Sistem Pencatatan dan Pelaporan Pelanggaran SPD
        </h4>
      </div>
      
      <!-- Gambar di kanan -->
      <img class="h-20 w-auto" src="{{ asset('img/logospd.png') }}" alt="Logo SPD">
    </div>
  </div>
  
  

  <!-- Container Kuning -->
  <div class="bg-yellow-400 w-3/4 lg:w-1/3 rounded-lg shadow-lg -mt-4 z-0">
    <div class="p-6 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-4" action="#" method="POST">

        <!-- Password Lama-->
        <div >
          <label for="password" class="block text-xs font-bold text-white pt-8 pb-1">Password Lama</label>
          <div class="mt-1 ">
            <input 
              type="password" 
              name="password" 
              id="password" 
              autocomplete="current-password" 
              required 
              class="block w-full rounded-md bg-slate-100 px-[8px] py-[4px] text-[14px] text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:ring focus:ring-indigo-300 focus:outline-none"
            >
          </div>
        </div>

        <!-- Password Baru-->
        <div>
            <label for="newpassword" class="block text-xs font-bold text-white">Password Baru</label>
            <div class="mt-1 pb-1 pt-1">
              <input 
                type="password" 
                name="newpassword" 
                id="newpassword" 
                autocomplete="current-password" 
                required 
                class="block w-full rounded-md bg-slate-100 px-[8px] py-[4px] text-[14px] text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:ring focus:ring-indigo-300 focus:outline-none"
              >
            </div>
          </div>

        <!-- Konfirmasi Password Baru-->
        <div>
            <label for="cnewpassword" class="block text-xs font-bold text-white">Konfirmasi Password Baru</label>
            <div class="mt-1 pb-8 pt-1">
              <input 
                type="cnewpassword" 
                name="cnewpassword" 
                id="cnewpassword" 
                autocomplete="current-password" 
                required 
                class="block w-full rounded-md bg-slate-100 px-[8px] py-[4px] text-[14px] text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:ring focus:ring-indigo-300 focus:outline-none"
              >
            </div>
          </div>

        <!-- Submit Button (Kecil dan di pojok kanan) -->
        <div class="flex justify-end">
          <button 
              type="submit" 
              class="flex justify-center items-center rounded-xl bg-blue-900 px-6 py-1.5 text-xs font-semibold text-white shadow hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          >
              Ubah
          </button>
      </div>
      </form>
    </div>
  </div>
</div>

  
</body>
</html>