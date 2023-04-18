<?php
$a = $_POST;
// var_dump( $a );
// echo "<br>";
$file = $_FILES;
// var_dump( $file );

$location = "./img"; // 상대주소로 해야 html에서 접근가능
$filename = $location."/".$file["image"]["name"]; // $filename = "./img/업로드한 파일이름";
move_uploaded_file($_FILES['image']['tmp_name'], $filename); // 업로드한 파일을 $filename (경로, 파일이름)으로 저장

// echo "<br>";
// var_dump($filename);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="img_1.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <input type="submit" value="Upload">
        <br>
        <?php
        if (file_exists($filename)) { // 파일이 존재하면 파일출력
        ?>
            <img src="<?echo $filename?>" alt="img">
        <?php
        } else { // 파일이 존재하지 않는다면 메세지 출력
            echo "프로필 사진을 선택해 주세요";
        }
        ?>
        
    </form>
</body>
</html>

