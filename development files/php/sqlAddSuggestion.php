<?php
  $servername = "localhost";
  $username = "rabitzco_dev";
  $password = "Clap3000!";
  $dbname = "rabitzco_visitorInfo";
  //$tablename = "VOTECOUNTS";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO STORY_SUGGESTIONS
                            (COUNTRY, SUGGESTION)
                            values
                            (:country, :suggestion);");
    $protectedCountry = $_POST['country'];
    $protectedSuggestion = $_POST['suggestion'];
    $params = array(':country' => $protectedCountry, ':suggestion' => $protectedSuggestion);
    $stmt->execute($params);
  }catch(PDOException $e){
    die("Error: " . $e->getMessage());
  }
  $conn = null;

?>
