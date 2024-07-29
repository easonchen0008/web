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
if (!empty($_POST['4']))
{
    echo $_POST["4"];
    $_SESSION["no4"] = '1';
}
if (!empty($_POST['5']))
{
    echo $_POST["5"];
    $_SESSION["no5"] = '1';
}
if (!empty($_POST['6']))
{
    echo $_POST["6"];
    $_SESSION["no6"] = '1';
}
if (!empty($_POST['7']))
{
    echo $_POST["7"];
    $_SESSION["no7"] = '1';
}
if (!empty($_POST['8']))
{
    echo $_POST["8"];
    $_SESSION["no8"] = '1';
}
if (!empty($_POST['9']))
{
    echo $_POST["9"];
    $_SESSION["no9"] = '1';
}
if (!empty($_SESSION["no1"]))
{
    echo "cook1:  ";
    echo $_SESSION["no1"];
    if($_SESSION["no1"]=="1")
    {
    $_SESSION["no1"]="";
    header("Location:mood/REmember_guide_2_1.html");
    }
}else if (!empty($_SESSION["no2"]))
{
    if($_SESSION["no2"]=="1")
    {
    $_SESSION["no2"]="";
    header("Location:mood/REmember_guide_2_2.html");
    }
}else if (!empty($_SESSION["no3"]))
{
    if($_SESSION["no3"]=="1")
    {
    $_SESSION["no3"]="";
    header("Location:mood/REmember_guide_2_3.html");
    }
}else if (!empty($_SESSION["no4"]))
{
    if($_SESSION["no4"]=="1")
    {
    $_SESSION["no4"]="";
    header("Location:mood/REmember_guide_2_4.html");
    }
}else if (!empty($_SESSION["no5"]))
{
    if($_SESSION["no5"]=="1")
    {
    $_SESSION["no5"]="";
    header("Location:mood/REmember_guide_2_5.html");
    }
}else if (!empty($_SESSION["no6"]))
{
    if($_SESSION["no6"]=="1")
    {
    $_SESSION["no6"]="";
    header("Location:mood/REmember_guide_2_6.html");
    }
}else if (!empty($_SESSION["no7"]))
{
    if($_SESSION["no7"]=="1")
    {
    $_SESSION["no7"]="";
    header("Location:mood/REmember_guide_2_7.html");
    }
}else if (!empty($_SESSION["no8"]))
{
    if($_SESSION["no8"]=="1")
    {
    $_SESSION["no8"]="";
    header("Location:mood/REmember_guide_2_8.html");
    }
}else if (!empty($_SESSION["no9"]))
{
    if($_SESSION["no9"]=="1")
    {
    $_SESSION["no9"]="";
    header("Location:mood/REmember_guide_2_9.html");
    }
}else
{
    echo " nothing here ";
    header("Location:REmember_guide_return.html");
}

?>