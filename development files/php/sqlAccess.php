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
    $stmt = $conn->prepare("SELECT * FROM VOTECOUNTS");

    $allCountryVotes = array();

    if ($stmt->execute()) {
      while ($row = $stmt->fetch()) {
        $countryVotes = array();
        $countryVotes['COUNTRY'] = $row['COUNTRY'];
        $countryVotes['NUM_VOTES'] = $row['NUM_VOTES'];

        $allCountryVotes[] = $countryVotes;
      }
    }

    echo json_encode($allCountryVotes);

  }catch(PDOException $e){
    echo json_encode("Error: " . $e->getMessage());
  }
  $conn = null;

?>
