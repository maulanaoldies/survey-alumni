					<div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-red"></i>
                                        <span class="caption-subject font-red bold uppercase"> Form Wizard -
                                            <span class="step-title"> Step 1 of 4 </span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li>
                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Identitas </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Transisi Kepegawaian </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" class="step">
                                                            <span class="number"> 3 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Pendapatan/Penghasilan </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab4" data-toggle="tab" class="step">
                                                            <span class="number"> 4 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Pengalaman Training </span>
                                                        </a>
                                                    </li>
													<li>
                                                        <a href="#tab5" data-toggle="tab" class="step">
                                                            <span class="number"> 5 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Kesempatan Program Gelar </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="alert alert-danger display-none">
                                                        <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                    <div class="alert alert-success display-none">
                                                        <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                    <div class="tab-pane active" id="tab1">
                                                        <h3 class="block">Identitas Karyasiswa</h3>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nama
                                                            </label>
                                                            <div class="col-md-4">
                                                                <p class="form-static"><?php echo $profil->nama?></p>
                                                            </div>
                                                        </div>
														<div class="form-group">
                                                            <label class="control-label col-md-3">NIP
                                                            </label>
                                                            <div class="col-md-4">
                                                                <p class="form-static"><?php echo $profil->nip?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                        <h3 class="block">Transisi Kepegawaian</h3>
														<table class="table table-bordered" style="font-size:17px !important;">
															<tr>
																<td colspan="4" class="title">II. Transisi Kepegawaian</td>
															</tr>
															<tr id="21">
																<td width="5%">2.1</td>
																<td colspan="2" width="60%">Apakah unit kerja saat ini masih sama dengan yang ditempati sejak lulus PHRD IV<br /><span class="descs">Jika <b>Ya</b> lanjut ke pertanyaan no. 2.3</span></td>
																<td width="35%">
																	<input type="radio" id="21_y" value="Ya" name="soal[2]" onChange="disab('21_y','21_n','22')"> YA <br />
																	<input type="radio" id="21_n" value="Tidak" name="soal[2]" onChange="disab('21_y','21_n','22')"> Tidak
																</td>
															</tr>
															<tr id="22">
																<td>2.2</td>
																<td colspan="2">Jika  <b>Tidak</b>,  apakah instansi tempat kerja saat ini masih sama dengan yang ditempati sejak lulus PHRD IV?<br /></td>
																<td>
																	<input type="radio" class="22_y" value="Ya" name="soal[3]"> YA <br />
																	<input type="radio" class="22_n" value="Tidak" name="soal[3]"> Tidak
																</td>
															</tr>
															<tr class="23">
																<td>2.3</td>
																<td colspan="3">Isikan keterangan instansi saat ini:</td>
															</tr>
															<tr>
																<td></td>
																<td>a. Nama Instansi</td>
																<td  width="60%" colspan="2">
																	<input type="text" name="soal[4]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>b. Nama Unit Kerja</td>
																<td colspan="2">
																	<input type="text" name="soal[5]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>c. Tingkatan Instansi</td>
																<td colspan="2">
																	<select name="soal[6]" class="form-control">
																		<option value="Pusat">Pusat</option>
																		<option value="Provinsi">Provinsi</option>
																		<option value="Kab/Kota atau dibawahnya">Kab/Kota atau dibawahnya</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td></td>
																<td colspan="3">d. Alamat Instansi</td>
															</tr>
															<tr>
																<td></td>
																<td>&nbsp;&nbsp;&nbsp;&nbsp;d.1. Nama jalan dan nomor</td>
																<td colspan="2">
																	<input type="text" name="soal[7]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>&nbsp;&nbsp;&nbsp;&nbsp;d.2. Kota</td>
																<td colspan="2">
																	<input type="text" name="soal[8]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>&nbsp;&nbsp;&nbsp;&nbsp;d.3. Provinsi</td>
																<td colspan="2">
																	<input type="text" name="soal[9]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>&nbsp;&nbsp;&nbsp;&nbsp;d.4. Kode Pos</td>
																<td colspan="2">
																	<input type="text" name="soal[10]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>&nbsp;&nbsp;&nbsp;&nbsp;d.5. No. Telepon</td>
																<td colspan="2">
																	<input type="text" name="soal[11]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>&nbsp;&nbsp;&nbsp;&nbsp;d.6. Alamat email (dinas)</td>
																<td colspan="2">
																	<input type="text" name="soal[12]" class="form-control">
																</td>
															</tr>
															<tr>
																<td>2.4</td>
																<td>Berapa kali pindah unit kerja sejak lulus PHRD IV? </td>
																<td colspan="2">
																	<input type="text" style="width:80%; display:inline;" name="soal[13]" class="form-control"> Kali
																</td>
															</tr>
															<tr>
																<td>2.5</td>
																<td colspan="2">
																	Apakah telah mengalami perubahan/kenaikan golongan kepangkatan sejak lulus PHRD IV?<br />
																	<span class="descs">Jika <b>Tidak</b> lanjut ke pertanyaan no. 2.7</span>
																</td>
																<td>
																	<input type="radio" id="25_y" value="Ya" name="soal[14]" onChange="disab('25_n','25_y','26')"> YA <br />
																	<input type="radio" id="25_n" value="Tidak" name="soal[14]" onChange="disab('25_n','25_y','26')"> Tidak
																</td>
															</tr>
															<tr id="26">
																<td>2.6</td>
																<td>Jika  <b>Ya</b>, golongan kepangkatan saat ini</td>
																<td colspan="2">
																	<input type="text" name="soal[15]" class="form-control">
																</td>
															</tr>
															<tr>
																<td>2.7</td>
																<td colspan="2">
																	Apakah telah mengalami perubahan/kenaikan grade kepangkatan dalam penentuan tunjangan kinerja sejak lulus PHRD IV?<br />
																	<span class="descs">Jika <b>Tidak</b> lanjut ke blok III</span>
																</td>
																<td>
																	<input type="radio" id="27_y" value="Ya" name="soal[16]" onChange="disab('27_n','27_y','28')"> YA <br />
																	<input type="radio" id="27_n" value="Tidak" name="soal[16]" onChange="disab('27_n','27_y','28')"> Tidak
																</td>
															</tr>
															<tr id="28">
																<td>2.8</td>
																<td>Jika  <b>Ya</b>, grade saat ini</td>
																<td colspan="2">
																	<input type="text" name="soal[17]" class="form-control">
																</td>
															</tr>
															<tr>
																<td width="5%"></td>
																<td width="45%"></td>
																<td width="25%"></td>
																<td width="25%"></td>
															</tr>
														</table>
													</div>
                                                    <div class="tab-pane" id="tab3">
                                                        <table class="table table-bordered" style="font-size:17px !important;">
															<tr>
																<td colspan="4" class="title">III. Pendapatan/Penghasilan</td>
															</tr>
															<tr>
																<td colspan="4" class="title">III.A. Pendapatan/Penghasilan Sebulan dari Pekerjaan Utama</td>
															</tr>
															<tr>
																<td>No</td>
																<td>Rincian</td>
																<td colspan="2">(Rupiah Rp)</td>
															</tr>
															<tr>
																<td>3.1</td>
																<td>a. Gaji</td>
																<td colspan="2">
																	<input type="text" name="soal[18]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>b. Tunjangan Kinerja</td>
																<td colspan="2">
																	<input type="text" name="soal[19]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>c. Tunjangan lain-lain</td>
																<td colspan="2">
																	<input type="text" name="soal[20]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>d. Honor-honor kegiatan</td>
																<td colspan="2">
																	<input type="text" name="soal[21]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td><b>Jumlah</b></td>
																<td colspan="2">
																	<input type="text" name="soal[22]" class="form-control">
																</td>
															</tr>
															<tr>
																<td colspan="4" class="title">III.B. Rata-rata Pendapatan/Penghasilan Sebulan dari Pekerjaan Tambahan</td>
															</tr>
															<tr>
																<td></td>
																<td>a. Honorarium</td>
																<td colspan="2">
																	<input type="text" name="soal[23]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>b. Pendapatan Lain Lain</td>
																<td colspan="2">
																	<input type="text" name="soal[24]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td><b>Jumlah</b></td>
																<td colspan="2">
																	<input type="text" name="soal[25]" class="form-control">
																</td>
															</tr>
															<tr>
																<td width="5%"></td>
																<td width="45%"></td>
																<td width="25%"></td>
																<td width="25%"></td>
															</tr>
														</table>
                                                    </div>
                                                    <div class="tab-pane" id="tab4">
                                                        <table class="table table-bordered" style="font-size:17px !important;">
															<tr>
																<td colspan="4" class="title">IV. Pengalaman Training</td>
															</tr>
															<tr>
																<td>4.1</td>
																<td colspan="2">
																	Apakah sudah pernah ditugaskan kantor/ instansi (atau sponsor)  untuk mengikuti training<br />
																	<span class="descs">Jika <b>Tidak</b> lanjut ke pertanyaan 4.3</span>
																</td>
																<td>
																	<input type="radio" id="41_y" value="Ya" name="soal[26]" onChange="disab('41_n','41_y','42')"> YA <br />
																	<input type="radio" id="41_n" value="Tidak" name="soal[26]" onChange="disab('41_n','41_y','42')"> Tidak
																</td>
															</tr>
															<tr id="42">
																<td>4.2</td>
																<td> <b> Jika Ya</b>, a. Frekwensi mengikuti training:</td>
																<td colspan="2">
																	<input type="text" style="width:80%; display:inline;" name="soal[27]" class="form-control"> Kali
																</td>
															</tr>
															<tr id="42">
																<td></td>
																<td colspan="3">b. Jenis training yang diikuti:</td>
															</tr>
															<tr id="42">
																<td></td>
																<td colspan="3">
																	<table class="table table-bordered">
																		<tr>
																			<td>No.</td>
																			<td>Nama Program</td>
																			<td>Tahun</td>
																			<td>Lama Waktu<br />(hari/bulan)</td>
																			<td>Lokasi Pelaksanaan<br />(kota/negara)</td>
																		</tr>
																		<tr>
																			<td>1</td>
																			<td><input type="text" name="soal[28]" class="form-control"></td>
																			<td><input type="text" name="soal[29]" class="form-control"></td>
																			<td><input type="text" name="soal[30]" class="form-control"></td>
																			<td><input type="text" name="soal[31]" class="form-control"></td>
																		</tr>
																		<tr>
																			<td>2</td>
																			<td><input type="text" name="soal[32]" class="form-control"></td>
																			<td><input type="text" name="soal[33]" class="form-control"></td>
																			<td><input type="text" name="soal[34]" class="form-control"></td>
																			<td><input type="text" name="soal[35]" class="form-control"></td>
																		</tr>
																		<tr>
																			<td>3</td>
																			<td><input type="text" name="soal[36]" class="form-control"></td>
																			<td><input type="text" name="soal[37]" class="form-control"></td>
																			<td><input type="text" name="soal[38]" class="form-control"></td>
																			<td><input type="text" name="soal[39]" class="form-control"></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td>4.3</td>
																<td colspan="2">
																	Apakah pimpinan kantor/instansi (atau sponsor) mempunyai rencana yang jelas untuk menugaskan Saudara mengikuti training?<br />
																	<span class="descs">Jika <b>Tidak</b> lanjut ke pertanyaan 4.7</span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[40]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[40]" > Tidak
																</td>
															</tr>
															<tr>
																<td>4.4</td>
																<td colspan="3"><b> Jika Ya</b>,jenis training yang akan diikuti:</td>
															</tr>
															<tr>
																<td></td>
																<td colspan="3">
																	<table class="table table-bordered">
																		<tr>
																			<td>No.</td>
																			<td>Jenis Training</td>
																			<td>Lama Waktu<br />(hari/bulan)</td>
																			<td>Lokasi Pelaksanaan<br />(kota/negara)</td>
																		</tr>
																		<tr>
																			<td>1</td>
																			<td><input type="text" name="soal[41]" class="form-control"></td>
																			<td><input type="text" name="soal[42]" class="form-control"></td>
																			<td><input type="text" name="soal[43]" class="form-control"></td>
																		</tr>
																		<tr>
																			<td>2</td>
																			<td><input type="text" name="soal[44]" class="form-control"></td>
																			<td><input type="text" name="soal[45]" class="form-control"></td>
																			<td><input type="text" name="soal[46]" class="form-control"></td>
																		</tr>
																		<tr>
																			<td>3</td>
																			<td><input type="text" name="soal[47]" class="form-control"></td>
																			<td><input type="text" name="soal[48]" class="form-control"></td>
																			<td><input type="text" name="soal[49]" class="form-control"></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td>4.5</td>
																<td colspan="2">
																	Apakah mengetahui latar belakang/ alasan mengapa kantor/instansi menugaskan Saudara mengikuti training?<br />
																	<span class="descs">Jika <b>Tidak</b> lanjut ke pertanyaan 4.7</span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[50]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[50]" > Tidak
																</td>
															</tr>
															<tr>
																<td>4.6</td>
																<td colspan="3"><b> Jika Ya</b>, apa saja latar belakangnya::</td>
															</tr>
															<tr>
																<td></td>
																<td colspan="2">a. Kantor perlu peningkatan kinerja</td>
																<td>
																	<input type="radio" value="Ya" name="soal[51]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[51]" > Tidak
																</td>
															</tr>
															<tr>
																<td></td>
																<td colspan="2">b. Isu baru di bidang perencanaan pembangunan</td>
																<td>
																	<input type="radio" value="Ya" name="soal[52]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[52]" > Tidak
																</td>
															</tr>
															<tr>
																<td></td>
																<td colspan="2">c. Lainya</td>
																<td>
																	<input type="radio" value="Ya" name="soal[53]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[53]" > Tidak
																</td>
															</tr>
															<tr>
																<td>4.7</td>
																<td colspan="2">
																	Apakah mempunyai keyakinan untuk memperoleh kesempatan mengikuti training dari kantor/instansi tempat bekerja?<br />
																	<span class="descs">Jika <b>Tidak</b> lanjut ke pertanyaan 4.9</span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[54]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[54]" > Tidak
																</td>
															</tr>
															<tr>
																<td>4.8</td>
																<td colspan="3"><b> Jika Ya</b>, sebutkan dua prioritas jenis training yang diharapkan:</td>
															</tr>
															<tr>
																<td></td>
																<td>Pertama</td>
																<td colspan="2">
																	<input type="text" name="soal[55]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>Kedua</td>
																<td colspan="2">
																	<input type="text" name="soal[56]" class="form-control">
																</td>
															</tr>
															<tr>
																<td>4.9</td>
																<td colspan="2">
																	Apakah mempunyai rencana untuk mengikuti training/ workshop dengan biaya mandiri atau mencari sponsor sendiri?<br />
																	<span class="descs">Jika <b>Tidak</b> lanjut ke blok V</span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[57]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[57]" > Tidak
																</td>
															</tr>
															<tr>
																<td>4.10</td>
																<td><b> Jika Ya</b>, apa yang menjadi motivasi utama?</td>
																<td colspan="2">
																	<select name="soal[58]" class="form-control">
																		<option value="Tuntutan pekerjaan">Tuntutan pekerjaan</option>
																		<option value="Peningkatan status ekonomi">Peningkatan status ekonomi</option>
																		<option value="Kab/Kota atau dibawahnya">Lainnya</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td width="5%"></td>
																<td width="45%"></td>
																<td width="25%"></td>
																<td width="25%"></td>
															</tr>
														</table>
                                                    </div>
													<div class="tab-pane" id="tab5">
														<table class="table table-bordered" style="font-size:17px !important;">
															<tr>
																<td colspan="4" class="title">V. Kesempatan dalam Program Gelar</td>
															</tr>
															<tr>
																<td>5.1</td>
																<td colspan="2">
																	Apakah pimpinan kantor/instansi (atau sponsor) mempunyai rencana yang jelas untuk mengirim saudara melanjutan pendidikan gelar?<br />
																	<span class="desc">Jika <b>Tidak</b> lanjut ke blok pertanyaan 5.5</span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[59]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[59]" > Tidak / Tidak Tahu
																</td>
															</tr>
															<tr>
																<td>5.2</td>
																<td colspan="3"><b> Jika Ya</b></td>
															</tr>
															<tr>
																<td></td>
																<td>a. Dalam Bidang Apa:</td>
																<td colspan="2">
																	<input type="text" name="soal[56]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>b. Pada Tahun Berapa:</td>
																<td colspan="2">
																	<input type="text" name="soal[56]" class="form-control">
																</td>
															</tr>
															<tr>
																<td></td>
																<td>c. Dimana:</td>
																<td colspan="2">
																	<select name="soal[58]" class="form-control">
																		<option value="Dalam Negeri">Dalam Negeri</option>
																		<option value="Luar Negeri">Luar Negeri</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td>5.3</td>
																<td colspan="2">
																	Apakah mengetahui latar belakang/alasan mengapa pimpinan kantor/instansi merencanakan untuk mengirim Saudara melanjutan studi?<br />
																	<span class="desc">Jika <b>Tidak</b> lanjut ke pertanyaan 5.5</span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[59]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[59]" > Tidak / Tidak Tahu
																</td>
															</tr>
															<tr>
																<td>5.4</td>
																<td colspan="3"><b> Jika Ya</b></td>
															</tr>
															<tr>
																<td></td>
																<td colspan="2">a.	Kantor perlu peningkatan kinerja</td>
																<td>
																	<input type="radio" value="Ya" name="soal[59]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[59]" > Tidak / Tidak Tahu
																</td>
															</tr>
															<tr>
																<td></td>
																<td colspan="2">b. Isu baru di bidang perencanaan pembangunan</td>
																<td>
																	<input type="radio" value="Ya" name="soal[59]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[59]" > Tidak / Tidak Tahu
																</td>
															</tr>
															<tr>
																<td></td>
																<td colspan="2">c. Lainya</td>
																<td>
																	<input type="radio" value="Ya" name="soal[59]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[59]" > Tidak / Tidak Tahu
																</td>
															</tr>
															<tr>
																<td>5.5</td>
																<td colspan="2">
																	Apakah saat ini Saudara sedang mengikuti kuliah lanjutan?<br />
																	<span class="desc">Jika <b>Ya</b> lanjut ke pertanyaan 5.7</span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[59]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[59]" > Tidak / Tidak Tahu
																</td>
															</tr>
															<tr>
																<td>5.6</td>
																<td colspan="2">
																	Apakah saat ini Saudara sedang mengikuti kuliah lanjutan?<br />
																	<span class="desc">Jika <b>Tidak (Selesai)</b></span>
																</td>
																<td>
																	<input type="radio" value="Ya" name="soal[59]"> YA <br />
																	<input type="radio" value="Tidak" name="soal[59]" > Tidak / Tidak Tahu
																</td>
															</tr>
															<tr>
																<td>5.7</td>
																<td><b> Jika Ya</b> apa yang menjadi motivasi utama?</td>
																<td colspan="2">
																	<select name="soal[58]" class="form-control">
																		<option value="Tuntutan pekerjaan">Tuntutan pekerjaan</option>
																		<option value="Peningkatan status ekonomi">Peningkatan status ekonomi</option>
																		<option value="Kab/Kota atau dibawahnya">Lainnya</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td width="5%"></td>
																<td width="45%"></td>
																<td width="25%"></td>
																<td width="25%"></td>
															</tr>
														</table>
														
													</div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous">
                                                            <i class="fa fa-angle-left"></i> Back </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn green button-submit"> Submit
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<script type="text/javascript">
						$('#myForm').submit(function(e) {
							var currentForm = this;
							e.preventDefault();
							bootbox.confirm("Apakah anda yakin dengan jawaban anda?", function(result) {
								if (result) {
									currentForm.submit();
								}
							});
						});
						
						function disab(a,b,c){
							var x = document.getElementById(c);
							if(document.getElementById(a).checked){
								x.style.display = 'none';
							}else if(document.getElementById(b).checked){
								if(x.style.display === 'none'){
									x.style.display = '';
								}else{
									x.style.display = '';
								}
							}
						}
					</script>
                