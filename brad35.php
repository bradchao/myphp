<?php
    if (unlink("./brad.txt")){
        echo 'OK';
    }else{
        echo 'XX';
    }
?>
想問老師，剛剛那段code裡function與variable的關係。
變數$dir = '.'; 這段是放在while loop之外。昨天上課不是有提到local與global的概念，為何變數$dir放在函式外面，while還是能使用？
是否是我哪裡理解有錯了？