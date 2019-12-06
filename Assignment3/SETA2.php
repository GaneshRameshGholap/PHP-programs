<?php
	class employee{
       		 var $code,$name,$designation;
        		function employee($c,$n,$d)
        		{
        		$this->code=$c;
        		$this->name=$n;
        		$this->designation=$d;
        		}
	}
        class emp_account extends employee{
	var $account_no,$joining_date;
         	function emp_account($c,$n,$d,$an,$jd)
              	{
                     $this->employee($c,$n,$d);
                     $this->account_no=$an;
                     $this->joining_date=$jd;
              	}
       }
       class emp_sal extends emp_account{
          var $basic_pay,$earnings,$deduction;
           function emp_sal($c,$n,$d,$an,$jd,$bp,$er,$de)
             {
              $this->emp_account($c,$n,$d,$an,$jd);
              $this->basic_pay=$bp;
              $this->earnings=$er;
              $this->deduction=$de;
             }
       }
       do
       {
       echo"\n1.To build a master table:";
       echo"\n2.To sort all entries:";
       echo"\n3.To search an entry:";
       echo"\n4.Display salary:";
       echo"\n5.exit:";
       echo"\nEnter the choice:";
       $ch=fgets(STDIN); 
       switch($ch)
	{
         case 1:   echo"\nEnter the number of records:";
       $n=fgets(STDIN);
       do
        {
          $cnt++;
          echo"\nEnter the code:";
          $c=fgets(STDIN);
         echo"\nEnter the name:";
          $n=fgets(STDIN);
         echo"\nEnter the designation";
         $d=fgets(STDIN);
         echo"\nEnter the account_no:";
         $an=fgets(STDIN);
        echo"\nEnter the joining_date:";
         $jd=fgets(STDIN);
        echo"\nEnter the basic_pay";
         $bp=fgets(STDIN);
        echo"\nEnter the earnings:";
        $er=fgets(STDIN);
        echo"\nEnter the deduction:";
         $de=fgets(STDIN);

        }while($cnt!=$n);

                 
        }
?>
       
