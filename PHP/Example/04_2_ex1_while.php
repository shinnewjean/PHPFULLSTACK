<?php
    //1. while문
    //while(조건)
    // {
    //     반복하고 싶은 처리
    // }
        
        $dan = 2;
        $num = 1;
        // echo "구구단을 외우자!!\n<".$dan."단>이올시다.\n\n";

        // echo "\n\n구구단을 외우자!!\n<".$dan."단>이올시다.\n";
        // while($num < 10)
        // {
        //     // echo "\n".$dan." * ".$num." = ";
        //     // echo $dan*$num++ ;

        //     $result = $dan." * ".$num." = ".$dan*$num."\n";
        //     echo $result;
        //     $num++;
        // }


        // while($dan < 10) 
        // {
        // $num = 1;
        // echo "\n\n구구단을 외우자!!\n<".$dan."단>이올시다.\n";
        //     while($num < 10)
        //     {
        //         $result = $dan." * ".$num." = ".$dan*$num."\n";
        //         echo $result;
        //         $num++;
        //     }
        // $dan++;}

        $max_dan = 9;
        // while ( $dan <= $max_dan )
        // {
        //     echo $dan."단\n";
        //     $num = 1;
        //     while( $num <= 10 )
        //     {
        //         $result = $dan." * ".$num." = ".$dan*$num."\n";
        //         echo $result;
        //         ++$num;
        //     }
        //     ++$dan;
        // }
    
        





    //2.do while문
    // do{
    //     반복 할 처리
    // }
    // while( 조건 );

        // $i = 0;
        // do{
        //     echo $i, " do while ";
        // }
        // while( $i === 1 );

        // while( $i === 1 );
        // {
        //     echo $i, " while ";
        // }

    //3. for문
    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }
    
    for ($i=2; $i <= 9 ; $i++) 
    { 
        echo $i."단\n";
        for ($A=1; $A <= 9 ; $A++) 
        { 
                $result = $i." * ".$A." = ".$i*$A."\n";
                echo $result;
        }
    }












?>