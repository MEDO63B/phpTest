<?php
$i =0;
$j =0;
$y=1;
for($i=0; $i < 5; $i++)
{
    for($j=0; $j<$i; $j++,$y*=12)
    {
        echo" <button  style='margin: 0px;width:50px; height: 50px; background: rgb(12,15,$y);'> </button> ";
    }
    echo "<br>";
}

echo"
<html>
    <head>
    <script>
    let btn = document.getElementsByTagName('button');
    for(let b=0; b<btn.length ;b++)
    {
        btn[b].onclick = function ()
        {
            alert('You are on '+ b);
        }
    }
</script>
</head>
    
</html>
";


?>