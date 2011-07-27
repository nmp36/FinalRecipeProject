<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<form  action="index.php" method="post" >
<title>Schema Creator</title>
</head>
<body>
    <div style="border-style: outset" align="left">
        <h1>Welcome to Recipe System</h1>
        <h5 style="color: red">*User interface in progress<h5>
        <table width="400" border="0">
        <tr align="center">
        <td><strong>Name :</strong></td>
        <td align="left"><input  id="recipeID" type="text" name="RecipeName" /></td>  
        </tr>
        <tr align="center">
        <td><strong>Description:</strong></td>
        <td align="left"><input  id="descid" type="text" name="Description" /></td>  
        </tr>
        <tr align="center">
        <td><strong>Image :</strong></td>
        <td align="left"><input  id="imgid" type="text" name="ImageName" /></td>  
        </tr>
        <tr align="center">
        <td><strong>URL:</strong></td>
        <td align="left"><input  id="URLID" type="text" name="URLName" /></td>  
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" name="Check" title="Check" value="Search Recipe"/></td>
        </tr>
        </table>
        </div>
<?php
function __autoload($class_name) {
include $class_name . '.php';
}
echo '<h1> Welcome </h1>';
function test()
{
//$thing=new Recipe();
//echo $thing->PrintThing();
//echo $thing->PrintCreativeWork();
}

if (empty($_POST["RecipeName"]) && empty($_POST["Description"]) && empty($_POST["ImageName"]) && empty($_POST["URLName"]))
{
 echo 'PLEASE ENTER ATLEAST ONE INPUT' ;  
}
else
{
$thing=new Recipe();
echo $thing->SearchThing("name", $_POST["RecipeName"]);
echo $thing->SearchCreativeWork();
}
//
//$thing->setNameValue('Eastern Omlete Recipe.');
//$thing->setNameTag("span");
//$thing->setNameAttributes('');
//
//
//$thing->setUrlValue('http://www.Myownrecipe.com');
//$thing->setUrlTag('a');
//$thing->setUrlAttributes('href');
//
//$thing->setImageValue('http://www.mmocrunch.com/wp-content/uploads/2008/01/lego.jpg');
//$thing->setImageTag('img');
//$thing->setImageAttributes('picture');
//
//
//$thing->setDescriptionValue('This is My first recipe.');
//$thing->setDescriptionTag('span');
//$thing->setDescriptionAttributes('text');
//
//$thing->setCookingMethodValue('<b>Cooking Method :Frying');
//$thing->setCookingMethodTag('span');
//$thing->setCookingMethodAttributes('text');
//


?>
</body>
    </form>
 </html>