<?php

include_once('../websitepanel/model.php'); //step 1 load model

class control extends model // step 2 extends
{
	// magic function that call automatically when you declare class object
	 function __construct()
	 {
		   
		 session_start();
		 
		 model::__construct();// step 3 call model __construct

		 $url=$_SERVER['PATH_INFO'];
		 switch($url)
		 {
			 case '/employee':
			 if(isset($_REQUEST['submit']))
				  //echo"<pre>";print_r($_REQUEST);exit;
			 {
				 $emp_name=$_REQUEST['emp_name'];
				 $emp_password=md5($_REQUEST['emp_password']);   //password encrypted
				
				 $where=array("emp_name"=>$emp_name,"emp_password"=>$emp_password);
				 
				 $res=$this->select_where('employees',$where);
				 
				 $chk=$res->num_rows;  //condition res check by rows
				
				 if($chk==1)  //1 means true
				 {
					
					 $_SESSION['employees']=$emp_name;
					 echo "<script>
					 alert('Employee Login Success');
					 window.location='dashboard';
				     </script>";
			     }
				 else
			     {
					 echo "<script>
					 alert('Login Failed');
				     </script>";
				 }
			 }
			 include_once('employee.php');
			 break;
			 
			 case '/employee_logout':
			 unset($_SESSION['employee']);
			 echo "<script>
			 alert('Employee Logout Success');
			 window.location='employee';
			 </script>";
			 break;
			 
			 case '/dashboard':
			 include_once('dashboard.php');
			 break;
			 
			 case '/add_cate':
			 if(isset($_REQUEST['submit']))
			  //echo"<pre>";print_r($_REQUEST);exit;

			 {
			 
	     	     $category_name=$_REQUEST['category_name'];
			     $description=$_REQUEST['description'];
			     
				 
				 $file=$_FILES['file']['name'];
				 $path="../upload/categories/".$file;
				 $tmp_file=$_FILES['file']['tmp_name'];
				 move_uploaded_file($tmp_file,$path);
				 
				 //echo"<pre>";print_r($_FILES);exit;
				 $created_at=date('y-m-d H:i:s');
				 $updated_at=date('y-m-d H:i:s');
				 $arr=array("category_name"=>$category_name,"description"=>$description,"file"=>$file,
				 "created_at"=>$created_at,"updated_at"=>$updated_at);
				 $res=$this->insert('categories',$arr);
				//echo"<pre>";print_r($res);exit;
				 if($res)
				 {
					 echo "<script>
					 alert('category Added successfully');
					 </script>";
				 }
				 else
				 {
					 echo "<script>
					 alert('Not added');
					 </script>";
				 }
			 }
			 include_once('add_cate.php');
			 break;
			 
			 case '/edit_cate':
			 $countries_arr=$this->select('countries');
			 if(isset($_REQUEST['editcategory_id']))
			 {
				$category_id=$_REQUEST['editcategory_id'];
				$where=array("category_id"=>$category_id);
				$run=$this->select_where('categories',$where);
				$fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					$category_name=$_REQUEST['category_name'];
					$description=$_REQUEST['description'];
					
					$updated_at=date("Y-m-d H:i:s");	
					
					if($_FILES['file']['size']>0)
					{
						// img upload
						$file=$_FILES['file']['name'];
						$path="../upload/categories/".$file; // path
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						
						$arr=array("category_name"=>$category_name,"description"=>$description,"file"=>$file,"updated_at"=>$updated_at);
					
						$res=$this->update('categories',$arr,$where); 
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('/upload/categories/'.$userfile);
							echo "<script> 
								alert('Categories Update Success');
								window.location='manage_cate';
							</script>";
						}
					}
					else
					{
						$arr=array("category_name"=>$category_name,"description"=>$description,"updated_at"=>$updated_at);
						$res=$this->update('categories',$arr,$where); 
						if($res)
						{
							echo "<script> 
								alert('Categories Update Success');
								window.location='manage_cate';
							</script>";
						}	
					}
					
					}
				}
			include_once('edit_cate.php');
			break;
			 
			 case '/manage_cate':
			 $data_categories=$this->select('categories');
			 include_once('manage_cate.php');
			 break;
			  
			 case '/add_prod':
			 if(isset($_REQUEST['submit']))
			  //echo"<pre>";print_r($_REQUEST);exit;

			 {
			 
	     	     $product_name=$_REQUEST['product_name'];
			     
				 $file=$_FILES['file']['name'];
				 $path="../upload/products/".$file;
				 $tmp_file=$_FILES['file']['tmp_name'];
				 move_uploaded_file($tmp_file,$path);
				 
				 //echo"<pre>";print_r($_FILES);exit;
				 $description=$_REQUEST['description'];
				 $main_price=$_REQUEST['main_price'];
				 $dis_price=$_REQUEST['dis_price'];
				   
				 $created_at=date('y-m-d H:i:s');
				 $updated_at=date('y-m-d H:i:s');
				 $arr=array("product_name"=>$product_name,"file"=>$file,"description"=>$description,"main_price"=>$main_price,"dis_price"=>$dis_price,
				 "created_at"=>$created_at,"updated_at"=>$updated_at);
				 $res=$this->insert('products',$arr);
				//echo"<pre>";print_r($res);exit;
				 if($res)
				 {
					 echo "<script>
					 alert('product Added successfully');
					 </script>";
				 }
				 else
				 {
					 echo "<script>
					 alert('Not added');
					 </script>";
				 }
			 }
			 include_once('add_prod.php');
			 break;
			 
