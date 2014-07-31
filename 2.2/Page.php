<style>
    img {
        width: 50px;
    }
</style>

<html>
<head>
<meta charset="UTF-8">
<title>Home Page</title>
<link type="text/css" rel="stylesheet" href="lab3.css">
</head>
<body>

<?php

    //excersize 1

    for ($row=0; $row<10; $row++)
    {
        if ($row % 2 == 0) {
        echo ("<br>");
        for ($column=0; $column<10; $column++)
        {
            echo ("<img src = \"images/happyPenguin.gif\" alt=\"penguin\" />");
            
        }
        }
        
        else {
            echo ("<br>");
        for ($column=0; $column<10; $column++)
        {
            echo ("<img src = \"images/angryDino.gif\" alt=\"penguin\" />");
            
        }
        }
    }
    
    echo ("<br>");
    echo ("<br>");
    
    //excersize 2
    
    $red = rand(0, 256);
    $green = rand(0, 256);
    $blue = rand(0, 256);
    
    echo ("<div style=\"background-color: rgb($red, $green, $blue); height: 300px; width: 500px;\"><h2>background colour is $red, $green, $blue</h2></div>");
    
    echo ("<br>");
    echo ("<br>");
    
    //excersize
    
    $nEntries = rand(0, 25);
    
    $dataArray = array();
    
    
    for($i=0; $i < $dataArray.Length; $i++)
    {
        $dataArray[] = rand(0, 101);
    }
    
    echo("<table>");
    echo("<tr><td>Index</td><td>Value</td></tr>");
    foreach ($dataArray as $fields => $values)
    {
        echo("<tr>");
        echo("<td>$nEntries</td>");
        echo("<td>$dataArray</td>");
        echo("</tr>");
    }
?>

</body>
</html>



