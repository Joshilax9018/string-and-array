<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
	
	  $obj = new main();
	  $text = "This Is My Text";
	  $text1 = "How are you?";
	  $array1 = array(2,4,5,6);
	  $array2 = array("Lakshmi","Prajakta","Yogeetha","Upasana");
	  $array3 = array(4,4,6,5,3,8);
	  
	  $obj->printthis($text);
	  $obj->strlen($text);
	  $obj->stringReverse($text);
	  $obj->str_word_count($text);
	  $obj->strtolower($text);
	  $obj->strtoupper($text);
	  $obj->str_shuffle($text);
	  $obj->strpos($text);
	  $obj->str_repeat($text1);
	  $obj->strpbrk($text1);
      $obj->array_merge($array1,$array2);
      $obj->array_reverse($array2);
      $obj->array_replace($array2);
      $obj->array_search($array2);
      $obj->count($array1);
      $obj->array_sum($array1);
      $obj->array_shift($array2);
      $obj->array_combine($array1,$array2);
      $obj->array_push($array2);
      $obj->array_unique($array3);
      
	  class main {
	
		public function __construct() {
	
			echo '<h2> Shrilaxmi Joshi </h2></br> Week 3 : Strings and Arrays</br>';
		}


		public function printthis($text) {
			echo '<p1>print function demo </p1>';
			print($text);
			echo '<hr>';
		}
		public function strlen($text){
		    
		    echo '<p2>string length demo </p2>';
		    $len=strlen($text);
	            echo $len;
	            echo '<hr>';
	        }

    	public function stringReverse($str)	{
		echo '<p3> String Reverse </p3>';
		$result7 = strrev($str);
		print_r($result7);
		echo '<hr>';
    	}
    	
         public function str_word_count($text){
    	    echo '<p4> string word count</p4>';
    	    $output1 = str_word_count($text);
    	      print_r($output1);
    	      echo '<hr>';
    	}
    	public function strtolower($text){
    	   echo '<p5> String to lower case function </p5>';
    	   $output2 = strtolower($text);
    	   print_r($output2);
    	   echo '<hr>';
    	   
    	}
	     
	     public function strtoupper($text){
	         echo '<p6> String to upper case function</p6>';
	         $output3 = strtoupper($text);
	         print_r($output3);
	         echo '<hr>';
	     }
	
	    public function str_shuffle($text){
	        echo '<p7> String shuffle function </p7>';
	        $output4 = str_shuffle($text);
	        print_r($output4);
	        echo'<hr>';
	        }
	        
	    public function strpos($text1){
	        echo'<p8> Finding text within a string function </p8>';
	        $output5 = strpos($text1,"are?");
	        if ($output5 === false) {
	            echo("false");
                  }
                  else
                  {
                      echo("True");
                  }
	        
	  	    echo '<hr>';
	    }
	    
	    public function str_repeat($text1){
	        echo'<p9> String repeat function</p9>';
	        $output6 = str_repeat("**#**", 2);
	        print_r($output6);
	        echo '<hr>';
	    }
	    
	    public function strpbrk($text1){
	        echo '<p10> search a string for any of a set of characters</p10>';
 
	        echo strpbrk($text1, 're');
	        echo strpbrk($text1,'u');
	        echo '<hr';
	    }
	    
	    public function array_merge($array1,$array2){
	        echo '<p11> Merge array function demo</p11>';
	        echo 'After merging arrays:';
	        $arr1 = array_merge($array1,$array2);
                  
 	        print_r($arr1);
	        echo '<hr>';
 	        
	    }
	        
	    public function array_reverse($array2){
	        echo '<p12> Array reverse function demo</p12>';
	        echo 'After reversing array:';
	        $arr2 = array_reverse($array2);
                  
	        print_r($arr2);
	        echo '<hr>';
	    }
	    
	    public function array_replace($array2){
	        echo '<p13> Array replace function demo</p13>';
	        echo 'After replacing array element:';
	        $arr3 = array(0 => "Joshi", 2 => "Shetty");
	        $outputarr=array_replace($array2, $arr3);
                  
	        print_r($outputarr);
	        echo '<hr>';
	    }
	    
	    public function array_search($array2){
	        echo '<p14> Array search function demo</p14>';
	        $arr3 = array_search("Lakshmi", $array2);
          
	        print_r($arr3);
	        echo '<hr>';
	    } 
	    
	    public function count($array1){
	        echo '<p15> Array count function demo</p15>';
	        $arr4 = count($array1);
          
	        print_r($arr4);
	        echo '<hr>';
	    }
	    
	    public function array_sum($array1){
	        echo '<p16> Array sum function demo </p16>';
	        $arr5 = array_sum($array1);
          
	        print_r($arr5);
	        echo '<hr>';
	        
	    }
	    
	    public function array_shift($array2){
	        echo '<p17> array shift function demo </p17>';
	        $arr6 = array_shift($array2);
          
	        print_r($arr6);
	        echo '<hr>';
	    }
	    
	    public function array_unique($array3){
	        echo '<p18> array unique function demo</p18>';
	        $arr7 = array_unique($array3);
          
	        print_r($arr7);
	        echo'<hr>';
	    }
	    
	    public function array_combine($array1,$array2){
	        echo '<p19> array combine function demo </p>';
	        $arr8 = array_combine($array1,$array2);
          
          print_r($arr8);
	        echo '<hr>';
	    }
	    
	    public function array_push($array2){
	        echo '<p20> array push function demo </p20>';
	        $arr9 = array_push($array2 ,"Akshay","Shriya");
          
	        print_r($arr9);
	        echo'<hr>';
	    }
	    
	    
	    
    	public function __destruct() {
			echo '</br> Done!';
	        }
	        
	        
	   }
	?>


</body>
</html>
