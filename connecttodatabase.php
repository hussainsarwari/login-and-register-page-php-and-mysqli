

<?php

$database=mysqli_connect('localhost','database','99@Hussain','login page');

if ($database) {
    # code...
    $sql='SELECT * FROM userdetail';//select data from database
    $res=mysqli_query($database, $sql);
    $username=mysqli_fetch_all($res, MYSQLI_ASSOC); //return data as associated array
    mysqli_free_result($res);//delet res value
    mysqli_close($database);// close connection
    // print_r($username);

}else{
    echo 'you are not connect';
}


?>