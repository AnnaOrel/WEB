<?php
    if (!isset($_POST['annCategory'], $_POST['annTitle'], $_POST['annEmail'], $_POST['annText'])) 
	{
        return;
    }
	
    $categoryName = $_POST['annCategory'];
    $title = $_POST['annTitle'];
    $email = $_POST['annEmail'];
    $text = $_POST['annText'];

    $annFile = fopen('categories/' . $categoryName . '/' . $title . '.txt', 'w');
    fwrite($annFile, $email . "\n");
    fwrite($annFile, $text);
    fclose($annFile);

    header("Location: Lab3-3.php");
?>

