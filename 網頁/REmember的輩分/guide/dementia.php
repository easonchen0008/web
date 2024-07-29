<?php
echo "hy";
session_start();
if (!empty($_POST['1']))
{
    echo "post1: ";
    echo $_POST["1"];
    $_SESSION["no1"] = '1';
}
if (!empty($_POST['2']))
{
    echo "post2: ";
    echo $_POST["2"];
    $_SESSION["no2"] = '1';
}
if (!empty($_POST['3']))
{
    echo $_POST["3"];
    $_SESSION["no3"] = '1';
}


if (!empty($_SESSION["no1"]))
{
    echo "cook1:  ";
    echo $_SESSION["no1"];
    if($_SESSION["no1"]=="1")
    {
    $_SESSION["no1"]="";
    header("Location:dementia/REmember_guide_12_1.html");
    }
}else if (!empty($_SESSION["no2"]))
{
    if($_SESSION["no2"]=="1")
    {
    $_SESSION["no2"]="";
    header("Location:dementia/REmember_guide_12_2.html");
    }
}else if (!empty($_SESSION["no3"]))
{
    if($_SESSION["no3"]=="1")
    {
    $_SESSION["no3"]="";
    header("Location:dementia/REmember_guide_12_3.html");
    }
}else
{
    echo " nothing here ";
    header("Location:REmember_guide_return.html");
}

?>