<?php
$conn="";
$servername="localhost";
$username="root";
$password="";
$dbname="news_portal";
$conn=new mysqli($servername,$username,$password,$dbname);


function fetch_header($conn)
{
    $status=1;
    $sql=$conn->prepare("SELECT * FROM news_category WHERE news_category_status=?");
    $sql->bind_param("i",$status);
    $sql->execute();
    $result=$sql->get_result();
    return $result;	
}

function fetch_single($category,$conn)
{        
    $sql=$conn->prepare("SELECT * FROM news_details nd,news_category nc,reporters r WHERE nc.news_category_name=? AND nd.news_category_id=nc.news_category_id AND r.reporter_id=nd.reporter_id ORDER BY nd.news_details_id DESC LIMIT 1");
    $sql->bind_param("s",$category);
    $sql->execute();
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    return $row;	
}

function fetch_single_details($news_id,$conn)
{        
    $sql=$conn->prepare("SELECT * FROM news_details nd,news_category nc,reporters r WHERE nd.news_details_id=? AND nd.news_category_id=nc.news_category_id AND r.reporter_id=nd.reporter_id");
    $sql->bind_param("i",$news_id);
    $sql->execute();
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    return $row;	
}

function fetch_multiple($category,$news_id,$conn)
{    
    
    $sql=$conn->prepare("SELECT * FROM news_details nd,news_category nc,reporters r WHERE nc.news_category_name=? AND nd.news_category_id=nc.news_category_id AND r.reporter_id=nd.reporter_id AND nd.news_details_id!=? ORDER BY nd.news_details_id DESC LIMIT 3");
    $sql->bind_param("si",$category,$news_id);
    $sql->execute();
    $result=$sql->get_result();
    return $result;	
}

function fetch_multiple_list($category,$limit,$conn)
{        
    $sql=$conn->prepare("SELECT * FROM news_details nd,news_category nc,reporters r WHERE nc.news_category_name=? AND nd.news_category_id=nc.news_category_id AND r.reporter_id=nd.reporter_id ORDER BY nd.news_details_id DESC LIMIT $limit");
    $sql->bind_param("s",$category);
    $sql->execute();
    $result=$sql->get_result();
    return $result;	
}

function fetch_advertisement($priority,$type,$conn)
{
    $status="ACTIVE";
    $sql=$conn->prepare("SELECT * FROM advertisement a,advertisement_pricing ap WHERE a.ap_id=ap.ap_id AND ap.ap_priority=? AND a.ad_type=? AND a.ad_status=?");
    $sql->bind_param("iss",$priority,$type,$status);
    $sql->execute();
    $result=$sql->get_result();
    return $result;	
}

function fetch_news_list($category,$limit,$conn)
{    
    
    $sql=$conn->prepare("SELECT * FROM news_details nd,news_category nc,reporters r WHERE nc.news_category_name=? AND nd.news_category_id=nc.news_category_id AND r.reporter_id=nd.reporter_id ORDER BY nd.news_details_id DESC LIMIT $limit,5");
    $sql->bind_param("s",$category);
    $sql->execute();
    $result=$sql->get_result();
    return $result;	
}

function fetch_advertisement_pricing($ap_name,$conn)
{
    $sql=$conn->prepare("SELECT * FROM advertisement_pricing WHERE ap_name=?");   
    $sql->bind_param("s",$ap_name);
    $sql->execute();
    $result=$sql->get_result();
    $row=$result->fetch_assoc();
    return $row;	
}

function fetch_breaking_news($type,$conn)
{
    $sql=$conn->prepare("SELECT * FROM news_details nd,news_category nc,reporters r WHERE nd.news_category_id=nc.news_category_id AND r.reporter_id=nd.reporter_id AND nc.news_category_name=?  ORDER BY nd.news_details_id DESC LIMIT 10");       
    $sql->bind_param("s",$type);
    $sql->execute();
    $result=$sql->get_result();
    return $result;	
}
?>