@extends('pelapor/dashboard')

@section('pelaporKonten')
<div class="overflow-x-auto z-0 bg-white">
            <div class="hero h-20 bg-white">
                <div class="hero-content text-center">
                    <div class="max-w-md">
                    <h1 class="text-4xl font-bold text-black">Data Laporan</h1>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-info rounded-none btn-md text-white flex justify-end mb-2 ml-auto" onClick="my_modal_4.showModal()">
                <div class="w-4 ">
                    <img src="/images/add.png" />
                </div>            
                <p class="font-bold">TAMBAH</p>
            </button>
            
            <dialog id="my_modal_4" class="modal">
            <form action="{{ route('laporan.store')}}" method="post" class="w-full h-full max-w-7xl mt-32" enctype="multipart/form-data">
                @csrf
                <div class="modal-box w-full h-5/6 max-w-7xl bg-white z-0">
                    <h3 class="font-bold text-[#6C757D] text-center text-2xl">Laporkan</h3>
                        <div class="form-control">

                            <label class="label">
                                <span class="label-text text-lg text-grey">Isi Laporan :</span>
                            </label>
                            <textarea id="isi_laporan" required="Subjek Harus Di Isi" name="isi_laporan" class="textarea textarea-bordered bordered-black border border-solid h-48 bg-white text-black" placeholder="Masukan Disini..."></textarea>
                            
                            <label class="label bg-gray">
                                <span class="label-text text-lg text-gray">Tanggal :</span>
                            </label>
                            <input type="date" id="tanggal_lapor" name="tanggal_lapor" class="bg-[#d3d3d3] text-gray-700 h-12 input input-bordered w-full max-w-xs" value="{{ date('Y-m-d') }}" readonly>
                            
                            <label class="label bg-gray">
                                <span class="label-text text-lg text-gray">Tujuan Laporan :</span>
                            </label>
                            <select class="select select-bordered border bordered-black border-solid bg-white w-full max-w-xs" required="" id="subjek_laporan" name="subjek_laporan">
                                <option disabled selected>Pilih Tujuan Laporan</option>
                                @foreach($subjek as $s)
                                    <option value="{{ $s->id_bagian }}">{{ $s->bagian }}</option>
                                @endforeach
                            </select>
                            
                            <label class="label">
                                <span class="label-text text-lg text-grey">Dokumentasi Laporan :</span>
                            </label>
                            <input type="file" id="dokumen" name="dokumen" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-white dark:text-white-400 focus:outline-none dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400" readonly />
                            

                            <button type="submit" class="btn btn-info text-white flex justify-end mb-2 ml-auto">Laporkan</button>
                        </div>
                </div>
            </form>
            </dialog>

            <table class="table table-xs bg-white rounded-none z-0" >
                <thead>
                <tr>
                    <th></th> 
                    <th>Tanggal</th> 
                    <th>ID Laporan</th> 
                    <th>Pelapor</th> 
                    <th>Isi Laporan</th> 
                    <th>Gambar</th> 
                    <th>Tujuan</th>
                    <th>Petugas</th> 
                    <th>Status</th> 
                    <th>Aksi</th>
                </tr>
                </thead> 
            </table>
        </div>
@endsection