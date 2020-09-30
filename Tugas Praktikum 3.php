<html>
    <head>
        <title>PENCARIAN DATA </title>
    </head>
    <body>
        <form action="" method="get">
        Silahkan Masukan Nama : <input type="text" name="namaorang">
        <input type="submit" name="tombol" value="kirim">
        </form>
    <br><br>><br>
    &nbsp;&nbsp;&nbsp;
    <?php
    if(isset($_GET['namaorang'])){
    $namaorang = $_GET['namaorang'];
    echo "Nama Yang Dicari $namaorang <br>";
    $user = array(
        array(
            "Nama"          => "Arsene Lupin",
            "Nik"           => "1234",
            "Jenis_kelamin" => "male",
            "Tgl_lahir"     => "1902-03-23"
        ),
        array(
            "Nama"          => "Sherlock Holmes",
            "Nik"           => "4321",
            "Jenis_kelamin" => "male",
            "Tgl_lahir"     => "1812-01-11"
        ),
        array(
            "Nama"          => "Irene Adler",
            "Nik"           => "7890",
            "Jenis_kelamin" => "female",
            "Tgl_lahir"     => "1232-04-13"
        )
    );

    $y=0;
    $n=0;

    foreach($user as $u){
    if(strtoupper($u["Nama"]) == strtoupper($namaorang))
    {
    $y=1;
    $n=$u;
    } 
    }
    if($y){
    echo "<ul>";
    echo "<li>NAMA         : ".$n["Nama"]."</li>";
    echo "<li>NIK          : ".$n["Nik"]."</li>";
    echo "<li>JENIS KELAMIN: ".$n["Jenis_kelamin"]."</li>";
    echo "<li>TANGGAL LAHIR: ".$n["Tgl_lahir"]."</li>";
    echo "</ul>";
    } else

    {
    echo "[".$namaorang."] <b>Data Tidak Ditemukan</b> <br>";
    }
    }

    ?>
    <br><br>
    &nbsp;&nbsp;&nbsp;

    </body>
    </html>