<?php
//url: https://www.techgig.com/practice/question/pattern-problem-38/aU5kSU5hMHZCMlVML0hwNy9VQWtkWTdHZU5MdWtQYXp2UVBKOEFaVVArTT0=/1
/*
*Solved by : Anshul pareek
*/
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);

	for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=$n-$i;$j++)
			echo "  ";
		$val = $i+($i-1);
    $loop = $val+$val-1;
    for($k=1; $k<=$loop; $k++){
      if($k%2 != 0){
        if($i ==1)
          echo chr(64+$i);
        else 
          echo chr(64+$val);
      }else{
        echo " ";
      }
    }
    
    echo $i<$n?"\n":'';
	}
?>
