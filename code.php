<?php

/*conditional statements
$username="tobexkee";

$password = "password";


if (!($username == "tobexkee" && $password=="password"))

{
	 echo "yeah, you're the boss!";

}
else{
	echo "you are not on point!";
}

$use= "tobexkee";
$result = chop("$use");

echo  "$result";*/
/*
$a=1;

$b=5;

$c=6;

$D= $b**2-4*$a*$c;


$result1=(-$b + sqrt($D))/(2*$a);



$result2=(-$b - sqrt($D))/(2*$a);


	echo "$result1";

	echo "$result2";*/

/*
$p = 2000;
$R = 1000;
$T = "5%";
$result = $p*$R*$T;

echo "$result";


$password = "rahman";

echo "<h1>hello world</h1  
*/

//var_dump($result);


/*

for ($x=0; $x <10 ; $x++)
 { 
	 echo "the next number is: $x <br>";
}


define("GREETING", "welcome to my website");
var_dump ("greeting");


$x = 4;
$y = 5;
$result=($y*$x);
echo("<p>$result</p>");


for ($result=4; $result < 50;$result++) 
{ 
	echo "the product is :$result<br>";
}

 
 $t=date("h:");
 $h= 1;

if ($t<12)
 {
	echo "Good morning";
}
  else{
  	echo "good afternoon";
  }
  */

/*
$username ="rahman";
$result1 = strlen($username);
$result2 = var_dump($username);


if ($result1 < 7) {
  echo "your username is not up to 7 letters<br>";
}
else{
	echo "$result1<br>";
}

$result3 = is_numeric($username);
$num = var_dump ($result3);
if ($num =="true" )
{
   echo "your username must not be a number";
}
else
{
	 echo "you're welcome<br>";
}

if ($username =="root")
 {
  echo "change your username";
 }
else{
	echo "you're welcome"."$username";
}
*/


/*

if(strlen($username)<7)
{
	echo "username must be greater than 7";
}
elseif (is_numeric($username)) {
	 echo "username cannot be a number";
}
elseif(strpos("username","@")===0) {
	echo "username must start with @";
}
elseif($username =="root"){
  echo "username cannot be root";
}
  else{
  	echo "you're welcome<br>";  }*/
 
  // SWITCH STATEMENT\
/*
$first_num = "5";
$second_num ="10";
$operation ="**";

switch ($operation) {
	case '+':
		    echo ($second_num +  $first_num );
		break;
	case '-':
	     echo ($second_num - $first_num );	
	     	break;
	  case '%':
	  	 echo ($second_num % $first_num );
	  	break;
	  	case "/":
	  	  echo ($second_num / $first_num);
	  	  break;
    case '*':
    	 echo ($second_num *  $first_num );
    	break;
	default:
		 echo "operation not identified";
		break;
}
*/


/*$counter = 11;
$continue= 1;

while ($continue) {
	echo(2 * $counter);
    $counter++;

   if ($counter==11 || $counter==0) {
   	        $continue=false;
   					}

}
//multiplication table
/*
$i = 2;
$j = 1;
$continue = true;

while (continue) {
	$result =  $i * $j;
	echo $i."*".$j."=".$result;
	echo "<br>";
	$j++;
	 if ($j == 13) {
			$j = 1;
			$i++;
			echo "we are going to the next round";
			echo "<br>";
	
               }
           if($i==11)
            	{
             $continue = false;
          	 }
          	 */

/*multiplication table with for loop
$a = 2;
$b = 1;


for ($b=1; $b< 13 ; $b++)
	 { 
	 	$result = $a*$b;
	echo $a."*".$b."=".$result."<br>"; 	
 			}


 function shout($what_to_shout = "welcome to my page",$number_of_times=5)
	{
		 
		for ($counter=1; $counter<=$number_of_times ; $counter++) { 
					
		echo ($what_to_shout)."<br>";
		  }
	}
    $what_to_shout = "tobi";
  
	shout()."<br>";
*/
	
	


/*	{
	 $number;
	 for ($i=$number; $i > 1 ; $number--)
	    { 
	  
	 	$next_number=$number--;
	 	$next_number--;
	 	$factorial=$number*$next_number;
	        }
  echo ($number*$next_number);
	 }
	 


		fact(5);
     
    */
	/*function fact($number)
  				{
    $factorial=1;
    
    for ($i=$number; $i>=1; $i--)
    			 { 
    			 	                      
                    $factorial=$factorial*$i; 
            
            		  }
             	   echo ($factorial);
             	      
             	      	}
  $input=5;
 
for ($counter=$input; $counter>=1; $counter--) 
							{ 
  	                        
  	                          fact($counter);
  	                          echo "<br>";
                               }  */   
/*$points=100;                              
$name="hlloooo";
if ($name) {
		$ifvowel = strtolower($name);
		$num = preg_match_all('/[aeiou]/',$ifvowel,$matches);
			echo "you have lost: ". $num*(10) . "points<br>";
		echo "you now have " . ($points-($num*10))."points";
		     }
	    	
	   elseif ($num=0)
	    {
	   	  echo "you won 5 points";
	   	  echo "you now have " . ($points+5)."points";
	   }
	 
echo strpos($name, 'p');	   	

echo similar_text("helloo", "aeiou");
*/

function validatepassword($password="")
{
	if ($password="")
	 {
		return"password cannot be empty!";
	}
	else
	  {
		if($password<7)
			{
			 return "password must not be greater or less than 7";
			}
	     
		}
}

$password = "olaitan1";
if(validatepassword($password)===true)
{
	echo "your password is valid";
}
else
	{	
		validatepassword($password);
	}

?>