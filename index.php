<?php  

include 'connecttodatabase.php';

print_r( $username);
if(isset($_POST['submit']))
{
  if ($_POST['submit']=='login') {
    //login code
$x=0;
$found=false;
while($x<=count($username))
{
  if($_POST['name']==$username[$x]['name']  &&$_POST['password']==$username[$x]['password']){
    echo "<div class='welcome'>";
    echo "<h1>welcome to your profile</h1> ";
    echo '<table>';
    echo "<thead><tr id='header'><th> name"  . '</th>' ;
    echo "<th> father name" . '</th>';
    echo "<th> email"  . '</th>';
    echo "<th> date of birth" . '</th>' ;
    echo "<th> phone number" . '</th>';
    echo "<th> gender".  '</th>' ;
    echo "<th> country"  . '</th></tr></thead>';
    echo "<tbody>";
    // echo count($username);
    echo "</tbody>";
   echo '</table>';
    echo '</div>';
    $found=true;
  }else{
    //not correct username and password
    $x++;
   
  }

}
   
if (!$found) {
  # code...
  echo "<h1 class='alert'>sorry your password is not correct !</h1>";
}

  
    }  else{
      //ragister code
    
  }


}else{
// could not submit
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php practice</title>
</head>
<body>
  <form action="index.php" method="post" id="loginpage">
  <h1 id="loging_text">Login</h1>
  <div class="login">
  
    <input class="input" type="text" autocomplete="name" require name="name" id="name" placeholder="name">
    <span class="err"></span>
    <input class="input" type="email" name="email" id="email" require placeholder="email" autocomplete="off">
    <span class="err"></span>
    <input class="input" type="password" autocomplete='name' require name="password" id="password" placeholder="password">
    <span class="err"></span>
    </div>
  </form>
  <form action="ragister.php" method="post" id="ragisterpage">
<div class="ragister">
    <input class="input" type="text" name="ragistername" id="ragisterName" placeholder="name" require>
    <span class="ragistererr"></span>
    <input class="input" type="text" name="ragisterfathername" id="ragisterfatherName" placeholder="Father Name" require>
    <span class="ragistererr"></span>
    <input class="input" type="email" name="ragisteremail" id="ragisterEmail" placeholder="email">
    <span class="ragistererr"></span>
    <input type="radio" name="gender" class="g" id="male" ><span class="gender">Male</span>
    <input type="radio" name="gender" class="g" id="famle" ><span class="gender">famle</span>
    <input type="date" name="dateofbirth" id="dateofbirth" placeholder="YYYY/MM/DD" >
    <span class="ragistererr"></span>
    <input type="number" name="phonenumber" id="phoneNumber" placeholder="Phone Number">
    <span class="ragistererr"></span>
    <select name="country" id="country" form="ragisterform" autocomplete="off">
      <option value="Afghanistan">Afghanistan</option>
      <option value="Iran">Iran</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Turky">Turky</option>
      <option value="Tajikstan">Tajikstan</option>
      <option value="Chin">Chin</option>
    </select>
    <input class="input" type="password"  name="ragisterpassword" id="ragisterPassword" placeholder="password">
    <span class="ragistererr"></span>
    <input class="input" type="password"  name="confirmpassword" id="confirmPassword" placeholder="confirm your password">
    <span class="ragistererr"></span>
</div>
  
  </form>
  <input type="text" id="ragister" name='ragister'value="Ragister">

  <input class="input" type="submit" id="loginbtn" name='submit'value="login" form="loginpage">
  <input class="input" type="submit" id="ragisterbtn" name='submit'value="ragister" form="ragisterpage">
   
 
<style>
  #ragisterbtn{
    display: none;
  }
 .btns{

  display: flex;
    position: relative;
    flex-wrap: nowrap;
    justify-content: space-around;
    top: 5em;

 }
 select{
    margin-top: 0em;
    padding: 1em;
    border: none;
    border-bottom: 1px solid #e9e9e9;
    color: #9f9d9d;
  }
  #dateofbirth{
    margin: unset;
    all: initial;
    border-bottom: 1px solid #e8e8e8;
    color: #333;
    padding: .5em;
  }
  .gender{
    color: #329ce7;
  }
  #male,#famle{
    position: relative;
    left: -45%;
    z-index: 111;
  }
  
  span{
    color: #d95a7d;
    margin-top: .3em;
    position: relative;
    font-size: .8em;
    right: -35%;
    bottom: 2.5em;
  }
  .alert{
    margin: auto;
    width: 25em;
    text-align: center;
    font-family: serif;
    height: 2em;
    background-color: #d95a7d;
    color: #fff;
    position: relative;
    top: -3em;
    display: grid;
    text-transform: capitalize;
    align-items: center;
    animation: alert 4s ease-in  ;
 
  }

  @keyframes alert{
    0%{

    }40%{
      top: 0;
    }
    45%{
      left: 0em;
      top: 0;
    }
50%{
  left: -1em;

}55%{
  left: 1em;
}
    60%{
      left: -1em;
      top: 0em;
    }
    65%{
      left: 1em;
      top: 0em;
    }
    70%{
      left: 0em;
      top: 0em;
    }
    100%{
      top: -3em;
    }
  }



  table{
    font-size: .8em;
    margin: auto;
    width: 80%;
    animation: welcome .7s forwards;

  }

  table thead{
    
    display: table !important;
    background-color: #9f9d9d;
    color: #fff;
    width: 100%;
  }
  table thead th{
    padding: 0.6em;
  }
