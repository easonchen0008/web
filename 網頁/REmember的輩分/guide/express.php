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

if (!empty($_SESSION["no1"]))
{
    echo "cook1:  ";
    echo $_SESSION["no1"];
    if($_SESSION["no1"]=="1")
    {
    $_SESSION["no1"]="";
    header("Location:express/REmember_guide_3_1.html");
    }
}else if (!empty($_SESSION["no2"]))
{
    if($_SESSION["no2"]=="1")
    {
    $_SESSION["no2"]="";
    header("Location:express/REmember_guide_3_2.html");
    }
}else if (!empty($_SESSION["no3"]))
{
    if($_SESSION["no3"]=="1")
    {
    $_SESSION["no3"]="";
    header("Location:express/REmember_guide_3_3.html");
    }
}else if (!empty($_SESSION["no4"]))
{
    if($_SESSION["no4"]=="1")
    {
    $_SESSION["no4"]="";
    header("Location:express/REmember_guide_3_4.html");
    }
}else if (!empty($_SESSION["no5"]))
{
    if($_SESSION["no5"]=="1")
    {
    $_SESSION["no5"]="";
    header("Location:express/REmember_guide_3_5.html");
    }
}else
{
    echo " nothing here ";
    header("Location:REmember_guide_return.html");
}

?>