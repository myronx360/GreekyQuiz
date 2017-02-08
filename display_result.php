<!--HW03-->
<!--display_results-->
<!--Myron Williams -->
<?php
$q1_answers = array("Less than 3"=>0, "3-10"=>5, "More than 10"=>10);
$q2_answers = array("romance"=>0, "action"=>3, "drama"=>6, "comedy"=>9,"science"=>12);
$q3_answers = array("nope"=>0, "school"=>5, "course"=>10);
$q4_answers = array("person"=>0, "identical"=>2, "friend"=>5, "industry"=>10);
$q5_answers = array("anything"=>0, "physical"=>2, "art"=>3, "computers"=>10);
$q6_answers = array("buy"=>0, "take"=>2, "try"=>10);
$q7_answers = array("out"=>0, "gaming"=>5, "surfing"=>10);


$answers = array($q1_answers[$_POST['video_games']],$q2_answers[$_POST['movies']],
                 $q3_answers[$_POST['programming']], $q4_answers[$_POST['upgrade']],
                 $q5_answers[$_POST['school']], $q6_answers[$_POST['broken']],
                 $q7_answers[$_POST['saturday']]);

function calculate_result($answers){
    $total = 0;
    foreach ($answers as $value){
        $total += $value;
    }

    if($total >= 51){
        $geekiness_level = "Uber-Geek";
        $img = "<img src='img/uber_geek.jpg'>";
        $description = "You are the geek supreme! You are likely to be interested in technology, science, gaming and geeky media such as Sci-Fi and fantasy. All the mean kids that used to laugh at you in high school are now begging you for a job. Be proud of your geeky nature, for geeks shall inherit the Earth!";

    }elseif ($total >= 11){
        $geekiness_level = "Semi-Geek";
        $img = "<img src='img/semi_geek.jpg'>";
        $description = "Maybe you're just influenced by the trend, or maybe you just got it all perfectly balanced. You have some geeky traits, but they aren't as \"hardcore\" and they don't take over your life. You like some geeky things, but aren't nearly as obsessive about them as the uber-geeks. You actually get to enjoy both worlds";

    }else{
        $geekiness_level = "Non-Geek";
        $img = "<img src='img/non_geek.jpg'>";
        $description = "There isn't a single geeky bone in your body. You prefer to party rather than study, and have someone else fix your computer, if need be. You're just too cool for this. You probably don't even wear glasses!";


    }

    echo "<h1> Quiz Result: $geekiness_level</h1>";

    echo $img ."<br>";
    echo $description;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Geeky Level</title>
    <style>
        body{
            text-align: center;
        }
        img{
            width: 200px;
            height: 200px;
        }

    </style>
</head>
<body>
<?php
calculate_result($answers);
?>
</body>
</html>
