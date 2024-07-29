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
if (!empty($_POST['10']))
{
    echo $_POST["10"];
    $_SESSION["no10"] = '1';
}
if (!empty($_POST['11']))
{
    echo $_POST["11"];
    $_SESSION["no11"] = '1';
}
if (!empty($_POST['12']))
{
    echo $_POST["12"];
    $_SESSION["no12"] = '1';
}
if (!empty($_POST['13']))
{
    echo $_POST["13"];
    $_SESSION["no13"] = '1';
}
if (!empty($_POST['14']))
{
    echo $_POST["14"];
    $_SESSION["no14"] = '1';
}
if (!empty($_POST['15']))
{
    echo $_POST["15"];
    $_SESSION["no15"] = '1';
}
if (!empty($_POST['16']))
{
    echo $_POST["16"];
    $_SESSION["no16"] = '1';
}
if (!empty($_POST['17']))
{
    echo $_POST["17"];
    $_SESSION["no17"] = '1';
}
if (!empty($_POST['18']))
{
    echo $_POST["18"];
    $_SESSION["no18"] = '1';
}
if (!empty($_SESSION["no1"]))
{
    echo "cook1:  ";
    echo $_SESSION["no1"];
    if($_SESSION["no1"]=="1")
    {
    $_SESSION["no1"]="";
    header("Location:behavior/REmember_guide_4_1.html");
    }
}else if (!empty($_SESSION["no2"]))
{
    if($_SESSION["no2"]=="1")
    {
    $_SESSION["no2"]="";
    header("Location:behavior/REmember_guide_4_2.html");
    }
}else if (!empty($_SESSION["no3"]))
{
    if($_SESSION["no3"]=="1")
    {
    $_SESSION["no3"]="";
    header("Location:behavior/REmember_guide_4_3.html");
    }
}else if (!empty($_SESSION["no4"]))
{
    if($_SESSION["no4"]=="1")
    {
    $_SESSION["no4"]="";
    header("Location:behavior/REmember_guide_4_4.html");
    }
}else if (!empty($_SESSION["no5"]))
{
    if($_SESSION["no5"]=="1")
    {
    $_SESSION["no5"]="";
    header("Location:behavior/REmember_guide_4_5.html");
    }
}else if (!empty($_SESSION["no6"]))
{
    if($_SESSION["no6"]=="1")
    {
    $_SESSION["no6"]="";
    header("Location:behavior/REmember_guide_4_6.html");
    }
}else if (!empty($_SESSION["no7"]))
{
    if($_SESSION["no7"]=="1")
    {
    $_SESSION["no7"]="";
    header("Location:behavior/REmember_guide_4_7.html");
    }
}else if (!empty($_SESSION["no8"]))
{
    if($_SESSION["no8"]=="1")
    {
    $_SESSION["no8"]="";
    header("Location:behavior/REmember_guide_4_8.html");
    }
}else if (!empty($_SESSION["no9"]))
{
    if($_SESSION["no9"]=="1")
    {
    $_SESSION["no9"]="";
    header("Location:behavior/REmember_guide_4_9.html");
    }
}else if (!empty($_SESSION["no10"]))
{
    if($_SESSION["no10"]=="1")
    {
    $_SESSION["no10"]="";
    header("Location:behavior/REmember_guide_4_10.html");
    }
}else if (!empty($_SESSION["no11"]))
{
    if($_SESSION["no11"]=="1")
    {
    $_SESSION["no11"]="";
    header("Location:behavior/REmember_guide_4_11.html");
    }
}else if (!empty($_SESSION["no12"]))
{
    if($_SESSION["no12"]=="1")
    {
    $_SESSION["no12"]="";
    header("Location:behavior/REmember_guide_4_12.html");
    }
}else if (!empty($_SESSION["no13"]))
{
    if($_SESSION["no13"]=="1")
    {
    $_SESSION["no13"]="";
    header("Location:behavior/REmember_guide_4_13.html");
    }
}else if (!empty($_SESSION["no14"]))
{
    if($_SESSION["no14"]=="1")
    {
    $_SESSION["no14"]="";
    header("Location:behavior/REmember_guide_4_14.html");
    }
}else if (!empty($_SESSION["no15"]))
{
    if($_SESSION["no15"]=="1")
    {
    $_SESSION["no15"]="";
    header("Location:behavior/REmember_guide_4_15.html");
    }
}else if (!empty($_SESSION["no16"]))
{
    if($_SESSION["no16"]=="1")
    {
    $_SESSION["no16"]="";
    header("Location:behavior/REmember_guide_4_16.html");
    }
}else if (!empty($_SESSION["no17"]))
{
    if($_SESSION["no17"]=="1")
    {
    $_SESSION["no17"]="";
    header("Location:behavior/REmember_guide_4_17.html");
    }
}else if (!empty($_SESSION["no18"]))
{
    if($_SESSION["no18"]=="1")
    {
    $_SESSION["no18"]="";
    header("Location:behavior/REmember_guide_4_18.html");
    }
}else
{
    echo " nothing here ";
    header("Location:REmember_guide_return.html");
}

?>