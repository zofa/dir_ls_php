<?php
$indir = "infiles";

if ($handle = opendir ( $indir )) {
	while ( false !== ($entry = readdir ( $handle )) ) {
		if ($entry != "." && $entry != "..") {
			
			if (($fhandle = fopen ( "$indir/$entry", "r")) !== FALSE) {
				while ( ($data = fgetcsv ( $fhandle, 100000, "|" )) !== FALSE ) {
					//echo "<p> $num fields in line $row: <br /></p>\n";
					$row ++;
					//for($c = 0; $c < count ( $data ); $c ++) {
						echo $data [6] . "<br />\n";
					//}
				}
				fclose ( $fhandle );
				echo "--------------\n\n";
			}
			else 
			{echo "error ";}
		} // if
	}
closedir ( $handle );
}
?>