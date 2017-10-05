<?php
	class Employee
	{
		var $Eid;
		var $Ename;

		function Employee($id,$nm)
		{
			echo "<h1>Creating Employee object</h1>";
                        $this->Eid = $id;
			$this->Ename = $nm;
		}
		function setData($id,$nm)
		{
			$this->Eid = $id;
			$this->Ename = $nm;
			//$this->getData();
		}

		function getData()
		{
			echo "<br>" . $this->Eid;
			echo " " . $this->Ename;
                    //return array($this->sid, $this->sname);
                        
		}

		function __destruct()
		{
			echo "<h1>Destructing Employee object</h1>";
		}
	}
        
        class Salary extends Employee{
            var $basicPay;
            
            function Salary($id,$nm,$bp)
		{
			echo "<h1>Creating Salary object</h1>";
                        Employee::Employee($id,$nm);
                        $this->basicPay=$bp;
		}
		function setSalary($id,$nm,$bp)
		{
                    $this->Eid=$id;
                    $this->Ename=$nm;
                    $this->basicPay=$bp;
		}

		function getSalary()
		{
                    echo "<br>" . $this->Eid;   
                    echo " " . $this->Ename;   
                    echo " " . $this->basicPay;                      
		}

		function __destruct()
		{
			echo "<h1>Destructing Salary object</h1>";
		}
        }

        $salObj = new Salary(100,"JK",2100);
        $salObj->getSalary();
        
        $salObj->setSalary(101,"PNP",2000);
        $salObj->getSalary();
       
?>