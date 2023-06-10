<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: DELETE");

    include 'koneksi.php';
    //header hasil berbentuk json
    header("Content-Type:application/json");

    //tangkap metode akses
    $method = $_SERVER['REQUEST_METHOD'];

    //variabel Hasil
    $result = array();

    //cek metode
    if($method=='DELETE'){

        // var_dump(file_get_contents("php://input"));
        parse_str(file_get_contents("php://input"), $_DELETE);

        //pengecekan parameter
        if(isset($_DELETE['id_jadwal'])){
                
            //tangkap parameter
            $id_jadwal = $_DELETE['id_jadwal'];

            //jika metode sesuai
            $result['status'] = [
                "code" => 200,
                "description" => '1 data Deleted'
            ];

            //buat query
            $sql = "DELETE FROM jadwal1 WHERE id_jadwal= '$id_jadwal'";
            //eksekusi query
            $conn->query($sql);
            //masukan ke array result
            $result['results'] = [
                "id_jadwal" => $id_jadwal
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