<?php
    include_once("5_db_connection.php");
    include_once("admin/function.php");

	$cu_id=$_POST["cu_id"];
	$at_id=$_POST["at_id"];
	$sql2=$conn->prepare("SELECT * FROM advertisement_type WHERE at_id=? ");
    $sql2->bind_param("i",$at_id);
    $sql2->execute();
    $result2=$sql2->get_result(); 
	$row2=$result2->fetch_assoc();
    $format_type=$row2["at_type"];
	
    if($format_type!="MARQUEE")
    {
		 $format_type;
         $at_id=$_POST["at_id"];
         $ap_id=$_POST["ap_id"];
         $ap_priority=$_POST["ap_priority"];
         $ap_price=$_POST["ap_price"];
         $ad_no_of_days=$_POST["ad_no_of_days"];
         $ad_total_price=$_POST["ad_total_price"];
         $ad_status="REQUESTED";
         $ad_date =date("Y-m-d");         
         $ad_avail_date=date('Y-m-d', strtotime($ad_date. '+'.$ad_no_of_days.' days'));    

         $folder="admin/photos/advertisement/";
         $ad_image=$_FILES["ad_image"]["name"];
         $tmp_ad_image=$_FILES["ad_image"]["tmp_name"];


        $filetype=pathinfo($ad_image,PATHINFO_EXTENSION);
        if($filetype=="jpg"||$filetype=="JPEG"||$filetype=="png")
        {
        	$ad_type="IMAGE";    
        }
        else if($filetype=="mp4")
        {
        	$ad_type="VIDEO";        
        }
        else
        {
        	$ad_type="OTHER";    
        }
		$ad_status1="ACTIVE";	
		$sql1=$conn->prepare("SELECT * FROM advertisement WHERE ap_id=? AND ad_type=? AND ad_status=?");
		$sql1->bind_param("iss",$ap_id,$ad_type,$ad_status1);
		$sql1->execute(); 
		$result1=$sql1->get_result();
		$result1->num_rows;
		if($result1->num_rows>0)
		{
			echo"<script type='text/javascript'>
			alert('Advertisement is Active, Please Choose Different Ad Position');        
			history.back();
			</script>";    
		}
        else
        {

//echo $cu_id;
//echo "<br>";
//echo $ap_id;
//echo "<br>";
//echo $at_id;
//echo "<br>";
//echo $ad_image;
//echo "<br>";
//echo $ad_type;
//echo "<br>";
//echo $ad_no_of_days;
//echo "<br>";
//echo $ad_total_price;
//echo "<br>";
//echo $ad_status;
//echo "<br>"; 
//echo $ad_date;
//echo "<br>";  
//echo $ad_avail_date;
//echo "<br>";         
            $ad_image=upload_image($ad_image,$tmp_ad_image,$folder);                            
            $sql=$conn->prepare("INSERT INTO advertisement(cu_id,ap_id,at_id,ad_name,ad_type,ad_no_of_days,ad_total_price,ad_status,ad_date,ad_avail_date)VALUES(?,?,?,?,?,?,?,?,?,?)");
            $sql->bind_param("iiissiisss",$cu_id,$ap_id,$at_id,$ad_image,$ad_type,$ad_no_of_days,$ad_total_price,$ad_status,$ad_date,$ad_avail_date);
            if($sql->execute())
            {
                echo"<script type='text/javascript'>
                    alert('Record Added Successfully');        
                   window.location='index.php';
                </script>";
            }
            else
            {
                    echo"<script type='text/javascript'>
                    alert('Record Not Added');
                   window.history.back();
                </script>";
            }
        }
    }
    else
    {
        $at_id=$_POST["at_id"];
        $ap_id=$_POST["ap_id"];
        $ap_price=$_POST["ap_price"];
        $ad_no_of_days=$_POST["ad_no_of_days"];
        $ad_total_price=$_POST["ad_total_price"];
        $ad_status="REQUESTED";
        $ad_date =date("Y-m-d");
        $ad_avail_date=date('Y-m-d', strtotime($ad_date. '+'.$ad_no_of_days.' days'));    
        $ad_image=$_POST["marquee_text"];    
        $ad_type="MARQUEE";

        $sql11=$conn->prepare("INSERT INTO advertisement(cu_id,ap_id,at_id,ad_name,ad_type,ad_no_of_days,ad_total_price,ad_status,ad_date,ad_avail_date)VALUES(?,?,?,?,?,?,?,?,?,?)");
        $sql11->bind_param("iiissiisss",$cu_id,$ap_id,$at_id,$ad_image,$ad_type,$ad_no_of_days,$ad_total_price,$ad_status,$ad_date,$ad_avail_date);
        if($sql11->execute())
        {
            echo"<script type='text/javascript'>
                alert('Record Added Successfully');        
                window.location='index.php';
            </script>";
        }
        else
        {
                echo"<script type='text/javascript'>
                    alert('Record Not Added');        
                    window.history.back();
                </script>";
        }   
    }

?>