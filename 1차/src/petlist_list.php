<?
    // define( "SRC_ROOT", $_SERVER["DOCUMENT_ROOT"]."/");
    // define( "URL_DB", SRC_ROOT."PHP-506-2-2/src/common/db_common.php"); 
    // include_once( URL_DB );
    include_once( "C:/Apache24/htdocs/PHP-506-2-2/src/common/db_common.php" );

    // list 테이블 전체 정보 획득
    $result_list = pet_list_list();
    // pet정보 테이블 전체 정보 획득
    $a = 1;
    $result_pet_info = pet_info( $a );
    
    $arr_get = $_GET;

    $limit_num = 5;

    // list 테이블 전체 카운트 획득
    // echo $all_count;
    
    // max page number
    $max_page_num = ceil( (int)$all_count / $limit_num ); 
    // echo $max_page_num;

    // offset (1페이지일때 0,2페이지일때 5,3페이지 일때 10 ...)
    $offset_num = ($page_num * $limit_num)-$limit_num;

    echo $offset_num ;


    // $arr_prepare =
    // array(
    //     "limit_num" => $limit_num
    //     ,"offset"   => $offset_num 
    // );

	// // 페이징용 데이터 검색
    // $result_paging = select_board_info_paging( $arr_prepare );
    // // print_r( $result_cnt );
    // // print_r( $limit_num );
    // // print_r( $max_page_num );
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pet_todolist</title>
    <style>
        *
        {
            padding: 0;
            margin: 0;
        }
        .petlist_container
        {

            border: 1px solid black;
            border-radius: 20px;
            margin: auto;
            background-color: aqua;
            width: 90%;
            height: 80%;
        }
        .petlist_profile_container
        {
            background-color: antiquewhite;
            display: inline-block;
            width: 20%;
            position: absolute;
            top: 0%;
            left: 0%;
        }
        .petlist_list_container
        {
            background-color: rgb(250, 255, 240);
            display: inline-block;
            width: 80%;
            position: absolute;
            top: 0%;
            right: 0%;
        }
    </style>
</head>
<body>
    <div class="petlist_container">
        <img src="" alt="">
        <div class="petlist_profile_container">
            <p>프로필와여</p>
        </div>

        <div class="petlist_list_container">
            <h1><?php echo $result_pet_info[0]['pet_name']; ?>의 TO DO LIST</h1>
            <!-- **부분은 사용자 지정 이름으로 교체될 예정 -->
            <!-- <table> -->
                <!-- <thead>
                    <tr>
                        <th></th>
                        <th>제목</th> 
                    </tr>
                </thead> -->
                <!-- <tbody> -->
                    <!-- 체크박스 -->
                    <!-- <input type="checkbox" name="list" value="ect" /> -->
                    <!-- <tr> -->
                        <!-- title누르면 디테일 페이지로 이동 -->
                        <!-- <td><a href="">제목<?php echo $result_list[0]['list_title']; ?></a></td> -->
                        <!-- 마감일-현재날짜 -->
                        <!-- <td>Day-1<?php //echo $pet_list['list_end']?></td> -->
                        <!-- 현재 진행 상황 -->
                        <!-- <td>진행중<?php //echo $pet_list['list_comp_flg']; ?></td> -->
                    <!-- </tr> -->
                <!-- </tbody> -->
            <!-- </table> -->

            <!-- 리스트 아이템 -->
            <!-- <ul> -->
                <?php
                    // foreach ( $result_paging as $recode ) 
                    // {
                ?>
                <!-- <li class="todo_item">
                    <div class="checkbox"></div>
                    <div class="todo">$result_list['list_title'];</div> -->
                    <!-- <button class="delBtn">x</button> -->
                <!-- </li> -->
                <?php
                    // }
                ?>
            </ul>

            페이징 번호
            <?php
                // for ($i = 1; $i <= $max_page_num ; $i++)
                // { 
            ?>
                    <!-- <a class="btn btn-outline-dark" href='board_list.php?page_num=<?php echo $i ?> '>
                        <?php echo $i ?> 
                    </a> -->
            <?php
                // }
            ?>
            
        </div>
    </div>
</body>
</html>