<?php
include('config.php');


$csvFile = "../csv/repo.csv";

// Open the CSV file
if (($handle = fopen($csvFile, "r")) !== false) {
    // Read the first line to get column headers
    $headers = fgetcsv($handle, 1000, ",");
    $columns = implode(", ", $headers); // Prepare column names for SQL

    // Loop through each row in the CSV
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        // Escape data for security
        $escapedData = array_map(function ($value) use ($conn) {
            return "'" . mysqli_real_escape_string($conn, $value) . "'";
        }, $data);
        
        // Prepare SQL with escaped data
        $values = implode(", ", $escapedData);
        $sql = "INSERT INTO repo (id, units, article, author, doi) VALUES ($values)";

        // Execute the insert query
        if (!mysqli_query($conn, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    fclose($handle);
    
    echo "Data imported successfully!";
} else {
    echo "Error opening the file.";
}

mysqli_close($conn);
?>
