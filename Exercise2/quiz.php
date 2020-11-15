
<?php 
    $totalScore = 0;
    //Question1
    if($_POST["Q1A"] == "A")
    {
        echo "Question 1: What is the capital of China?<br>";
        echo "You answered: Beijing<br>";
        echo "Correct answer: Beijing<br>";
        $totalScore += 20;
    }

    else if($_POST["Q1A"] == "B")
    {
        echo "Question 1: What is the capital of China?<br>";
        echo "You answered: Guangzhou<br>";
        echo "Correct answer: Beijing<br>";
    }

    else if($_POST["Q1A"] == "C")
    {
        echo "Question 1: What is the capital of China?<br>";
        echo "You answered: Shanghai<br>";
        echo "Correct answer: Beijing<br>";
    }

    else if($_POST["Q1A"] == "D")
    {
        echo "Question 1: What is the capital of China?<br>";
        echo "You answered: None<br>";
        echo "Correct answer: Beijing<br>";
    }
    else if($_POST["Q1A"] == "")
    {
        echo "Question 1: What is the capital of China?<br>";
        echo "You answered:<br>";
        echo "Correct answer: Beijing<br>";
    }
    echo "<br>";

    //Question2
    if($_POST["Q2A"] == "A")
    {
        echo "Question 2: What is the capital of USA?<br>";
        echo "You answered: Washington, D.C.<br>";
        echo "Correct answer: Washington, D.C.<br>";
        $totalScore += 20;
    }

    else if($_POST["Q2A"] == "B")
    {
        echo "Question 2: What is the capital of USA?<br>";
        echo "You answered: Chicago<br>";
        echo "Correct answer: Washington, D.C.<br>";
    }
    
    else if($_POST["Q2A"] == "C")
    {
        echo "Question 2: What is the capital of USA?<br>";
        echo "You answered: San Francisco<br>";
        echo "Correct answer: Washington, D.C.<br>";
    }

    else if($_POST["Q2A"] == "C")
    {
        echo "Question 2: What is the capital of USA?<br>";
        echo "You answered: San Francisco<br>";
        echo "Correct answer: Washington, D.C.<br>";
    }

    else if($_POST["Q2A"] == "D")
    {
        echo "Question 2: What is the capital of USA?<br>";
        echo "You answered: None<br>";
        echo "Correct answer: Washington, D.C.<br>";
    }
    else if($_POST["Q2A"] == "")
    {
        echo "Question 2: What is the capital of USA?<br>";
        echo "You answered:<br>";
        echo "Correct answer: Washington, D.C.<br>";
    }
    echo "<br>";

    //Question3
    if($_POST["Q3A"] == "A")
    {
        echo "Question 3: What is the capital of Canada?<br>";
        echo "You answered: Ottawa<br>";
        echo "Correct answer: Ottawa<br>";
        $totalScore += 20;
    }

    else if($_POST["Q3A"] == "B")
    {
        echo "Question 3: What is the capital of Canada?<br>";
        echo "You answered: Vancouver<br>";
        echo "Correct answer: Ottawa<br>";
    }

    else if($_POST["Q3A"] == "C")
    {
        echo "Question 3: What is the capital of Canada?<br>";
        echo "You answered: Toronto<br>";
        echo "Correct answer: Ottawa<br>";
    }

    else if($_POST["Q3A"] == "D")
    {
        echo "Question 3: What is the capital of Canada?<br>";
        echo "You answered: Calgray<br>";
        echo "Correct answer: Ottawa<br>";
    }
    else if($_POST["Q3A"] == "")
    {
        echo "Question 3: What is the capital of Canada?<br>";
        echo "You answered:<br>";
        echo "Correct answer: Ottawa<br>";
    }
    echo "<br>";

    //Question4
    if($_POST["Q4A"] == "A")
    {
        echo "Question 4: What is the capital of Russia?<br>";
        echo "You answered: Moscow<br>";
        echo "Correct answer: Moscow<br>";
        $totalScore += 20;
    }

    else if($_POST["Q4A"] == "B")
    {
        echo "Question 4: What is the capital of Russia?<br>";
        echo "You answered: St. Petersburg<br>";
        echo "Correct answer: Moscow<br>";
    }

    else if($_POST["Q4A"] == "C")
    {
        echo "Question 4: What is the capital of Russia?<br>";
        echo "You answered: Novosibirsk<br>";
        echo "Correct answer: Moscow<br>";
    }

    else if($_POST["Q4A"] == "D")
    {
        echo "Question 4: What is the capital of Russia?<br>";
        echo "You answered: Yekaterinburg<br>";
        echo "Correct answer: Moscow<br>";
    }

    else if($_POST["Q4A"] == "")
    {
        echo "Question 4: What is the capital of Russia?<br>";
        echo "You answered:<br>";
        echo "Correct answer: Moscow<br>";
    }
    echo "<br>";

    //Question5
    if($_POST["Q5A"] == "A")
    {
        echo "Question 5: What is the capital of UK?<br>";
        echo "You answered: London<br>";
        echo "Correct answer: London<br>";
        $totalScore += 20;
    }

    else if($_POST["Q5A"] == "B")
    {
        echo "Question 5: What is the capital of UK?<br>";
        echo "You answered: Edinburgh<br>";
        echo "Correct answer: London<br>";
    }

    else if($_POST["Q5A"] == "C")
    {
        echo "Question 5: What is the capital of UK?<br>";
        echo "You answered: Manchester<br>";
        echo "Correct answer: London<br>";
    }

    else if($_POST["Q5A"] == "D")
    {
        echo "Question 5: What is the capital of UK?<br>";
        echo "You answered: Birmingham<br>";
        echo "Correct answer: London<br>";
    }

    else if($_POST["Q5A"] == "")
    {
        echo "Question 5: What is the capital of UK?<br>";
        echo "You answered:<br>";
        echo "Correct answer: London<br>";
    }
    echo "<br>";
    echo "Total Score :".$totalScore."%";

?>
