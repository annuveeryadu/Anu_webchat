<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
    $data = $_POST["data"];

    // Validate the data (you can add more validation as needed)
    if (!empty($data)) {
        // Append the data to a text file
        $file = fopen("data.txt", "a");
        fwrite($file, $data . PHP_EOL);
        fclose($file);

        // Redirect back to the form page or any other page as needed
        header("Location: index.html");
        exit();
    } else {
        echo "Data field is empty.";
    }
} else {
    // Handle cases where form data is not submitted
    echo "Form submission method not recognized.";
}
?>
