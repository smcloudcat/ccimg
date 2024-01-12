<?php
include "common/common.php";
include "common/xiaocurl.php";
error_reporting(0);
session_start();

?>
<?php
$typegs=$config['typegs'];
$targetDir="images/"; // 图片保存目录
// 设置图片保存路径的年份、月份和日期部分
$year = date('Y');
$month = date('m');
$day = date('d');
$random_string = bin2hex(random_bytes(5)); // 生成5字节的随机字符串

$path = $targetDir . $year . '/' . $month . '/' . $day;
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}

$targetFile = "$path/$random_string." . basename($_FILES["image"]["name"]); // 保存文件的完整路径

$response = array();

if (isset($_FILES["image"])) {
    // 检查文件类型，这里只允许上传图片文件
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $newFileName = $path . "/" . $random_string . '.' . $imageFileType;

    // Check if the file type is allowed based on $typegs
    $allowedTypes = explode(",", $typegs);
    if (!in_array($imageFileType, $allowedTypes)) {
        $response['status'] = 'error';
        $response['message'] = '只允许上传 ' . implode(", ", $allowedTypes) . ' 格式的图片文件！';
    } else {
        // 尝试将文件从临时目录移动到目标目录
        if ($config['aicheck'] == 1) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $newFileName)) {

                $str = xiaocurl("https://lwcat.cn/aicheck.php?url=" . $config['url'] . $newFileName . "");

                $aicheck = json_decode($str, true);
                if ($aicheck["code"] == 1) {
                    if ($aicheck["rating"] == 1) {


                        $response['status'] = 'success';
                        $response['message'] = $config['url'] . $newFileName;
                    } else {
                        unlink($newFileName);
                        $response['status'] = 'error';
                        $response['message'] = "此图片为不健康图片哦，不支持上传哦";
                    }

                } else {
                    $response['status'] = 'error';
                    $response['message'] = "图片鉴黄失败，请重新上传";
                }

            } else {
                $response['status'] = 'error';
                $response['message'] = '图片上传失败，请稍后再试！';
            }
        } else {

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $newFileName)) {
                $response['status'] = 'success';
                $response['message'] = $config['url'] . $newFileName;
            } else {
                $response['status'] = 'error';
                $response['message'] = '图片上传失败，请稍后再试！';
            }

        }
    }
} else {
    $response['status'] = 'error';
    $response['message'] = '请选择要上传的图片文件！';
}

echo json_encode($response);
?>