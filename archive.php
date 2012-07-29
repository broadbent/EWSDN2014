<?php
    include_once "include/functions.php";

	if (!empty($_GET))
	{
		/* If code in the POST, check the validity */
		
		$code = $_GET["code"];
		$check = $_GET["check"];
		$valid = check_downloadcode($code, "codes.txt");
		$close_str = "<html><head></head><body><script type='text/javascript'> self.close(); </script></body></html>";

		if ($check==0 && $valid==true)
		{
			send_paper_archive("/home/lxwang/htdocs/SIGCOMM2012/archive.zip");
		}
		else if ($check==1 && $valid==true) 
		{
			echo "true";
		}
		else if ($check==1 && $valid==false)
		{
			echo "false";
		}
		else
		{
			/* If the code is not valid, send the error message! */
			echo $close_str;
		}
	}
	else
	{
		/* If there is nothing in the GET, close the window immediately. */
		echo $close_str;
	}
?>
