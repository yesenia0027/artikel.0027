<!-- Form untuk menambah pengguna -->
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h3>Tambah Pengguna Baru</h3>
            <form method="POST" action="<?= base_url('admin/tambah_pengguna') ?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="nama_pengguna">Nama Pengguna</label>
                    <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
                </div>
                <div class="form-group">
                    <label for="telp_pengguna">Telp Pengguna</label>
                    <input type="text" class="form-control" id="telp_pengguna" name="telp_pengguna" required>
                </div>
                <div class="form-group">
                    <label for="email_pengguna">Email Pengguna</label>
                    <input type="email" class="form-control" id="email_pengguna" name="email_pengguna" required>
                </div>
                <div class="form-group">
                    <label for="level_pengguna">Level Pengguna</label>
                    <select class="form-control" id="level_pengguna" name="level_pengguna" required>
                        <option value="admin">Admin</option>
                        <option value="guru">Guru</option>
                        <option value="siswa">Siswa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
            </form>
        </div>
    </div>
</div>