			 case '/edit_prod':
			 $countries_arr=$this->select('countries');
			 if(isset($_REQUEST['editproduct_id']))
			 {
				$product_id=$_REQUEST['editproduct_id'];
				$where=array("product_id"=>$product_id);
				$run=$this->select_where('products',$where);
				$fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					$product_name=$_REQUEST['product_name'];
					$description=$_REQUEST['description'];
					$main_price=$_REQUEST['main_price'];
					$dis_price=$_REQUEST['dis_price'];
					
					$updated_at=date("Y-m-d H:i:s");	
					
					if($_FILES['file']['size']>0)
					{
						// img upload
						$file=$_FILES['file']['name'];
						$path="../upload/products/".$file; // path
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						
						$arr=array("product_name"=>$product_name,"file"=>$file,"description"=>$description,"main_price"=>$main_price,"dis_price"=>$dis_price,"updated_at"=>$updated_at);
					
						$res=$this->update('products',$arr,$where); 
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('/upload/products/'.$userfile);
							echo "<script> 
								alert('Products Update Success');
								window.location='manage_prod';
							</script>";
						}
					}
					else
					{
						$arr=array("product_name"=>$product_name,"description"=>$description,"main_price"=>$main_price,"dis_price"=>$dis_price,"updated_at"=>$updated_at);
						$res=$this->update('products',$arr,$where); 
						if($res)
						{
							echo "<script> 
								alert('Products Update Success');
								window.location='manage_prod';
							</script>";
						}	
					}
					
					}
				}
			include_once('edit_prod.php');
			break;
			 
			 case '/manage_prod':
			 $data_products=$this->select('products');
			 include_once('manage_prod.php');
			 break;
			 
			 case '/add_emp':
			 if(isset($_REQUEST['submit']))
			  //echo"<pre>";print_r($_REQUEST);exit;

			 {
			 
	     	     $emp_name=$_REQUEST['emp_name'];
			     $emp_email=$_REQUEST['emp_email'];
			     $emp_mobileno=$_REQUEST['emp_mobileno'];
				 $emp_address=$_REQUEST['emp_address'];
				 
				 //echo"<pre>";print_r($_FILES);exit;
				 $created_at=date('y-m-d H:i:s');
				 $updated_at=date('y-m-d H:i:s');
				 $arr=array("emp_name"=>$emp_name,"emp_email"=>$emp_email,"emp_mobileno"=>$emp_mobileno,"emp_address"=>$emp_address,
				 "created_at"=>$created_at,"updated_at"=>$updated_at);
				 $res=$this->insert('employees',$arr);
				//echo"<pre>";print_r($res);exit;
				 if($res)
				 {
					 echo "<script>
					 alert('Employee Added successfully');
					 </script>";
				 }
				 else
				 {
					 echo "<script>
					 alert('Not added');
					 </script>";
				 }
			 }
			 include_once('add_emp.php');
			 break;
			 
			 case '/edit_emp':
			 $employees_arr=$this->select('employees');
			 if(isset($_REQUEST['editemp_id']))
			 {
				$emp_id=$_REQUEST['editemp_id'];
				$where=array("emp_id"=>$emp_id);
				$run=$this->select_where('employees',$where);
				$fetch=$run->fetch_object();
			
				
				if(isset($_REQUEST['submit']))
				{
					$emp_name=$_REQUEST['emp_name'];
					$emp_email=$_REQUEST['emp_email'];
					$emp_mobileno=$_REQUEST['emp_mobileno'];
					$emp_address=$_REQUEST['emp_address'];
					
					$updated_at=date("Y-m-d H:i:s");	
					if($_FILES['file']['size']>0)
					{
					$arr=array("emp_name"=>$emp_name,"emp_email"=>$emp_email,"emp_mobileno"=>$emp_mobileno,"emp_address"=>$emp_address,"updated_at"=>$updated_at);
					
						$res=$this->update('employees',$arr,$where); 
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							echo "<script> 
								alert('Employees Update Success');
								window.location='manage_emp';
							</script>";
						}
					}
					else
					{
						$arr=array("emp_name"=>$emp_name,"emp_email"=>$emp_email,"emp_mobileno"=>$emp_mobileno,"emp_address"=>$emp_address,"updated_at"=>$updated_at);
						$res=$this->update('employees',$arr,$where); 
						if($res)
						{
							echo "<script> 
								alert('Employees Update Success');
								window.location='manage_emp';
							</script>";
						}	
					}
				}	
			}
			include_once('edit_emp.php');
			break;
			 
			 case '/manage_emp':
			 $data_employees=$this->select('employees');
			 include_once('manage_emp.php');
			 break;
			 
			 case '/manage_feed':
			 $data_feedbacks=$this->select('feedbacks');
			 include_once('manage_feed.php');
			 break;
			 
			 case '/manage_cus':
			 $data_customers=$this->select('customers');
			 include_once('manage_cus.php');
			 break;
			 
			 case '/manage_cont':
			 $data_contacts=$this->select('contacts');
			 include_once('manage_cont.php');
			 break;
			 
			 
			 case '/delete':
			 if(isset($_REQUEST['delcontact_id']))
			 {
				$contact_id=$_REQUEST['delcontact_id'];
				
				$where=array("contact_id"=>$contact_id);
				$res=$this->delete_where('contacts',$where);
				if($res)
				{
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_cont';
					</script>";
				}
			}
			
			if(isset($_REQUEST['delcustomer_id']))
			{
				$customer_id=$_REQUEST['delcustomer_id'];
				
				$where=array("customer_id"=>$customer_id);
				
				//delete user image 
				$run=$this->select_where('customers',$where);
				$fetch=$run->fetch_object();
				$userfile=$fetch->file;
				
				$res=$this->delete_where('customers',$where);
				if($res)
				{
					unlink('../websitepanel/upload/customers/'.$userfile);// delete image from folder
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_cust';
					</script>";
				}
				
				
			}
			
			if(isset($_REQUEST['delcategory_id']))
			{
				$category_id=$_REQUEST['delcategory_id'];
				
				$where=array("category_id"=>$category_id);
				
				//delete user image 
				$run=$this->select_where('categories',$where);
				$fetch=$run->fetch_object();
				$userfile=$fetch->file;
				
				$res=$this->delete_where('categories',$where);
				if($res)
				{
					unlink('../websitepanel/upload/categories/'.$userfile);// delete image from folder
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_cate';
					</script>";
				}
				
				
			}
		
		
		if(isset($_REQUEST['delproduct_id']))
			{
				$product_id=$_REQUEST['delproduct_id'];
				
				$where=array("product_id"=>$product_id);
				
				//delete user image 
				$run=$this->select_where('products',$where);
				$fetch=$run->fetch_object();
				$userfile=$fetch->file;
				
				$res=$this->delete_where('products',$where);
				if($res)
				{
					unlink('../websitepanel/upload/products/'.$userfile);// delete image from folder
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_prod';
					</script>";
				}
				
				
			}
		
		
			if(isset($_REQUEST['delemp_id']))
			{
				$emp_id=$_REQUEST['delemp_id'];
				
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employees',$where);
				if($res)
				{
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_emp';
					</script>";
				}
			}
			
			if(isset($_REQUEST['delfeedback_id']))
			{
				$feedback_id=$_REQUEST['delfeedback_id'];
				
				$where=array("feedback_id"=>$feedback_id);
				$res=$this->delete_where('feedbacks',$where);
				if($res)
				{
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_feed';
					</script>";
				}
			}
			break;
			
			case '/status':
			
				if(isset($_REQUEST['statuscustomer_id']))
				{
					$customer_id=$_REQUEST['statuscustomer_id'];
					
					$where=array("customer_id"=>$customer_id);
					
					//get status  
					$run=$this->select_where('customers',$where);
					$fetch=$run->fetch_object();
					$status=$fetch->status;
					
					if($status=="Block")
					{
						$arr=array("status"=>"Unblock");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Unblock Success'); 
							window.location='manage_cust';
							</script>";
						}						
					}
					else
					{
						$arr=array("status"=>"Block");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							unset($_SESSION['user']);
							unset($_SESSION['name']);
							unset($_SESSION['customer_id']);
							echo "<script> 
							alert('Block Success'); 
							window.location='manage_cust';
							</script>";
						}		
					}
				}
				
				if(isset($_REQUEST['statusemp_id']))
				{
					$emp_id=$_REQUEST['statusemp_id'];
					
					$where=array("emp_id"=>$emp_id);
					
					//get status  
					$run=$this->select_where('employees',$where);
					$fetch=$run->fetch_object();
					$status=$fetch->status;
					
					if($status=="Block")
					{
						$arr=array("status"=>"Unblock");
						$res=$this->update('employees',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Unblock Success'); 
							window.location='manage_emp';
							</script>";
						}						
					}
					else
					{
						$arr=array("status"=>"Block");
						$res=$this->update('employees',$arr,$where);
						if($res)
						{
							unset($_SESSION['user']);
							unset($_SESSION['name']);
							unset($_SESSION['emp_id']);
							echo "<script> 
							alert('Block Success'); 
							window.location='manage_emp';
							</script>";
						}		
					}
				}
			break;
			 
			 default:
			 include_once('pagenotfound.php');
			 break;
			 
		 }
	 }
}

$obj=new control;
?>