<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Superadmin | PBL Vokasi</title>
  <?php include("../includes/head.php") ?>
</head>
<body class="bg-gray-50">

  <!-- SIDEBAR -->
  <?php include("./includes/aside.php") ?>

  <div class=" sm:ml-64">
        <!-- important -->
      <div class="rounded-lg flex flex-col item-start">

        <?php include("./includes/navbar.php") ?>

        <section class="bg-gray-50 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
          <nav class="flex my-10" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                  <a href="#" class="inline-flex items-center text-lg font-medium text-gray-700 hover:text-blue-900">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Beranda
                  </a>
                </li>
              </ol>
            </nav>
            <!-- Start coding here -->
            <div class="bg-white relative shadow-md sm:rounded-lg rounded-lg overflow-hidden">
                <div class="bg-blue-900 flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        
                        <h2 class="text-xl font-semibold text-white">Daftar Proyek dan Kelompok</h2>
                    </div>

                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-900 block w-full pl-10 p-2 mr-3" placeholder="Search" required="">
                            </div>

                            <button type="button" class="flex items-center justify-center text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:ring-amber-300 font-medium rounded-lg text-sm px-4 py-2 ml-4">
                              <svg class="h-3.5 w-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                              </svg>
                                Search
                            </button>
                        </form>
                    </div>
                    
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-50 uppercase bg-blue-900">
                            <tr>
                                <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">No</th>
                                <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Judul Proyek</th>
                                <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Kelompok</th>
                                <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Nama Ketua</th>
                                <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Nama Dosen PIC</th>
                                <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">
                                  <span class="sr-only">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-100">
                                <th scope="row" class="px-4 py-3 px-2 py-3 font-medium text-gray-900 whitespace-nowrap">1.</th>
                                <td class="px-4 py-3 px-2 py-3">Sistem Informasi E-Complain</td>
                                <td class="px-4 py-3 px-2 py-3">Kelompok 2</td>
                                <td class="px-4 py-3 px-2 py-3">Darwin Nunez</td>
                                <td class="px-4 py-3 px-2 py-3">Flora Shafiq Riyadi</td>
                                <td class="px-4 py-3 px-2 py-3">
                                  <a href="./groups-and-projects/details.php" type="button" class="text-blue-700 border-2 border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                      </svg>
                                    <span class="sr-only">Icon description</span>
                                  </a>
                                  <button type="button" class="text-red-700 border-2 border-red-700 hover:bg-red-700 hover:text-white ml-2 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                      </svg>
                                    <span class="sr-only">Icon description</span>
                                  </button>
                                </td>
                            </tr>

                            <tr class="border-b hover:bg-gray-100">
                                <th scope="row" class="px-4 py-3 px-2 py-3 font-medium text-gray-900 whitespace-nowrap">2.</th>
                                <td class="px-4 py-3 px-2 py-3">Sistem Informasi Manajemen Rapat</td>
                                <td class="px-4 py-3 px-2 py-3">Kelompok 3</td>
                                <td class="px-4 py-3 px-2 py-3">Bernardo Silva</td>
                                <td class="px-4 py-3 px-2 py-3">Pep Guardiola</td>
                                <td class="px-4 py-3 px-2 py-3">
                                  <a href="./groups-and-projects/details.php" type="button" class="text-blue-700 border-2 border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                      </svg>
                                    <span class="sr-only">Icon description</span>
                                  </a>
                                  <button type="button" class="text-red-700 border-2 border-red-700 hover:bg-red-700 hover:text-white ml-2 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                      </svg>
                                    <span class="sr-only">Icon description</span>
                                  </button>
                                </td>
                            </tr>

                            <tr class="border-b hover:bg-gray-100">
                                <th scope="row" class="px-4 py-3 px-2 py-3 font-medium text-gray-900 whitespace-nowrap">3.</th>
                                <td class="px-4 py-3 px-2 py-3">Aplikasi To Do List</td>
                                <td class="px-4 py-3 px-2 py-3">Kelompok 1</td>
                                <td class="px-4 py-3 px-2 py-3">Bukayo Saka</td>
                                <td class="px-4 py-3 px-2 py-3">Mikel Arteta</td>
                                <td class="px-4 py-3 px-2 py-3">
                                  <a href="./groups-and-projects/details.php" type="button" class="text-blue-700 border-2 border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9h2v5m-2 0h4M9.408 5.5h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                      </svg>
                                    <span class="sr-only">Icon description</span>
                                  </a>
                                  <button type="button" class="text-red-700 border-2 border-red-700 hover:bg-red-700 hover:text-white ml-2 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                      </svg>
                                    <span class="sr-only">Icon description</span>
                                  </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500">
                        Showing
                        <span class="font-semibold text-gray-900">1-10</span>
                        of
                        <span class="font-semibold text-gray-900">1000</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-blue-900 bg-white rounded-l-lg border border-blue-300 hover:bg-blue-100 hover:text-blue-700">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-blue-900 bg-white border border-blue-300 hover:bg-blue-100 hover:text-blue-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-blue-900 bg-white border border-blue-300 hover:bg-blue-100 hover:text-blue-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-blue-900 bg-white border border-blue-300 hover:bg-blue-100 hover:text-blue-700">...</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-blue-900 bg-white border border-blue-300 hover:bg-blue-100 hover:text-blue-700">100</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-blue-900 bg-white rounded-r-lg border border-blue-300 hover:bg-blue-100 hover:text-blue-700">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
          </div>
        </section>

      </div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>