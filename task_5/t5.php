<?php //I did this for completing my lab task 5 because my part of our project is not fully ready yet , hope you'll consider this sir

$host="localhost";
$user="root";
$password="";
$database="lab 5";

$com="";
$stock_type="";
$product_name="";
$product_type="";
$product_quantity="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect($host,$user,$password,$database);
} catch(Exception $ex){
	echo 'Error';
}

if(isset($_POST['insert']))
{
	$data=getPosts();
	$insert_query="INSERT INTO 'users'('com','stock_type','product_name','product_type','product_quantity') values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
	try{
		$insert_data=mysqli_query($connect,$insert_query);

		if($insert_data){
			if(mysqli_affected_rows($connect)>0){
				echo 'Data Inserted';
			}else{
				echo 'Data Not Inserted';
			}
		}
	}catch(Exception $ex){
		echo 'Error Inserting'.$ex->getMessage();
	}
}

if(isset($_POST['delete']))
{
	$data=getPosts();
	$delete_query="DELETE FROM 'users' WHERE 'product_name'=$data[2]";
	try{
		$delete_data=mysqli_query($connect,$delete_query);

		if($delete_data){
			if(mysqli_affected_rows($connect)>0){
				echo 'Data deleted';
			}else{
				echo 'Data Could Not Be Deketed';
			}
		}
	}catch(Exception $ex){
		echo 'Error Deleting'.$ex->getMessage();
	}
}

?>
<iDOCTYPE Html>
	<html>
		<head>
			<title>Lab Task 5 on PHP</title>
		</head>
		<body>
			<style type="text/css">
	#text{
		height: 30px;
		border-radius: 5px;
		padding: 5px;
		border: solid thin #aaa;
	}
	#button{
		padding: 10px;
		width: 100px;
		color: white;
		background-color: skyblue;
		border: none;
	}	
	#box{
		background-color: lightblue;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
</style>
<div id="box">
			<form action="t5.php"method="post">
				<div style="font-size: 20px;margin: 10px;color: blueviolet;">Order Request</div>
				<input type="manufacturer" name="com"placeholder="Manufacturer"value="<?php echo $com;?>"><br><br>
				<input type="stc_type" name="stock_type"placeholder="Stock Type"value="<?php echo $stock_type;?>"><br><br>
				<input type="name" name="product_name"placeholder="Product Name"value="<?php echo $product_name;?>"><br><br>
				<input type="prod_type" name="product_type"placeholder="Product Type"value="<?php echo $product_type;?>"><br><br>
				<input type="quantity" name="product_quantity"placeholder="Product Quantity"value="<?php echo $product_quantity;?>"><br><br>

				<div>
					<input type="submit"name="insert"value="Add">
					<input type="submit"name="insert"value="Stock Type">
					<input type="submit"name="insert"value="Product Name">
					<input type="submit"name="insert"value="Product Type">
					<input type="submit"name="insert"value="Quantity">
				</div>
			</form>
		</div>
		</body>
	</html>