@keyframes welcome{
  0%{
   
    /* height: 10em; */
opacity: 0;
  }
  100%{
    /* transform: scale(1.9); */
    /* height: 13em; */
opacity: 1;
  }
}
  form{
    outline: none;
    height: 4em !important;
    text-align: center;
    border: none;
    color: #333;
    display: grid;
    color: #fff;
    padding-top: .4rem;
    margin: 0px auto;
    align-items: center;
    padding-bottom: .4REM;
    width: 60%;
  }
  form div{
    display: flex;
    flex-direction: column;
    height: 20rem;
  }
  .ragister{
    display: none;
  }

  input{
    outline: none;
    border: none;
    border-bottom: 1px solid #e7e7e7;
    padding-left: 10px;
    font-family: serif;
    height: 190px;
    margin-top: 20px;
    text-transform: capitalize;
  }
  input:focus{
    border:none;
    border-bottom: 2px solid #329ce7;
    box-shadow: 0px 6px 15px -6px #e7e7e7;

  }
  input[type='submit'],#ragister{
    outline: none;
    padding-left: 10px;
    font-family: serif;
    text-transform: capitalize;
    height: 4em !important;
    text-align: center;
    border: none;
    background: #329ce7;
    display: grid;
    color: #fff;
    font-size: 1em;
    font-family: sans-serif;
    cursor: pointer;
    width: 10em;
    padding-top: .4rem;
    margin-bottom: 20px !important;
    align-items: center;
    position: absolute;
    top: 40em;
    padding-bottom: .4REM;
    transition: all .2s cubic-bezier(0.075, 0.82, 0.165, 1);
    right: 20%;
  }
  *{
    font-family: sans-serif;
  }
  input[type='submit']:hover{
    border: 1px solid #329ce7;
    background: none;
    color: #333;
    transform:scale(1.04)
  }
  #ragister{
    background: none !important;
    border: 1px solid #329ce7;
    color: #333;
    left: 20%;
  }
  #ragister:hover{
    background: #329ce7 !important;
    border: 1px solid #329ce7;
    color: #fff;
    transform: scale(1.04);
  }
  h1{
    cursor: default !important;
    text-align: center;
    color: #333;
  }
  body{
    overflow-x: hidden;
  }
</style>



<script src="script.js"></script>
</body>
</html>
<!-- 
<div class="test">
// it is single line comment 
# it is also single line comment


/* it is multiple




line comment
*/


// $var='first';
// $var1='firstflkasdjflka';
// echo 'it is my ' .$var . '<br>';
// echo "My car is " . "ldksajflksjdf" ."<br>";
// echo "My house is " . "ldksajflksjdf" ."<br>";
// echo "My boat is " . "ldksajflksjdf" ."<br>";

