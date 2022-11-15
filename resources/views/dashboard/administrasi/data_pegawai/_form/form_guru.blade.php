<div class="mb-3">
  <label for ="nama_guru" class="form-label"> Nama Guru </label>
  <input type ="text" name="nama_guru" id="nama_guru" class="form-control select2" placeholder="Masukkan nama guru" multiple>
</div>
<div class="mb-3">
  <label for ="tmpt_lahir_guru" class="form-label"> Tempat Lahir </label>
  <input type="text" name="tmpt_lahir_guru" id="tmpt_lahir_guru" class="form-control" placeholder="Masukkan tempat lahir guru">
</div>
<div class="mb-3">
  <label for ="tgl_lahir_guru" class="form-label"> Tanggal Lahir </label>
  <input type="date" name="tgl_lahir_guru" id="tgl_lahir_guru" class="form-control bg-color-content border-0" placeholder="Masukkan tanggal lahir guru">
</div>
<div class="mb-3">
  <label for ="jabatan" class="form-label"> Jabatan </label>
  <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan jabatan guru">
</div>
<div class="mb-3">
  <label for ="tingkat_pendidikan" class="form-label"> Tingkat Pendidikan </label>
  <input type="text" name="tingkat_pendidikan" id="tingkat_pendidikan" class="form-control" placeholder="Masukkan tingkatan pendidikan guru">
</div>
<div class="mb-3">
  <label for ="jenis_kelamin" class="form-label"> Jenis Kelamin </label>
  <select class="form-select bg-color-content border-0" name="jenis_kelamin" id="jenis_kelamin" placeholder="Pilihan">
    <option selected>Pilihan</option>
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
  </select>
</div>
<div class="mb-3">
  <label for ="no_telp" class="form-label"> Nomor Telepon </label>
  <input type="tel" name="no_telp" id="no_telp" class="form-control bg-color-content border-0" placeholder="Masukkan nomor telepon guru">
</div>
<div class="mb-3">
  <label for ="upload_foto_guru" class="form-label"> Upload Foto Guru </label>
  <div class="d-flex align-items-center">
    <input type="file" class="form-control bg-color-content" name="upload_foto_guru">
    <label for="upload_foto_guru" class="mt-2"><i class="bi bi-upload color-blue font-16" style="margin-left: -30px;"></i></label>
  </div>
</div>
<div class="mb-3">
  <div class="row">
    <div class="d-flex align-items-center"><img src="/assets/img/important_form.png" alt="" class="img-fluid me-2" style="width:20px ;">
      <small class="text-danger"> Masukkan data ini dengan benar!</small>
    </div>
  </div>
</div>
<div class="d-grid gap-2 col-6 py-2 justify-content-center mx-auto btn-blue rounded">
    <button class="border-0 d-flex bg-transparent font-rubik font-16 fw-semibold text-white" type="button">
      <div class="pe-3">Simpan Data Guru</div>
    </button>
</div>