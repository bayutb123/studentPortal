@extends('layout.template')

@section('header')
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold tracking-tight text-gray-900">Profil Mahasiswa</h1>
  <p class="mt-1 max-w-2xl text-sm text-gray-500">Pastikan NIK dan Nama Ibu sudah terisi dengan data yang benar pada menu VERIFIKASI DATA PRIBADI karena akan digunakan untuk pembuatan Ijazah</p>
</div>
@stop
@section('content')
<div class="overflow-hidden bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-base font-semibold leading-6 text-gray-900">Informasi Mahasiswa</h3>

  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Nomor Induk Mahasiswa</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">17200269</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Nama Mahasiswa</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">BAYU TANTRA BRAMANDHITA</dd>
      </div>
      <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Tempat Lahir</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Tangerang</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Tanggal Lahir</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">27 Desember 2001</dd>
      </div>
      <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Alamat</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Jl. Kramat Jaya No. 238 RT 08 RW 01, JAKARTA PUSAT, 10560 No. 238</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">RT/RW</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">08/01</dd>
      </div>
      <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Kelurahan</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Johar Baru</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Kecamatan</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Johar Baru</dd>
      </div>
      <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Kota</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Jakarta Pusat</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Kode Pos</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">10560</dd>
      </div>
      <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Telepon</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">-</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">E-mail</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">bayutantra28@gmail.com</dd>
      </div>
      <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Jenis Kelamin</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Laki-laki</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Agama</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Islam</dd>
      </div>
      <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 align-middle">
        <dt class="text-sm font-medium text-gray-500">File Scan KTP <span class="text-red-500">*</span></dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
            <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2 w-0 flex-1 truncate">ktp.jpg / Belum ada data</span>
              </div>
              <div class="ml-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Update</a>
              </div>

            </li>
            <p class="text-red-400">File maksimal 2MB dan harus bertipe .JPG</p>
          </ul>
        </dd>
      </div>
      

    </dl>
  </div>
</div>

@stop