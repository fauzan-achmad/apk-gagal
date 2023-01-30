<div class="card card-success">
    <div class="card-header">
        <h4>Tambah Pegawai</h4>

    </div>
    <div class="card-body">
        <form class="row" action="<?php echo env('APP_URL') . '?page=actions/employees/store' ?>" method="post">
            <div class="form-group col-md-6">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" name="nip" placeholder="Masukan NIP...">
            </div>
            <div class="form-group col-md-6">
                <label for="npwp">NPWP</label>
                <input type="text" class="form-control" name="npwp" placeholder="Masukan NPWP...">
            </div>
            <div class="form-group col-md-6">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="Masukan NIK...">
            </div>
            <div class="form-group col-md-6">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama...">
            </div>
            <div class="form-group col-md-6">
                <label for="place_of_birth">Tempat Lahir</label>
                <input type="text" class="form-control" name="place_of_birth" placeholder="Tempat Lahir...">
            </div>
            <div class="form-group col-md-6">
                <label for="dateBirth">Tanggal Lahir</label>
                <input type="date" class="form-control" name="date_birth">
            </div>
            <div class="form-group col-md-6 ">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" class="form-control">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                    <option>Tidak Diketahui</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="religion">Agama</label>
                <input type="text" class="form-control" name="religion" placeholder="Masukan Agama...">
            </div>
            <div class="form-group col-md-12">
                <label for="inputCity">Alamat</label>
                <input type="text" class="form-control" name="adress" placeholder="Masukan Alamat...">
            </div>
            <div class="form-group col-md-6">
                <label for="city">Kota</label>
                <input type="text" class="form-control" name="city" placeholder="Masukan Kota...">
            </div>
            <div class="form-group col-md-6">
                <label for="provinsi">Provinsi</label>
                <input type="text" class="form-control" name="province" placeholder="Masukan Agama...">
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Nomor Telepon</label>
                <input type="text" class="form-control" name="phone" placeholder="Masukan Nomor Telepon...">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Masukan Email...">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password...">
            </div>
            <div class="form-group col-md-6">
                <label for="passwordConfirmation">Password Confirmation</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password...">
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>