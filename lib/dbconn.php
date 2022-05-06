<?
    
    //개인pc 서버용
    $connect=mysql_connect( "localhost", "www", "1234") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("www_db",$connect);
    
    /* 
    //카페24 서버용
    $connect=mysql_connect( "localhost", "jjh1994", "jinho1994") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("jjh1994",$connect);
    */

?>
