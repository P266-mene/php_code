<?php
$ar1=fgets(STDIN);
$ar2=fgets(STDIN);
$a=explode(" ",$ar1);
$b=explode(" ",$ar2);

$no_of_bread=$a[0];
$no_of_vada=$a[1];
$no_of_samosa=$a[2];

$price_of_vadapav=$b[0];
$price_of_samosapav=$b[1];
$profit=0;
echo" $no_of_bread  $no_of_vada  $no_of_samosa $price_of_vadapav $price_of_samosapav ";

while($no_of_bread !=1)
			{
					if($no_of_samosa!=0)
					{
							if($no_of_bread> $no_of_samosa)
							{
								$no_of_bread=$no_of_bread-2;
								$no_of_samosa=$no_of_samosa-1;
								$profit=$profit+15;
								//echo" inside if $profit";
							}
					}
					if($no_of_samosa==0 && ($no_of_bread >$no_of_vada))
					{


							$no_of_bread=$no_of_bread-2;
							$no_of_vada=$no_of_vada-1;
							$profit=$profit+10;


					}

			}

echo"$profit";


?>
