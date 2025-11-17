<!DOCTYPE html>
 
<html>
<head>
    <title>DOM Basic Example</title>
</head>
 
<body>
   
<center>
 
 
<h1 id="pagetitle"> Light Mood </h1>
 
<button id="switchbutton" onclick="toggle()" > Switch </button>
</center>
 
<script>
 
 
function toggle()
{
var body= document.body;
var title=document.getElementById("pagetitle");
var button= document.getElementById("switchbutton");
 
if (body.style.backgroundColor==="black")
    {
        body.style.backgroundColor = "white";
        body.style.color="black";
        title.innerHTML="Light Mood";
        button.innerHTML="Swtich to Dark MOOD";
 
    }
 
    else
    {
        body.style.backgroundColor = "black";
        body.style.color="white";
        title.innerHTML="Dark Mood";
        button.innerHTML="Swtich to Light MOOD"
 
    }
 
    }
 
</script>
 
</body>
 
</html>