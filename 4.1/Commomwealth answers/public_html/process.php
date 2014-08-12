<style>
    table {
        border: 1px solid black;
        text-align: center;
    }
    
    tr:nth-child(odd){
	 color: white;
	 background-color: #60769F;
}

    tr:nth-child(even){
	 color: white;
	 background-color: #7894C8;
}

td {
    padding: 5px;
}

th {
    background-color: white;
    color: black;
}

</style>

<?php

                $numberCountries = $_POST['countryNum'];
		$firstMedalSport = $_POST['sport'];
		$notTopThree = $_POST['countries'];
		$hostCityArray = $_POST['location'];
		$notASport = $_POST['sports'];
		$score = 0;

echo("<table>");
echo("<tr><th>Question</th><th>Answer</th><th>Mark</th></tr>");

// q1
if ($numberCountries == 71)
{
    $mark = "Correct";
    $score = $score + 1;
}

else {
    $mark = "Incorrect";
}

echo ("<td>How many countires are in the 2014 Commonwealth Games?</td><td>$numberCountries</td><td>$mark</tr>");

// q2
if ($firstMedalSport == 'marathon')
{
    $mark = "Correct";
    $score = $score + 1;
}

else {
    $mark = "Incorrect";
}

echo ("<td>The first medal went to which sport?</td><td>$firstMedalSport</td><td>$mark</tr>");

// q3
if ($notTopThree == 'nz')
{
    $mark = "Correct";
    $score = $score + 1;
}

else {
    $mark = "Incorrect";
}

echo ("<td>Which of these countries are not in the top 3 medal count?</td><td>$notTopThree</td><td>$mark</tr>");


// q4
if (!in_array('delhi', $hostCityArray))
{
    $hostCityArray[]="missing delhi";
}

if (!in_array('auckland', $hostCityArray))
{
   $hostCityArray[]="missing auckland"; 
}

if (!in_array('manchester', $hostCityArray))
{
    $hostCityArray[]="missing manchester";
}


if (!in_array('melbourne', $hostCityArray))
{
    $hostCityArray[]="missing melbourne";
}


$rowspan = sizeof($hostCityArray);
echo ("<tr><td rowspan=5>Where were the last four Commonwealth games played?</td>");
        foreach ($hostCityArray as $location)
        {
            echo ("<td>$location</td>")
                if (($location == "auckland") &&)
        }
        
        
        echo ("</tr>");


// q5
if ($notASport == 'nz')
{
    $mark = "Correct";
    $score = $score + 1;
}

else {
    $mark = "Incorrect";
}

echo ("<tr><td>Which recognised sport has never been in the Commonwealth games?</td><td>$notASport</td><td>$mark</tr>");


echo ("</table>");

echo ("<p>Score = $score</p>");

?>