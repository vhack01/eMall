<?php
	
	include("connection.php");
	class InsertSignup extends Connection 
 	{
 		public $exec;
		public $fnmErr="",$lnmErr="",$emlErr="",$psd="",$cpsdErr="",$mobErr="",$genErr="";
		public function compile($query)
		{
			return mysqli_query($this->link,$query);
		}
		public function validate()
		{
			if(empty($_POST['sg-fname'])){
				$this->fnmErr="Required";
			}
			else{
				$fname=$this->triming($_POST['sg-fname']);	
				if(!preg_match("/^[a-zA-Z ]*$/",$fname))
				{
					$this->fnmErr="Only letters are allowed";	
				}
			}
			if(empty($_POST['sg-lname'])){
				$this->lnmErr="Required";
			}else{
				$lname=$this->triming($_POST['sg-fname']);	
				if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
					$this->lnmErr="Only letters are allowed";	
				}
			}
			if(empty($_POST['sg-email'])){
				$this->emlErr="Required";
			}else{
				$email=$this->triming($_POST['sg-email']);	
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					echo "-----------";
					$this->emlErr="Invalid email format";	
				}
			}
		}
		public function triming($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		public function gotoSignData()
		{
			$this->validate();
			
			$lname=$this->triming($_POST['sg-lname']);
			$email=$this->triming($_POST['sg-email']);
			$psd=$this->triming($_POST['sg-psd']);
			$mob=$this->triming($_POST['sg-mobile']);
			$gender=$this->triming($_POST['gender']);

			//echo $fname.' | '.$lname.' | '.$email.' | '.$psd.' | '.$mob.' | '.$gender;
		}
			//$pass=md5($_POST['sg-psd']);
			//$this->exec=$this->compile('insert into user(f_name,l_name,email,pass,mobile,gen) values("'.$_POST['sg-fname'].'","'.$_POST['sg-lname'].'","'.$_POST['sg-email'].'","'.$pass.'",'.$_POST['sg-mobile'].',"'.$_POST['gender'].'")');
			//print_r($this->exec);
	}
	$is=new InsertSignup;
	if(isset($_POST['sg-email'])&&$_SERVER['REQUEST_METHOD']=='POST')
	{
		$is->gotoSignData();
	}

?>



