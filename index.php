<!DOCTYPE html>
<head>
    <title>Pratham Gupta MD5</title>
</head>
<body>
    <h1>MD5 cracker</h1>
    <p>The web application takes an MD5 hash of a four digit pin 
        and checks all 10,000 possible 4 digit PIN's to determine the pin!
    </p>
    <pre>
        Debug Output:
        <?php
         $pin="Not found";

        if(isset($_GET['md5'])){
            $start_time=microtime(true);
            $md5=$_GET['md5'];
            $ctr=15;

            //String to make pin combinations
            $numbers="0123456789";


            //4 loops to create all possible 4 digit PIN's
            for ($i=0 ; $i<=strlen($numbers) ; $i++){ //outer loop to get 1st digit of pin
                $num1=$numbers[$i];


                for ($j=0 ; $j<=strlen($numbers) ; $j++){ //nested loop to get 2nd digit of pin
                    $num2=$numbers[$j];

    
                    for ($k=0 ; $k<=strlen($numbers) ; $k++){ //nested loop to get 3rd digit of pin
                        $num3=$numbers[$k];


                        for ($l=0 ; $l<=strlen($numbers) ; $l++){ //nested loop to get 4rd digit of pin
                            $num4=$numbers[$l];


                            //Concatenate all the 4 digits to create a possible PIN
                            $try=$num1.$num2.$num3.$num4;


                            //Check for match with the entered MD5 hash
                            $check=hash('md5',$try);
                            if ($check==$md5){
                                $pin=$try;
                                break; 
                            }


                            //Show first 15 ouputs
                            if ($ctr>0){
                                print "$check\t$try";
                                $ctr-=1;
                            }
                        }

                    }
                
                }
            }

            //Computing elapsed time
            $end_time=microtime(true);
            echo "Elapsed time: ";
            $time=$end_time-$start_time;
            echo $time;
            echo "\n";
        }

        ?>
    </pre>

    <p>Cracked PIN: <?= htmlentities($pin);?></p>
    <form>
        <input type="text" name="md5" size="80" />
        <input type="submit" value="Crack!" />
    </form>

    <!-- List of links -->
    


</body>