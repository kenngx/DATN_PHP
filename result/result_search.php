<?php
// session_start();
date_default_timezone_set('Asia/Saigon');
$thoigian = date("Y-m-d H:i:s");
$today = date("Y-m-d");
$second_date = strtotime($thoigian);
$conn = new mysqli("localhost", "root", "", "datn_data");
$search = "";
$trangthai = "";
$ten_ncc = "";
$ngay_bat_dau = "";
$ngay_ket_thuc = "";
$sql_con = "";


if (isset($_POST['search'])) {
  $search = $_POST['search'];
}

if (isset($_POST['trangthai'])) {
  $trangthai = $_POST['trangthai'];
}

if (isset($_POST['ten_ncc'])) {
  $ten_ncc = $_POST['ten_ncc'];
}

if (isset($_POST['ngay_bat_dau']) && isset($_POST['ngay_ket_thuc'])) {;
  $ngay_bat_dau = $_POST['ngay_bat_dau'];
  $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
  $sql_con = "AND DATE_FORMAT(ngay_dau_noi, '%Y-%m-%d') >= DATE_FORMAT('$ngay_bat_dau', '%Y-%m-%d')
  AND DATE_FORMAT(ngay_dau_noi, '%Y-%m-%d') <= DATE_FORMAT('$ngay_ket_thuc', '%Y-%m-%d')";
  
}

$sql = "SELECT * FROM data,ten_ncc WHERE data.id_ncc = ten_ncc.id_ncc AND status like '%$trangthai%' AND mst like '%$search%' AND data.id_ncc like '%$ten_ncc%' $sql_con order by ngay_dau_noi desc";


if (isset($_SESSION['ten_nd']) || (isset($_POST['search']) && $_POST['search'] != '')) {
    $res = mysqli_query($conn, $sql);
    while ($re = mysqli_fetch_row($res)) {
?>
        <tr>
            <th><?php echo $re[0]; ?></th>
            <td><?php echo $re[1]; ?></td>
            <td><?php echo $re[6]; ?></td>
            <td>
                <?php
                $first_date = strtotime($re[3]);
                $datediff = abs($first_date - $second_date);
                if ($re[4] > 1) {
                ?>
                    <p class="text-info">Đã tiếp nhận</p>
                    <?php
                } else {
                    if ($datediff / (60 * 60) < 72) {
                    ?>
                        <p class="text-success">Đang làm việc</p>
                        <?php
                    } else {
                        if ($re[4] <= 1) {
                        ?>
                            <p class="text-danger">Quá hạn</p>
                        <?php
                        } else {
                        ?>
                            <p class="text-info">Đã tiếp nhận</p>
                <?php
                        }
                    }
                }
                ?>
                <p class="text-dark"><?php
                                        if (isset($_SESSION['ten_nd'])) {
                                            echo '(' . ($re[3]) . ')';
                                        } else {
                                            echo "( " . floor($datediff / (60 * 60)) . "h trước )";
                                        }
                                        ?></p>

            </td>
            <td>
                <?php
                if ($re[4] > 1) {
                    echo "Đã ký kết hợp đồng";
                } else {
                    if ($datediff / (60 * 60) < 72) {
                        echo "Đang tiếp xúc";
                    } else {
                        echo "Hủy";
                    }
                }
                ?>
            </td>
        </tr>
<?php
    }
}

?>