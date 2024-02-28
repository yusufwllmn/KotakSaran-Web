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
                                {{$l->user->email
                                }}
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

                                <dialog id="my_modal_4" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl bg-white">
                                        <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                        </form>
                                        <h3 class="font-bold text-2xl text-center mb-5">Tanggapan Laporan</h3>
                                        <form action="{{ route('adminlaporan.update', $l->id_laporan)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="avatar">
                                                <div class="w-56 rounded mr-5">
                                                    <img src="{{ url('dokumen/' . $l->dokumen) }}" />
                                                </div>
                                                <div class="mr-5">
                                                    <h1 class="text-lg mb-2">Tanggal</h1>
                                                    <h1 class="text-lg mb-2">Nama Pelapor</h1>
                                                    <h1 class="text-lg mb-5">Tujuan Laporan</h1>
                                                    <h1 class="text-lg mb-4">Status Laporan</h1>
                                                    <h1 class="text-lg mb-2">Isi Laporan</h1>
                                                </div>
                                                <div class="">
                                                    <input type="text" class="border-none" value="{{$l->tanggal_lapor}}" @readonly(true)>
                                                    <h1 class="text-lg mb-2">: {{$l->user->email}}</h1>
                                                    <h1 class="text-lg mb-2">: {{$l->bagian->bagian}}</h1>
                                                    <h1 class="text-lg mb-2">
                                                        <select class="select text-lg select-bordered border bordered-black border-solid bg-white w-full max-w-xs" required="" id="id_status" name="id_status">
                                                            <option disabled selected>{{$l->status->status}}</option>
                                                            @foreach($status as $s)
                                                                <option value="{{ $s->id_bagian }}">{{ $s->status }}</option>
                                                            @endforeach
                                                        </select>
                                                    </h1>
                                                    <h1 class="text-lg mb-2">: {{$l->isi_laporan}}</h1>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info text-white flex justify-end ml-auto">Laporkan</button>
                                        </form>
                                        
                                    </div>
                                </dialog>

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