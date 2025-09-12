<h1>Thông tin đã nhận được</h1>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_REQUEST["mssv"])){
            $mssv= $_REQUEST["mssv"];
        }
        echo "MSSV: " .$mssv;
    }
    echo "<br>";


    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_REQUEST["hoten"])){
            $hoten= $_REQUEST["hoten"];
        }
        echo "Họ tên: ". $hoten;
    }
    echo "<br>";

    
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_REQUEST["gioitinh"])){
            $gioitinh= $_REQUEST["gioitinh"];
        }
        echo "Giới tính: ";
        if($gioitinh=="0")
            echo "Nam";
        else echo "Nữ";
    }
    echo "<br>";


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_REQUEST["lang"]) && is_array($_REQUEST["lang"])) {

            if (in_array("c", $_REQUEST["lang"]) && in_array("php", $_REQUEST["lang"])) {
                echo "Ngôn ngữ lập trình: C++, PHP";
            } else
            if (in_array("c", $_REQUEST["lang"])) {
                echo "Ngôn ngữ lập trình: C++";
            } else
            if (in_array("php", $_REQUEST["lang"])) {
                echo "Ngôn ngữ lập trình: PHP";
            }
        } else
        echo "Ngôn ngữ lập trình: Không lựa chọn";
    }
    echo "<br>";


    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_REQUEST["thanhpho"])){
            $thanhpho= $_REQUEST["thanhpho"];
        $TP = ["hcm" => "Hồ Chí Minh","hn"  => "Hà Nội","dn"  => "Đà Nẵng"];
        }
        echo "Thành phố: ". ($TP[$thanhpho]);
    }
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_REQUEST["tinnhan"])){
            $tinnhan=$_REQUEST["tinnhan"];
        }
        echo "<br>Tin nhắn: ";
        print_r("$tinnhan");
    }
?>