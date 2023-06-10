<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT");

    include 'koneksi.php';
    //header hasil berbentuk json
    header("Content-Type:application/json");

    //tangkap metode akses
    $method = $_SERVER['REQUEST_METHOD'];

    //variabel Hasil
    $result = array();

    //cek metode
    if($method=='PUT'){

        // var_dump(file_get_contents("php://input"));
        parse_str(file_get_contents("php://input"), $_PUT);
        // var_dump($_PUT);
        // echo $_PUT['id_jadwal'];

        //pengecekan parameter
        if(isset($_PUT['id_jadwal']) AND isset($_PUT['tim1']) AND isset($_PUT['tim2']) AND isset($_PUT['tanggal']) AND isset($_PUT['waktu']) AND isset($_PUT['liga']) AND isset($_PUT['stadion']) AND isset($_PUT['harga'
            ])){
                
            //tangkap parameter
            $id_jadwal = $_PUT['id_jadwal'];
            $tim1      = $_PUT['tim1'];
            $tim2      = $_PUT['tim2'];
            $tanggal   = $_PUT['tanggal'];
            $waktu     = $_PUT['waktu'];
            $liga      = $_PUT['liga'];
            $stadion   = $_PUT['stadion'];
            $harga     = $_PUT['harga'];

            //jika metode sesuai
            $result['status'] = [
                "code" => 200,
                "description" => '1 data Updated'
            ];

            //buat query
            $sql = "UPDATE jadwal1 SET tim1= '$tim1',
                                    tim2= '$tim2',
                                    tanggal= '$tanggal',
                                    waktu= '$waktu',
                                    liga= '$liga',
                                    stadion= '$stadion',
                                    harga= '$harga'
                                    WHERE id_jadwal= '$id_jadwal'";
            //eksekusi query
            $conn->query($sql);
            //masukan ke array result
            $result['results'] = [
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