<footer>
    <p>reference: <a href="http://en.wikipedia.org/wiki/Jim_Harbaugh">http://en.wikipedia.org/wiki/Jim_Harbaugh</a></p>
    <p>&copy; Abby Suldan | Dara Metz | Brandon Deere | Don Weidner </p>
    <p>
    	<?php
		
if (file_exists($filename)){
echo "Last modified: " . date ("F d Y H:i:s.", filemtime($filename)); 
 } 

		?>
</p>
</footer>