<?php 
 include("../../../conn.php");


extract($_POST);

$selStudentFullname = $dbh->query("SELECT * FROM examinee_tbl WHERE exmne_fullname='$fullname' ");
$selStudentEmail = $dbh->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email' ");


if($gender == "0")
{
	$res = array("res" => "noGender");
}
else if($course == "0")
{
	$res = array("res" => "noCourse");
}
else if($year_level == "0")
{
	$res = array("res" => "noLevel");
}
else if($selStudentFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selStudentEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $email);
}
else
{
	$insData = $dbh->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,exmne_password) VALUES('$fullname','$course','$gender','$bdate','$year_level','$email','$password')  ");
	if($insData)
	{
		$res = array("res" => "success", "msg" => $email);
	}
	else
	{
		$res = array("res" => "failed");
	}
}


echo json_encode($res);
 ?>