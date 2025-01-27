<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembuatan Soal</title>
</head>

<body>
    <h1><?= $soal['soal']; ?></h1>
    <p><?= $soal['pilihan_a']; ?></p>
    <p><?= $soal['gambar_soal']; ?></p>
    <p><?= $soal['pilihan_b']; ?></p>
    <p><?= $soal['pilihan_c']; ?></p>
    <p><?= $soal['pilihan_d']; ?></p>
    <p><?= $soal['pilihan_e']; ?></p>

    <!-- Form atau fitur pembuatan soal -->
    <form action="/soal/simpan" method="post">
        <!-- Tambahkan input untuk soal -->
        <button type="submit">Simpan Soal</button>
    </form>
</body>

</html>
