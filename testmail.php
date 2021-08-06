<?php
    if (mail('brad@brad.tw', "subject", "message")){
        echo 'Send OK';
    }else{
        echo 'XX';
    }
?>