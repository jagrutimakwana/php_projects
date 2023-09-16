<?php

include_once('model.php'); //step 1 load model

class control extends model // step 2 extends
{
	// magic function that call automatically when you declare class object
	 function __construct()
	 {
		 
		 session_start();
		 
		 model::__construct();// step 3 call model __construct
		 
		 date_default_timezone_set('asia/calcutta');
		 
		 $url=$_SERVER['PATH_INFO'];
		 switch($url)
		 {
			 case '/index':
			 include_once('index.php');
			 break;
			 
			 case '/about':
			 include_once('about.php');
			 break;
			 
			 case '/service':
			 include_once('service.php');
			 break;
			 
			 case '/project':
			 include_once('project.php');
			 break;
			 
			 case '/contact':
			 
			  if(isset($_REQUEST['submit']))
			 {
				 $name=$_REQUEST['name'];
				 $phoneno=$_REQUEST['phoneno'];
				 $email=$_REQUEST['email'];
				 $subject=$_REQUEST['subject'];
				 $message=$_REQUEST['message'];
				 
				 $created_at=date("Y-m-d H:i:s");
				 $updated_at=date("Y-m-d H:i:s");
				 
				 $arr=array("name"=>$name,"phoneno"=>$phoneno,"email"=>$email,"subject"=>$subject,"message"=>$message,"created_at"=>$created_at,"updated_at"=>$updated_at);
				 
				 $res=$this->insert('contacts',$arr);
				 if($res)
				 {
					 echo "<script>
					 alert('Contact Enquery Registered Success');
				     </script>";
			     }
				 else
			     {
					 echo "<script>
					 alert('failed');
				     </script>";
				 }
			 }
             include_once('contact.php');
			 break;
			 
			 case '/login':
			 if(isset($_REQUEST['submit']))
			 {
				 $email=$_REQUEST['email'];
				 $password=md5($_REQUEST['password']); //password encrypted
				 
				 
				 $where=array("email"=>$email,"password"=>$password);
				 
				 $res=$this->select_where('customers',$where);
				 
				 $chk=$res->num_rows;  //condition res check by rows
				
				 if($chk==1)  //1 means true
				 {
					 $fetch=$res->fetch_object();
					 
					 $status=$fetch->status;
					 if($status=="Unblock")
					 {
						 
					       $_SESSION['user']=$fetch->email;
					       $_SESSION['firstname']=$fetch->firstname;
					       $_SESSION['lastname']=$fetch->lastname;
					       $_SESSION['customer_id']=$fetch->customer_id;
						   $_SESSION['mobile']=$fetch->mobile;
						   $_SESSION['address']=$fetch->address;
						   $_SESSION['country_id']=$fetch->country_id;
						   
					 echo "<script>
					 alert('Customers Login Success');
					 window.location='index';
				     </script>";
			         }
				     else
			         {
					     echo "<script>
					     alert('Login Failed due to Blocked Account');
				         </script>";
				     }
			     }
			         else
			         {
				         echo "<script>
				         alert('Login Failed');
                         </script>";
			         }
			     }
			 
			 include_once('login.php');
			 break;
			 
			 case '/logout':
			         unset($_SESSION['user']);
					 unset($_SESSION['firstname']);
					 unset($_SESSION['customer_id']);
			 echo "<script>
			 alert('Customers Logout Success');
			 window.location='index';
			 </script>";
			 break;
			 
			 
			 case '/profile':
			 $where=array("customer_id"=>$_SESSION['customer_id']);
			 $res=$this->select_where('customers',$where);
			 $fetch=$res->fetch_object();
			 include_once('profile.php');
			 break;
			 
			 case '/edituser':
			 $countries_arr=$this->select('countries');
			 if(isset($_REQUEST['editcustomer_id']))
			 {
				$customer_id=$_REQUEST['editcustomer_id'];
				$where=array("customer_id"=>$customer_id);
				$run=$this->select_where('customers',$where);
				$fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					$firstname=$_REQUEST['firstname'];
					$lastname=$_REQUEST['lastname'];
					$mobile=$_REQUEST['mobile'];
					$address=$_REQUEST['address'];
					$gender=$_REQUEST['gender'];
					
					$languages_arr=$_REQUEST['languages']; // lag arr convert into string
					$languages=implode(",",$languages_arr);

					$country_id=$_REQUEST['country_id'];
					$updated_at=date("Y-m-d H:i:s");	
					
					if($_FILES['file']['size']>0)
					{
						// img upload
						$file=$_FILES['file']['name'];
						$path="../upload/customers/".$file; // path
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						
						$arr=array("firstname"=>$firstname,"lastname"=>$lastname,"mobile"=>$mobile,"address"=>$address,"gender"=>$gender,"languages"=>$languages,"country_id"=>$country_id,"file"=>$file,"updated_at"=>$updated_at);
					
						$res=$this->update('customers',$arr,$where); 
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('/upload/customers/'.$userfile);
							echo "<script> 
								alert('customers Update Success');
								window.location='profile';
							</script>";
						}
					}
					else
					{
						$arr=array("firstname"=>$firstname,"lastname"=>$lastname,"mobile"=>$mobile,"address"=>$address,"gender"=>$gender,"languages"=>$languages,"country_id"=>$country_id,"updated_at"=>$updated_at);
						$res=$this->update('customers',$arr,$where); 
						if($res)
						{
							echo "<script> 
								alert('customers Update success');
								window.location='profile';
							</script>";
						}	
					}
					
					}
				}
			include_once('edituser.php');
			break;
			 
			
			case '/signup':
			 $countries_arr=$this->select('countries');
			 if(isset($_REQUEST['submit']))
			 {
				 $firstname=$_REQUEST['firstname'];
				 $lastname=$_REQUEST['lastname'];
				 $email=$_REQUEST['email'];
				 $password=md5($_REQUEST['password']);
				 $mobile=$_REQUEST['mobile'];
				 $address=$_REQUEST['address'];
				 $gender=$_REQUEST['gender'];
				
				 $languages_arr=$_REQUEST['languages']; // lag arr convert into string
				 $languages=implode(",",$languages_arr);
				 
			
				 $country_id=$_REQUEST['country_id'];
				 
				 // img upload
				$file=$_FILES['file']['name'];
				$path='upload/customers/'.$file; // path
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				 
				 $created_at=date("Y-m-d H:i:s");
				 $updated_at=date("Y-m-d H:i:s");
				 
				 $arr=array("firstname"=>$firstname,"lastname"=>$lastname,"email"=>$email,"password"=>$password,"mobile"=>$mobile,"address"=>$address,"gender"=>$gender,"languages"=>$languages,"country_id"=>$country_id,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
				 
				 $res=$this->insert('customers',$arr);
				 if($res)
				 {
					 echo "<script>
					     alert('customers registered success');
						 </script>";
			     }
				 else
			     {
					 echo "<script>
					      alert('failed');
						  </script>";
				 }
			 }
			 include_once('signup.php');
			 break;
			 
			 default:
			 include_once('pagenotfound.php');
			 break;
		 }
	 }
}
$obj=new control;
?>