@extends('pelapor/dashboard')

@section('pelaporKonten')
    <div class="overflow-x-auto z-0 bg-white justify-center">
            <div class="hero h-20 bg-white">
                <div class="hero-content text-left align-left">
                    <div class="max-w-xl w-full">
                    <h1 class="text-4xl font-bold text-black text-left align-left justify-start">Data Laporan {{ Auth::user()->pelapor->nama }}</h1>
                    
                    </div>
                </div>
            </div>
            
            <div class="fixed bottom-4 right-4 z-50">
                <button class="btn btn-info rounded-none btn-md text-white flex justify-end mb-2 ml-auto rounded-xl" onClick="my_modal_4.showModal()">
                    <div class="w-4 ">
                        <img src="/images/add.png" />
                    </div>            
                </button>
            </div>
            
            <dialog id="my_modal_4" class="modal">
            <form action="{{ route('laporan.store')}}" method="post" class="w-full h-full max-w-7xl mt-32" enctype="multipart/form-data">
                @csrf
                <div class="modal-box w-full h-5/6 max-w-7xl bg-white z-0">
                    <h3 class="font-bold text-[#6C757D] text-center text-2xl">Laporkan</h3>
                    <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
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
                            <input type="file" id="dokumen" name="dokumen" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-white dark:text-white-400 focus:outline-none dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400"/>
        
                            <input type="hidden" placeholder="Type here" value="{{ Auth::user()->id_user }}" name="id_pelapor" class="input input-bordered w-full max-w-xs" />

                            <button type="submit" class="btn btn-info text-white flex justify-end ml-auto">Laporkan</button>
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                        </div>
                </div>
            </form>
            </dialog>

            @foreach($laporan as $l)
            <div class="flex items-center justify-center min-h-full bg-white">
            <div class="w-5/6">
                <div class="bg-white rounded-lg shadow-2xl p-6 mb-2">
                <!-- Konten Card -->
                <div class="flex w-full">
                <div class="grid h-10 flex-grow card w-full bg-white rounded-box place-items-left ">
                    <h1 class="text-xl font-bold text-gray-600 mb-4 text-left">{{$l->bagian->bagian}}</h1>
                </div>
                <div class="flex w-3/6 ">
                    <div class="grid h-10 flex-grow w-1/6 card bg-white rounded-box place-items-center">
                        <div class="{{ $l->status->status === 'dalam antrian' ? 'badge badge-xs sm:badge-sm lg:badge-lg badge-warning h-10 rounded-md w-5/6 p-4' : ($l->status->status === 'diterima' ? 'badge badge-xs sm:badge-sm lg:badge-lg badge-success w-5/6 rounded-md p-4' : 'badge badge-xs sm:badge-sm lg:badge-lg badge-error w-5/6 rounded-md p-4') }}">
                        {{$l->status->status}}
                        </div>
                    </div>
                    <div class="grid h-10 flex-grow w-1/6 card bg-white rounded-box place-items-center">
                        <div class="badge badge-xs sm:badge-sm lg:badge-lg badge-outline h-10 rounded-md w-5/6 text-gray-500 p-4">
                            {{$l->tanggal_lapor}}
                        </div>
                        </div>
                </div>
                </div>
                
                <p class="text-gray-700">{{$l->isi_laporan}}</p>
                </div>
            </div>
            </div>
            @endforeach
            <br/>
                    {{ $laporan->links() }}
            <br>
    </div>
@endsection