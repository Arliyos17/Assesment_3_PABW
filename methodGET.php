<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET");
    include 'koneksi.php';
    //header hasil berbentuk json
    header("Content-Type:application/json");

    //tangkap metode akses
    $method = $_SERVER['REQUEST_METHOD'];

    //variabel Hasil
    $result = array();

    //cek metode
    if($method=='GET'){

        //pengecekan parameter
        if(isset($_GET['id_jadwal'])){
            //tangkap parameter
            $id_jadwal = $_GET['id_jadwal'];

            //jika metode sesuai
            $result['status'] = [
                "code" => 200,
                "description" => 'Request Valid'
            ];

            //buat query
            $sql = "SELECT * FROM jadwal1 WHERE id_jadwal='$id_jadwal'";
            //eksekusi query
            $hasil_query = $conn->query($sql);
            //masukan ke array result
            $result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
            }else{
                $result['status'] = [
                    "code" => 400,
                    "description" => 'Parameter Invalid'
                ];
            }
    }else{
        $result['status'] = [
            "code" => 400,
            "description" => "Request not valid"
        ];
    }

    //tampilkan dalam format json
    echo json_encode($result);
?>