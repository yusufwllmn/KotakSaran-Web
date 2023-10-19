const ContentSiswa = () => {
    return (
        <div className="overflow-x-auto">
            <button className="btn btn-info rounded-none btn-md text-white flex justify-end" onClick={()=>document.getElementById('my_modal_4').showModal()}>
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
                    <textarea className="textarea textarea-bordered bordered-black border border-solid h-52 bg-white text-black" placeholder="Masukan Disini..."></textarea>
                    </div>
                    <label className="label bg-gray">
                        <span className="label-text text-lg text-gray">Tujuan Laporan :</span>
                    </label>
                    <div className="flex-none bg-gray">
                        <ul className="menu menu-horizontal px-1 w-24 bg-gray rounded-none w-11/12 z-20 shadow-2xl">
                        <li className="bg">
                            <details>
                            <summary>
                                Jurusan
                            </summary>
                            <ul className="bg-white rounded-none hover:rounded-none gap-x-16 grid md:grid-cols-2 lg:grid-cols-4">
                                <div>
                                <li><a>MEKA</a></li>
                                <li><a>TEI</a></li>
                                <li><a>TOI</a></li>
                                <li><a>TEK</a></li>
                                <li><a>IOP</a></li>
                                </div>
                                <div>
                                <li><a>TPTUP</a></li>
                                <li><a>RPL</a></li>
                                <li><a>SIJA</a></li>
                                <li><a>PSPT</a></li>
                                </div>
                            </ul>
                            </details>
                        </li>
                        </ul>
                    </div>
                <div className="modal-action">
                <form method="dialog">
                    {/* if there is a button, it will close the modal */}
                    <button className="btn">Close</button>
                </form>
                </div>
            </div>
            </dialog>
            <table className="table table-xs bg-white rounded-none" >
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
                <tbody>
                <tr>
                    <th>1</th> 
                    <td>Cy Ganderton</td> 
                    <td>Quality Control Specialist</td> 
                    <td>Littel, Schaden and Vandervort</td> 
                    <td>Canada</td> 
                    <td>12/16/2020</td> 
                    <td>Blue</td>
                    <td>Canada</td> 
                    <td>12/16/2020</td> 
                    <td>
                        Tidak
                        <span>Ya</span>
                    </td>
                </tr>
                <tr>
                    <th>2</th> 
                    <td>Hart Hagerty</td> 
                    <td>Desktop Support Technician</td> 
                    <td>Zemlak, Daniel and Leannon</td> 
                    <td>United States</td> 
                    <td>12/5/2020</td> 
                    <td>Purple</td>
                </tr>
                <tr>
                    <th>3</th> 
                    <td>Brice Swyre</td> 
                    <td>Tax Accountant</td> 
                    <td>Carroll Group</td> 
                    <td>China</td> 
                    <td>8/15/2020</td> 
                    <td>Red</td>
                </tr>
                <tr>
                    <th>4</th> 
                    <td>Marjy Ferencz</td> 
                    <td>Office Assistant I</td> 
                    <td>Rowe-Schoen</td> 
                    <td>Russia</td> 
                    <td>3/25/2021</td> 
                    <td>Crimson</td>
                </tr>
                <tr>
                    <th>5</th> 
                    <td>Yancy Tear</td> 
                    <td>Community Outreach Specialist</td> 
                    <td>Wyman-Ledner</td> 
                    <td>Brazil</td> 
                    <td>5/22/2020</td> 
                    <td>Indigo</td>
                </tr>
                <tr>
                    <th>6</th> 
                    <td>Irma Vasilik</td> 
                    <td>Editor</td> 
                    <td>Wiza, Bins and Emard</td> 
                    <td>Venezuela</td> 
                    <td>12/8/2020</td> 
                    <td>Purple</td>
                </tr>
                <tr>
                    <th>7</th> 
                    <td>Meghann Durtnal</td> 
                    <td>Staff Accountant IV</td> 
                    <td>Schuster-Schimmel</td> 
                    <td>Philippines</td> 
                    <td>2/17/2021</td> 
                    <td>Yellow</td>
                </tr>
                <tr>
                    <th>8</th> 
                    <td>Sammy Seston</td> 
                    <td>Accountant I</td> 
                    <td>O'Hara, Welch and Keebler</td> 
                    <td>Indonesia</td> 
                    <td>5/23/2020</td> 
                    <td>Crimson</td>
                </tr>
                <tr>
                    <th>9</th> 
                    <td>Lesya Tinham</td> 
                    <td>Safety Technician IV</td> 
                    <td>Turner-Kuhlman</td> 
                    <td>Philippines</td> 
                    <td>2/21/2021</td> 
                    <td>Maroon</td>
                </tr>
                <tr>
                    <th>10</th> 
                    <td>Zaneta Tewkesbury</td> 
                    <td>VP Marketing</td> 
                    <td>Sauer LLC</td> 
                    <td>Chad</td> 
                    <td>6/23/2020</td> 
                    <td>Green</td>
                </tr>
                <tr>
                    <th>1</th> 
                    <td>Cy Ganderton</td> 
                    <td>Quality Control Specialist</td> 
                    <td>Littel, Schaden and Vandervort</td> 
                    <td>Canada</td> 
                    <td>12/16/2020</td> 
                    <td>Blue</td>
                    <td>Canada</td> 
                    <td>12/16/2020</td> 
                    <td>
                        Tidak
                        <span>Ya</span>
                    </td>
                </tr>
                <tr>
                    <th>2</th> 
                    <td>Hart Hagerty</td> 
                    <td>Desktop Support Technician</td> 
                    <td>Zemlak, Daniel and Leannon</td> 
                    <td>United States</td> 
                    <td>12/5/2020</td> 
                    <td>Purple</td>
                </tr>
                <tr>
                    <th>3</th> 
                    <td>Brice Swyre</td> 
                    <td>Tax Accountant</td> 
                    <td>Carroll Group</td> 
                    <td>China</td> 
                    <td>8/15/2020</td> 
                    <td>Red</td>
                </tr>
                <tr>
                    <th>4</th> 
                    <td>Marjy Ferencz</td> 
                    <td>Office Assistant I</td> 
                    <td>Rowe-Schoen</td> 
                    <td>Russia</td> 
                    <td>3/25/2021</td> 
                    <td>Crimson</td>
                </tr>
                <tr>
                    <th>5</th> 
                    <td>Yancy Tear</td> 
                    <td>Community Outreach Specialist</td> 
                    <td>Wyman-Ledner</td> 
                    <td>Brazil</td> 
                    <td>5/22/2020</td> 
                    <td>Indigo</td>
                </tr>
                <tr>
                    <th>6</th> 
                    <td>Irma Vasilik</td> 
                    <td>Editor</td> 
                    <td>Wiza, Bins and Emard</td> 
                    <td>Venezuela</td> 
                    <td>12/8/2020</td> 
                    <td>Purple</td>
                </tr>
                <tr>
                    <th>7</th> 
                    <td>Meghann Durtnal</td> 
                    <td>Staff Accountant IV</td> 
                    <td>Schuster-Schimmel</td> 
                    <td>Philippines</td> 
                    <td>2/17/2021</td> 
                    <td>Yellow</td>
                </tr>
                <tr>
                    <th>8</th> 
                    <td>Sammy Seston</td> 
                    <td>Accountant I</td> 
                    <td>O'Hara, Welch and Keebler</td> 
                    <td>Indonesia</td> 
                    <td>5/23/2020</td> 
                    <td>Crimson</td>
                </tr>
                <tr>
                    <th>9</th> 
                    <td>Lesya Tinham</td> 
                    <td>Safety Technician IV</td> 
                    <td>Turner-Kuhlman</td> 
                    <td>Philippines</td> 
                    <td>2/21/2021</td> 
                    <td>Maroon</td>
                </tr>
                <tr>
                    <th>10</th> 
                    <td>Zaneta Tewkesbury</td> 
                    <td>VP Marketing</td> 
                    <td>Sauer LLC</td> 
                    <td>Chad</td> 
                    <td>6/23/2020</td> 
                    <td>Green</td>
                </tr>
                </tbody> 
                <tfoot>
                <tr>
                    <th></th> 
                    <th>Name</th> 
                    <th>Job</th> 
                    <th>company</th> 
                    <th>location</th> 
                    <th>Last Login</th> 
                    <th>Favorite Color</th>
                </tr>
                </tfoot>
            </table>
        </div>
    )
}

export default ContentSiswa