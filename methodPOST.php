<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    include 'koneksi.php';
    //header hasil berbentuk json
    header("Content-Type:application/json");

    //tangkap metode akses
    $method = $_SERVER['REQUEST_METHOD'];

    //variabel Hasil
    $result = array();

    //cek metode
    if($method=='POST'){

        //pengecekan parameter
        if(isset($_POST['id_jadwal']) AND isset($_POST['tim1']) AND isset($_POST['tim2']) AND isset($_POST['tanggal']) AND isset($_POST['waktu']) AND isset($_POST['liga']) AND isset($_POST['stadion']) AND isset($_POST['harga'
            ])){
                
            //tangkap parameter
            $id_jadwal = $_POST['id_jadwal'];
            $tim1      = $_POST['tim1'];
            $tim2      = $_POST['tim2'];
            $tanggal   = $_POST['tanggal'];
            $waktu     = $_POST['waktu'];
            $liga      = $_POST['liga'];
            $stadion   = $_POST['stadion'];
            $harga     = $_POST['harga'];

            //jika metode sesuai
            $result['status'] = [
                "code" => 200,
                "description" => '1 data inserted'
            ];

            //buat query
            $sql = "INSERT INTO jadwal1 (id_jadwal, tim1, tim2, tanggal, waktu, liga, stadion, harga)
                    VALUES('$id_jadwal', '$tim1', '$tim2', '$tanggal', '$waktu', '$liga', '$stadion', '$harga')";
            //eksekusi query
            $conn->query($sql);
            //masukan ke array result
            $result['results'] = [
                "id_jadwal" => $id_jadwal,
                "tim1"      => $tim1,
                "tim2"      => $tim2,
                "tanggal"   => $tanggal,
                "waktu"     => $waktu,
                "liga"      => $liga,
                "stadion"   => $stadion,
                "harga"     => $harga
            ];
            }else{
                $result['status'] = [
                    "code" => 400,
                    "description" => 'Parameter Invalid'
                ];
            }
    }else{
        $result['status'] = [
            "code" => 400,
            "description" => "Method not valid"
        ];
    }

    //tampilkan dalam format json
    echo json_encode($result);
?>