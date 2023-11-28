@extends('admin/dashboard')

@section('adminKonten')
<div class="overflow-x-auto z-0 bg-white ">
            <div class="hero h-20 bg-white">
                <div class="hero-content text-center">
                    <div class="max-w-md">
                    <h1 class="text-4xl font-bold text-black">Data Laporan</h1>
                    </div>
                </div>
            </div>

            <div class="card w-full bg-white shadow-2xl">
            <div class="card-body">
            <div class="relative overflow-x-auto rounded-md">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pelapor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Isi Laporan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tujuan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    @foreach($laporan as $index=>$l)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-200 dark:border-gray-400 text-black">
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                                {{ $index + $laporan->firstItem() }}
                            </th>
                            <td class="px-6 py-4">
                                {{$l->tanggal_lapor}}
                            </td>
                            <td class="px-6 py-4">
                                {{$l->pelapor->nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{$l->isi_laporan}}
                            </td>
                            <td class="px-6 py-4">
                                <img src="/images/gambar.png">
                            </td>
                            <td class="px-6 py-4">
                                {{$l->bagian->bagian}}
                            </td>
                            <td class="flex justify-center mt-3 ml-4 {{ $l->status->status === 'dalam antrian' ? 'badge badge-xs sm:badge-sm lg:badge-lg badge-warning h-10 rounded-md w-4/6 p-4' : ($l->status->status === 'diterima' ? 'badge badge-xs sm:badge-sm lg:badge-lg badge-success w-4/6 rounded-md p-4' : 'badge badge-xs sm:badge-sm lg:badge-lg badge-error w-4/6 rounded-md p-4') }}">
                                {{$l->status->status}}
                            </td>
                            <td>
                                <button class="btn btn-info rounded btn-sm text-white flex justify-center ml-5" onClick="my_modal_4.showModal()">
                                    <div class="w-4 ">
                                        <img src="/images/mata.png" />
                                    </div>            
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <br/>
                    {{ $laporan->links() }}
            </div>
            
        </div>
@endsection