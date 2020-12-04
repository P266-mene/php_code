<?php
$a= fgets(STDIN);
$b= fgets(STDIN);
//echo"$a";
$num=explode(" ",$b);
//print_r("$num");
//print" \n $num[0] $num[1]  $num[2]   $num[3] $num[4] \n ";
//$result=count($num);
//print"$result";

$now_stamp    = date("i");
$expire_stamp = date('i',strtotime("+5 min"));

$expire_stamp1 = date('i',strtotime("+1 min"));
$expire_stamp2 = date('i',strtotime("+2 min"));
$expire_stamp3 = date('i',strtotime("+3 min"));
$expire_stamp4 = date('i',strtotime("+4 min"));


//echo "Right now: " . $now_stamp."\n";
//echo "5 minutes from right now:  ". $expire_stamp."\n";
$r1=0;$r2=0;$r3=0;$r4=0;$r5=0;

while($now_stamp <= $expire_stamp)
    {

    	if(($now_stamp == $expire_stamp1) && ($r1==0))
        {
        	$r1=1;
    			$load=$num[0];
    			//echo"$load";
    			if($load<50)
				    {

				    	echo" ".($a/2);
				    }
				    else
				    {
				    	echo" ".(2*$a+1);
    				}

        }
       if(($now_stamp == $expire_stamp2) && ($r2==0))
        {
        	$r2=1;
    			$load=$num[1];
    			//echo"$load";
    			if($load<50)
				{

					echo"".($a/2);
				}
				 else
				{
					echo" ".(2*$a+1);
    			}

        }
       if(($now_stamp == $expire_stamp3) && ($r3==0))
        {
        	$r3=1;
    			$load=$num[2];
    			//echo"$load";
				if($load<50)
				{

					echo"".($a/2);
				}
				 else
				{
					echo" ".(2*$a+1);
    			}
        }
       if(($now_stamp == $expire_stamp4) && ($r4 == 0))
        {
        		$r4=1;

    			$load=$num[3];
				//echo"$load";
				if($load<50)
				    {

				    	echo" ".($a/2);
				    }
				    else
				    {
				    	echo" ".(2*$a+1);
    				}
        }
         if(($now_stamp == $expire_stamp) && ($r5 == 0))
         {
         	$r5=1;
        	$load=$num[4];
		    if($load<50)
		    {

		    	echo" ".($a/2);
		    }
		    else
		    {
		    	echo" ".(2*$a+1);
		    }

        }

    $now_stamp = date("i");

    }

$now_stamp = date(" i");
//echo " After for Right now:<br> " . $now_stamp;
?>
