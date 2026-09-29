<html>
    <head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width,
initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible'
content='ie=edge'>
<title>Daftar Mahasiswa</title>
<link href='/css/my-style.css' rel='stylesheet'>
</head>
    <body   >
        <p>Welcome to Mahasiswa Hello Page</p>
        <ul>
            <li>Nama: Agil Razzan</li>
            <li>NIM : 2410120002</li>
            <li>Prodi : Sistem Informasi</li>
        </ul>
         Copyright © <?php echo date("Y M"); ?> , UAG

         <h3>Daftar Mahasiswa</h3>
        <?php
        foreach ($arrMahasiswa as $mhs){
            echo "<li> Nama : $mhs </li>";
        } ?>
        <div>
<img src='/img/people1.jpg'>
<img src='/img/people2.jpg'>
<img src='/img/people3.jpg'>
<img src='/img/people4.jpg'>
</div>
    </body>
</html>
