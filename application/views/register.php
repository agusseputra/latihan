<form action="<?= site_url('latihan/save_register'); ?>" method="POST" class="form_ajax" style="margin: 15px;">
    <fieldset>
        <legend>Registrasi</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username..." />
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Your email..." />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Passowrd..." />
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </p>
        <p>
            <label>Biografi:</label>
            <textarea name="biografi"></textarea>
        </p>
        <hr/>
        <p class="err_msg"></p>
        <p align="right">
            <input type="submit" class="save" name="Simpan" value="Daftar" />
        </p>
    </fieldset>
</form>
