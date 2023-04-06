@extends('layout.template')

@section('header')
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold tracking-tight text-gray-900">Nilai Mahasiswa</h1>
</div>
@stop

@section('content')

<button id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" class="text-white mb-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Semester <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
  </svg></button>

<div class="relative overflow-x-auto">
  <!-- Dropdown menu -->
  <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">

      <li>
        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nilai Murni UTS<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg></button>
        <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 1</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 2</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 3</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 4</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 5</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 6</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 7</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 8</a>
            </li>
          </ul>
        </div>
      </li>
      <li>

        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nilai Murni UAS<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg></button>
        <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 1</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 2</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 3</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 4</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 5</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 6</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 7</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 8</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nilai Ujian Murni<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg></button>
        <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 1</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 2</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 3</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 4</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 5</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 6</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 7</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 8</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nilai Murni HER<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg></button>
        <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 1</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 2</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 3</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 4</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 5</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 6</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 7</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 8</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kartu Hasil Studi<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg></button>
        <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 1</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 2</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 3</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 4</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 5</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 6</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 7</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semester 8</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kartu Hasil Studi</a>
      </li>

    </ul>
  </div>


  <table class=" table-autobg-transparent divide-y divide-gray-200">
    <thead>
      <tr>
        <th scope="col" class="px-4 py-3 bg-transparent text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nomor</th>
        <th scope="col" class="px-4 py-3 bg-transparent text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
        <th scope="col" class="px-4 py-3 bg-transparent text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mata Kuliah</th>
        <th scope="col" class="px-4 py-3 bg-transparent text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKS</th>
        <th scope="col" class="px-4 py-3 bg-transparent text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nilai</th>
        <th scope="col" class="px-4 py-3 bg-transparent text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mutu</th>
        <th scope="col" class="px-4 py-3 bg-transparent text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <tr>
        <td class="px-4 py-4 whitespace-nowrap">1</td>
        <td class="px-4 py-4 whitespace-nowrap">0069</td>
        <td class="px-4 py-4 whitespace-nowrap">MANAJEMEN JARINGAN</td>
        <td class="px-4 py-4 whitespace-nowrap text-center">3</td>
        <td class="px-4 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-600">A</span></td>
        <td class="px-4 py-4 whitespace-nowrap text-center">12</td>
        <td class="px-4 py-4">Opsional jika ada keterangan terkait nilai</td>
      </tr>
      <tr>
        <td class="px-4 py-4 whitespace-nowrap">2</td>
        <td class="px-4 py-4 whitespace-nowrap">0101</td>
        <td class="px-4 py-4 whitespace-nowrap">SISTEM MULTIMEDIA</td>
        <td class="px-4 py-4 whitespace-nowrap text-center">3</td>
        <td class="px-4 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100  text-blue-600">B</span></td>
        <td class="px-4 py-4 whitespace-nowrap text-center">9</td>
        <td class="px-4 py-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa illum explicabo soluta, iure fuga sed?</td>
      </tr>
      <tr>
        <td class="px-4 py-4 whitespace-nowrap">3</td>
        <td class="px-4 py-4 whitespace-nowrap">0107</td>
        <td class="px-4 py-4 whitespace-nowrap">PEMBELAJARAN MESIN</td>
        <td class="px-4 py-4 whitespace-nowrap text-center">3</td>
        <td class="px-4 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100  text-green-600">A</span></td>
        <td class="px-4 py-4 whitespace-nowrap text-center">12</td>
        <td class="px-4 py-4">Lorem ipsum dolor sit amet.</td>
      </tr>
      <tr>
        <td class="px-4 py-4 whitespace-nowrap">3</td>
        <td class="px-4 py-4 whitespace-nowrap">667</td>
        <td class="px-4 py-4 whitespace-nowrap">INTERAKSI MANUSIA KOMPUTER</td>
        <td class="px-4 py-4 whitespace-nowrap text-center">3</td>
        <td class="px-4 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100  text-blue-600">B</span></td>
        <td class="px-4 py-4 whitespace-nowrap text-center">9</td>
        <td class="px-4 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, dolorum.</td>
      </tr>
      <tr>
        <td class="px-4 py-4 whitespace-nowrap">3</td>
        <td class="px-4 py-4 whitespace-nowrap">758</td>
        <td class="px-4 py-4 whitespace-nowrap">ROUTING & SWITCHING ESSENTIAL</td>
        <td class="px-4 py-4 whitespace-nowrap text-center">4</td>
        <td class="px-4 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100  text-blue-600">B</span></td>
        <td class="px-4 py-4 whitespace-nowrap text-center">12</td>
        <td class="px-4 py-4">Opsional jika ada keterangan terkait nilai</td>
      </tr>
      <tr>
        <td class="px-4 py-4 whitespace-nowrap">3</td>
        <td class="px-4 py-4 whitespace-nowrap">788</td>
        <td class="px-4 py-4 whitespace-nowrap">KECERDASAN BUATAN</td>
        <td class="px-4 py-4 whitespace-nowrap text-center">3</td>
        <td class="px-4 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100  text-green-600">A</span></td>
        <td class="px-4 py-4 whitespace-nowrap text-center">12</td>
        <td class="px-4 py-4">Opsional jika ada keterangan terkait nilai</td>
      </tr>
      <tr>
        <td class="px-4 py-4 whitespace-nowrap">3</td>
        <td class="px-4 py-4 whitespace-nowrap">871</td>
        <td class="px-4 py-4 whitespace-nowrap">MOBILE COMMERCE</td>
        <td class="px-4 py-4 whitespace-nowrap text-center">3</td>
        <td class="px-4 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100  text-green-600">A</span></td>
        <td class="px-4 py-4 whitespace-nowrap text-center">12</td>
        <td class="px-4 py-4">Opsional jika ada keterangan terkait nilai</td>
      </tr>
    </tbody>
  </table>
</div>
@stop