<?php

//1. 산술연산자
    // echo "더하기 : 1 + 1 = ", 1+1;
    // echo "\n빼기 : 1 - 1 = ", 1 - 1;
    // echo "\n곱하기 : 2 * 3 = ", 2 * 3;
    // echo "\n나누기 : 10 / 2 = ", 10 / 2;
    // echo "\n나머지 : 9 % 7 = ", 9 % 7;
    // echo "\n연산순서 : 10 - 5 * 8 = ", 10-5*8;
    
    // echo "\n\n";
//2. 증가/감소 연산자
    // $num1 = 1;
    // $num2 = 2;

    // echo ++$num1, "\n전위 증가연산자 : ++num =";
    // echo ++$num1;
    
    // echo "\n\n";
    // echo --$num1, "\n";
    // echo --$num1;
    
    // echo "\n\n";
    // echo ++$num1, "\n후위 증가연산자 : num++ =";
    // echo $num1++;
    
    // echo "\n\n";
    // echo ++$num1, "\n";
    // echo ++$num1;
    // echo "\n\n";

//3. 산술 대입 연산자 : 간략화 하는것
    // $num1 = 1;
    // $num1 = $num + 1;
    // $num2 = 1;
    // $num2 +=1;

    // echo $num1, " ",$num2;

    // $num1 = $num - 1;
    // $num1 -= 1;

    // $num1 = $num * 1;
    // $num2 *=1;

        // //산술연산자는 휘발성 값을 출력
        // echo "산술 연산자를 이용해서 계산해주세요.\n";
        // $tng_num = 10;

        // echo "$tng_num + 10"," => ",$tng_num + 10;
        // echo "\n$tng_num / 5"," => ",$tng_num / 5;
        // echo "\n$tng_num - 4"," => ",$tng_num -4;

        // echo "\n";   
        // //$tng_num에 10을 더해주세요.
        // echo "\n$tng_num += 10"," => ";

        // echo "\n";
        // //$tng_num에 5을 나누어주세요. 
        // echo "$tng_num /= 5"," => ";

        // echo "\n";
        // //$tng_num에 4을 빼주세요.
        // echo "$tng_num -= 4"," => ";

        // echo "\n";
        // //$tng_num에 7을 나눈 나머지를 구해주세요.
        // echo "$tng_num %= 7"," => ";

        // echo "\n";
        // //$tng_num에 3을 곱해주세요.
        // echo "$tng_num *= 3"," => ";


        // //산술 대입연산자는
        // echo "\n\n산술 대입 연산자를 이용해서 계산해주세요.\n";
        // $tng_num = 10;

        // //$tng_num에 10을 더해주세요.
        // echo "$tng_num + 10 = ",$tng_num1=$tng_num+10;
        // // $tng_num += 10;
        // // echo $tng_num;

        // echo "\n";
        // //$tng_num에 5을 나누어주세요. 
        // echo "$tng_num / 5 = ",$tng_num2=$tng_num/5;
        // // $tng_num /= 5;
        // // echo $tng_num;

        // echo "\n";
        // //$tng_num에 4을 빼주세요.
        // echo "$tng_num - 4 = ",$tng_num3=$tng_num-4;
        // // $tng_num -= 4;
        // // echo $tng_num;

        // echo "\n";
        // //$tng_num에 7을 나눈 나머지를 구해주세요.
        // echo "$tng_num % 7 = ",$tng_num4=$tng_num% 7;
        // // $tng_num %= 7;
        // // echo $tng_num;

        // echo "\n";
        // //$tng_num에 3을 곱해주세요.
        // echo "$tng_num * 3 = ",$tng_num5=$tng_num * 3;
        // // $tng_num *= 3;
        // // echo $tng_num;

        // $t1 = 0;
        // $t2 = $t1 + 1;
        // $t3 = $t1 + $t2;
        
        // $t1 = 3;
        // //캐스캐이딩 생각해서 연산

        //java의 경우는
        //int t1 = 1
        //string t2 = 'sss'
        //char t3 = 'asdfljaw;'

        // echo $t1," ",$t2," ",$t3;

//4. 비교 연산자
    //*불림형이라 결과출력 불가
    //$t1 = 1 > 2;
    //echo 

        // var_dump(1 > 2);
        // var_dump(1 < 2);
        // var_dump(1 >= 1);
        // var_dump(2 <= 2);
        //같다가 뒤에 나오는 이유

    // == : 느슨한 비교, 모양만 같으면 인정
    // var_dump(2 == '2');
    // === : 완전한 비교, 데이터 형식까지 판별
    // var_dump(2 === '2');

        // $t1 = 0;
        // $t2 = $t1 + 1;
        // $t3 = $t1 + $t2;

        // var_dump($t2 == $t3);
        // var_dump($t2 === $t3);
        // var_dump($t2 != $t3);
        // var_dump($t1 !== $t2);

//5. 논리 연산자
    //var_dump( 1 == 1 && 2 == 2 )
    //&& = AND 둘다 T값일때 T, 둘중 하나라도 F면 F
    
    // var_dump( 1 == 1 || 2 == 2 )
    //|| = OR 둘다 F일때 F, 둘중하나라도 T면 T
    
    //var_dump( !(1 == 1))
    //! = NOT 결과값을 반대로 바꿈

    // $i =9223372036854775807;
    // var_dump($i++);
    // //echo $i++;

    // $i =9223372036854775807;
    // var_dump($i += 1);
    // //echo $i += 1;

    // echo PHP_INT_MAX;

// .삼항연산자
    echo 1 > 2 ? 'O' : 'X';

 
?>