<?php

$siswa = [
    [
        "nama" => "Dapid",
        "alamat" => "bungurasih",
        "no" => "012345678",
        "foto" => "dapid.jpeg"
    ],
    [
        "nama" => "Julkapir",
        "alamat" => "karangrejo",
        "no" => "089263821",
        "foto" => "julkapir.jpeg"
    ],
    [
        "nama" => "David",
        "alamat" => "terminal",
        "no" => "092747829",
        "foto" => "dapid.jpeg"
    ],
    [
        "nama" => "Zulkafir",
        "alamat" => "smeas",
        "no" => "0932937294",
        "foto" => "julkapir.jpeg"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa (Admin)</title>
</head>
<body>
    <h1>Data Siswa (admin)</h1>

    <div>
        <table border="1" cellspacing="0" cellpadding="10" width="40%">
            <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($siswa as $x => $value) : ?>
                    <tr>
                        <th><?= $x ?></th>
                        <th><img src="<?=$value['foto']?>" height="100px" alt=""></th>
                        <th><?=$value['nama']?></th>
                        <th>
                            <a href="detail.php?nama=<?= $value['nama'];?>&foto=<?= $value['foto']?>&alamat=<?= $value['alamat']?>&no=<?= $value['no']?>">
                                <button>Detail</button>
                            </a>
                        </th>
                    </tr>
                <?php endforeach?>
        </table>
    </div>
</body>
</html>