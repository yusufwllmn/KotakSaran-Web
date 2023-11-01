import React, { useState } from 'react'
import { Link } from "react-router-dom";

export default function ContentLapor(props) {
    const [subjek, setSubjek] = useState('');
    const [deskripsi, setDeskripsi] = useState('');
    const [tanggal, setTanggal] = useState('');
    const [status, setStatus] = useState('');
    const [dokumen, setDokumen] = useState('');
    const [pelapor, setPelapor] = useState('');

    const handleSubmit = () => {

}

    
    return (
        <div className="overflow-x-auto z-0 bg-white">
            <div className="hero h-20 bg-white">
                <div className="hero-content text-center">
                    <div className="max-w-md">
                    <h1 className="text-4xl font-bold text-black">Data Laporan</h1>
                    </div>
                </div>
            </div>
            <button className="btn btn-info rounded-none btn-md text-white flex justify-end mb-2 ml-auto" onClick={()=>document.getElementById('my_modal_4').showModal()}>
                <div className="w-4 ">
                    <img src="/images/add.png" />
                </div>            
                <p className="font-bold">TAMBAH</p>
            </button>
            <dialog id="my_modal_4" className="modal">
            <div className="modal-box w-full h-5/6 max-w-7xl bg-white">
                <h3 className="font-bold text-[#6C757D] text-center text-2xl">Laporkan</h3>
                    <div className="form-control">
                    <label className="label">
                        <span className="label-text text-lg text-grey">Isi Laporan :</span>
                    </label>
                    <textarea className="textarea textarea-bordered bordered-black border border-solid h-52 bg-white text-black" onChange={(deskripsi) => setDeskripsi(deskripsi.target.value)} placeholder="Masukan Disini..."></textarea>
                    </div>
                    <label className="label bg-gray">
                        <span className="label-text text-lg text-gray">Tujuan Laporan :</span>
                    </label>
                    <div className="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                    <input
                        type="text"
                        className="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        placeholder="Select a date" />
                    <label
                        className="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        > Select a date
                    </label>
                    </div>
                    <select className="select select-bordered border bordered-black border-solid bg-white w-full max-w-xs" value={subjek}>
                        <option disabled selected>Pilih Tujuan Laporan</option>
                        <option value={subjek}>{setSubjek}</option>
                    </select>
                    <label className="label">
                        <span className="label-text text-lg text-grey">Dokumentasi Laporan :</span>
                    </label>
                    <input type="file" className="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-white dark:text-white-400 focus:outline-none dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400" />
                <div className="modal-action">
                <form method="dialog">
                    {/* if there is a button, it will close the modal */}
                    <button className="btn btn-info text-white">Submit</button>
                </form>
                </div>
            </div>
            </dialog>
            <table className="table table-xs bg-white rounded-none z-0" >
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
    )
}
