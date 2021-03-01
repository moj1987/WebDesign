function changePara1()
{
    document.getElementById("para1").innerHTML="New Text!";
}

function changeBackPara1()
{
    document.getElementById("para1").innerHTML="Original Text";
}

function insertCurrentDate()
{
    document.getElementById("datePara").innerHTML=Date();
}

function changeStyle()
{
    document.getElementById("loremPara").style.fontStyle="italic";
}

function changeBackStyle()
{
    document.getElementById("loremPara").style.fontStyle="normal";
}