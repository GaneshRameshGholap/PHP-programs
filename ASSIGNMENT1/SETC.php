<?php
        $email = $_GET['txtem'];
	$countat = substr_count($email, '@');
	$emailparts = explode('@', $email);
        $countdotbeforeat =substr_count($emailparts[0], '.');
        $countdotafterat =substr_count($emailparts[1], '.');
        if ($countat != 1)
        {
        echo "Invalid@";
        }
        else
        {
             if($countdotbeforeat>2)
               {
	         echo "invalid dot before @";
               }
             else
               {
	             if($countdotafterat < 1 || $countdotafterat > 2)
	               {
	                  echo "Invalid dot after @";
	               }
	             else
	              {
	                  if(!(ereg('^[a-z]',$emailparts[0])))
	                  {
		              echo "Invalid mail ID before @";
			  }
                          else
		          {
                                  echo "valid mail";
                          }
	              }
                }
       }
?>
