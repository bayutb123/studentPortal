@extends('layout.template')

@section('header')
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
  <p class="mt-1 max-w-7xl text-sm text-gray-500">Selamat datang di fasilitas layanan kemahasiswaan Universitas Bina Sarana Informatika. Fasilitas ini merupakan salah satu bentuk pelayanan dari pihak pengelola UBSI dalam menyediakan informasi akademik kemahasiswaan, dan diharapkan seluruh mahasiswa UBSI yang masih aktif dapat memperoleh informasi tersebut dengan mudah melalui fasilitas ini.</p>
</div>
@stop
@section('content')
<div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
  <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
    <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
  </div>
  <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
    <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
  </div>
  <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
    <p class="text-sm leading-6 text-gray-900">
      <strong class="font-semibold">Info Terkini</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
        <circle cx="1" cy="1" r="1" />
      </svg>{{ $latest->subject }}
    </p>
    <a href="#" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Selengkapnya <span aria-hidden="true">&rarr;</span></a>
  </div>
  <div class="flex flex-1 justify-end">
    
  </div>
</div>

<div class="mt-0">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <h2></h2>
    <div class="mx-auto mt-3 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-8 sm:pt-4 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      @foreach ($announcements as $announcement)
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">{{ $announcement->created_at }}</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $announcement->tag }}</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              {{ $announcement->subject }}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $announcement->description }}</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="/assets/img/logo.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{ $announcement->from }}
              </a>
            </p>
            <p class="text-gray-600">Bina Sarana Informatika</p>
          </div>
        </div>
      </article>
      @endforeach
    </div>
  </div>
  @stop