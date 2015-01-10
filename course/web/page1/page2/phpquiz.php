<!DOCTYPE HTML>

<html>
    <head>
        <title>PHP Quiz</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel-noscript.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-desktop.css" />
            <link rel="stylesheet" href="css/style-noscript.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
    </head>
    <body class="no-sidebar">

        <!-- Header -->
            <div id="header">
    <nav id="nav">
                        <ul>
                            
                            
                            <li><a href="/projects/course/web/page1/page2/takequiz.php">Go Back</a></li>
                        </ul>
                        </nav>
                        </div>
                        <div class="wrapper style1">

                <div class="container">
                    <div class="row">
                        <div class="12u skel-cell-important" id="content">
                            <article id="main" class="special">
                            <header>
                                    <h2><a><span class="byline">Welcome to the PHP Quiz #1</span></a></h2>
                                    </header>
    <?php

    
// Read answerkey.txt file for the answers to each of the questions.
function readAnswerKey($filename) {
    $answerKey = array();
    
    // If the answer key exists and is readable, read it into an array.
    if (file_exists($filename) && is_readable($filename)) {
        $answerKey = file($filename);
    }
    
    return $answerKey;
}


// Read the questions file and return an array of arrays (questions and choices)
// Each element of $displayQuestions is an array where first element is the question 
// and second element is the choices.

function readQuestions($filename) {
    $displayQuestions = array();
    
    if (file_exists($filename) && is_readable($filename)) {
        $questions = file($filename);
    
        // Loop through each line and explode it into question and choices
        foreach ($questions as $key => $value) {
            $displayQuestions[] = explode(":",$value);
        }               
    }
    else { echo "Error finding or reading questions file."; }
    
    return $displayQuestions;
}


// Take our array of exploded questions and choices, show the question and loop through the choices.
function displayTheQuestions($questions) {
    if (count($questions) > 0) {
        foreach ($questions as $key => $value) {
            echo "<span class='byline'><b>$value[0]</b></span><br/><br/>";
            
            // Break the choices appart into a choice array
            if(isset($value[1])){
            $choices = explode(",",$value[1]);
            
            // For each choice, create a radio button as part of that questions radio button group
            // Each radio will be the same group name (in this case the question number) and have
            // a value that is the first letter of the choice.
            
            foreach($choices as $value) {
                $letter = substr(trim($value),0,1);
                echo "<input type=\"radio\" name=\"$key\" value=\"$letter\">$value<br/>";
            }
            
            echo "<br/>";
        }
    }
    }
    else { echo "No questions to display."; }
}


// Translates a precentage grade into a letter grade based on our customized scale.
function translateToGrade($percentage) {

    if ($percentage >= 90.0) { return "A"; }
    else if ($percentage >= 80.0) { return "B"; }
    else if ($percentage >= 70.0) { return "C"; }
    else if ($percentage >= 60.0) { return "D"; }
    else { return "F"; }
}

?>

<h4><span class="byline">Please complete the following questions as accurately as possible</span></h4>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<?php
    // Load the questions from the questions file
    $loadedQuestions = readQuestions("php.txt");
    
    // Display the questions
    displayTheQuestions($loadedQuestions);
?>

<input type="submit" class= "button button-style1"  name="submitquiz" value="Submit Quiz"/>


<?php

// This grades the quiz once they have clicked the submit button
if (isset($_POST['submitquiz'])) {

    // Read in the answers from the answer key and get the count of all answers.
    $answerKey = readAnswerKey("phpkey.txt");
    $answerCount = count($answerKey);
    $correctCount = 0;


    // For each answer in the answer key, see if the user has a matching question submitted
    foreach ($answerKey as $key => $keyanswer) {
        if (isset($_POST[$key])) {
            // If the answerkey and the user submitted answer are the same, increment the 
            // correct answer counter for the user
            if (strtoupper(rtrim($keyanswer)) == strtoupper($_POST[$key])) {
                $correctCount++;
            }
            
        }
    }


    // Now we know the total number of questions and the number they got right. So lets spit out the totals.
    echo "<br/><br/><span class='byline'>Total Questions: $answerCount</span><br/>";
    echo "<span class='byline'>Number Correct: $correctCount</span><br/><br/>";

    if ($answerCount > 0) {

        // If we had answers in the answer key, translate their score to percentage
        // then pass that percentage to our translateGrade function to return a letter grade.
        $percentage = round((($correctCount / $answerCount) * 100),1);
        echo "<span class='byline'>Total Score: $percentage% (Grade: " . translateToGrade($percentage) . ")</span><br/>";
    }
    else {
        // If something went wrong or they failed to answer any questions, we have a score of 0 and an "F"
        echo "<span class='byline'>Total Score: 0 (Grade: F)</span>";
    }
    session_start();
     $con=mysql_connect("localhost","root","")or die("cannot connect");
      mysql_select_db("course",$con)or die ("cannot connect to database");
                                                          
      date_default_timezone_set('UTC');
       $dat1=date(DATE_RFC2822);
       $uid=$_SESSION['userid']; 
       $result = mysql_query("SELECT * FROM user_score2 where login='$uid' ") or die(mysql_error()) ;
                                                                 
     $row = mysql_fetch_assoc($result);
    $attempt_no=$row['attempt'];
    $attempt_no+=1;
    $score=$row['score1'];
    $score+=$percentage;
    $score/=$attempt_no;
    $result1=mysql_query("UPDATE user_score2 set attempt='$attempt_no', score1='$score', date1='$dat1' where login='$uid' AND subject='android'")or die("could not update");
    

}

?>

</form>
</article>
</div>
</div>
</div>
</div>
</body>
</html>