// echo "<hr>";
// function test(){
//   static   $Gvar =0;
   
//     echo $Gvar  .'<br>';
//     $Gvar++;
// }
// print(strlen($var) . '<br>');
// print(str_word_count($var). '<br>');
// echo str_replace($var,$var1,'klasdjflkj');
// test();
// test();
// test();
// test();
// test();
// test();
// test();

// constant 
// constant function
// define('var_name','value')
// define('number',40);//it is constant
// echo number. ' it is constant <br>';
// echo '	
// __LINE__

// The current line number of the file. <br>';
// echo __LINE__;
// echo '__FUNCTION__

// The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the function name as it was declared (case-sensitive). In PHP 4 its value is always lowercased. <br>';
// function test2(){
//   echo 'the function name is :'.__FUNCTION__;
// };

// test2();


// // operators
// echo '<h2>
// php has differend operators 
// such as :<br>
// 1 : Arithmetic Operator<br> 
// 2 comparison <br>
// 3 logical <br>
// 4 assignment <br>
// 5 conditional <br>

// </h2>
// ';
// echo 'switch (a){ <br>
//   case label1:<br>
//     code to be executed if expression = label1;<br>
//     break;<br>
//   case label2:<br>
//     code to be executed if expression = label2;<br>
//     break;<br>
//   case label3:<br>
//     code to be executed if expression = label3;<br>
//     break;<br>
//   case label4:
//     code to be executed if expression = label4;<br>
//     break;<br>
//     default: <br>
//     codes to be executed if expression is defferent form labels ;<br>
// }

// ';


// // foreach
// echo 'foreach';
// $arr = array(1,2,3,4,5,6);
// print_r( $arr).'<br>';

// foreach ($arr as $a){
//   echo $a.'<br>';
// };


// $arr2=array (
// 'first_number'=>1,
// 'second_number'=>2,
// 'third_number'=>3

// );


// foreach($arr2 as $k){
//   echo $k;
// };

// // strlent() is used to find the length of string 
// echo '<br> strlent() is used to find the length of string <br> ';
// $string ='it is a string <br>';

// echo $string;

// echo 'the possition of a is :'. strpos( $string,'is').'<br>';

// echo 'the str_word_count() function counts the number of words in a string example <br>';
// echo str_word_count($string);

// echo 'the php strrev() function  reverses a string <br>';
// echo strrev($string);
// echo 'the php str_replace() function replace some characters with other character in a string <br> <hr>';


// include('page2.php');
// require('page2.php');

// echo "lkasjdfkljlkjlkjlkjlk";

// echo 'class';
// class t{
//  public $var1='<br>'. 1;
//  public $var12='<br> jksdfklaaaaaaaa'. 1;
//  private $var2=3;
//  protected $var4=5;
//  public function test(){
//   echo $this->var12;
//  }

// //  construct
// function __construct($num)
// {
//   $this->var2= $num;
// }
// function getter(){
  
//   return $this->var2;
// }
 
//  protected function sum($num1,$num2){
//   return $num1+$num2;
//  }
// protected function sum2($num1,$num2)
// {
//   return $num1+$num2;
// }

// function __destruct()//the __destruct function run in the end of function
// {
//   echo 'when it will run ';
// }

// };

// class test2 extends t{
//   public function print(){
//     echo $this->var4.'mmmmmmmmmmmmmmmmmmmmmmm <br>';
//     echo $this->getter().'mmmmmmmmmmmmmmmmmmmmmmm <br>';
//     echo $this-> var1.'mmmmmmmmmmmmmmmmmmmmmmm <br>';

//   }
//   function show_sum($a,$m){
//     return $this->sum($a,$m);
//   }
// }


// $obj = new t(2367567576576576567571);
// $obj->test();
// echo $obj->var1;

// echo $obj->getter();



// $obj_name= new test2(1111111111111);

// $obj_name->print();

// echo $obj_name->show_sum(1111111111111,2222222222222);
// ?>



</div>


<style>


  .test{
    text-align:center;
    font-size:24px;
  }
</style> -->
