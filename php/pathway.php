<!DOCTYPE html>
<html>
<head>
    <title>RNA-seq Analysis Results</title>
</head>
<body>
    <h1>My RNA-seq Analysis Site</h1>
    <p>This HTML will get delivered as is</p>
    <?php
    // Sample RNA-seq pathway results
    $pathwayResults = [
        "Pathway 1: Description of Pathway 1",
        "Pathway 2: Description of Pathway 2",
        "Pathway 3: Description of Pathway 3",
        // ... more pathways
    ];

    echo "<p>RNA-seq Pathway Analysis Results:</p>";

    // Check if the pathway results array is not empty
    if (!empty($pathwayResults)) {
        echo "<ul>";
        foreach ($pathwayResults as $pathway) {
            echo "<li>" . htmlspecialchars($pathway) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No pathway results found.</p>";
    }
    ?>
    <footer>
        <p>Thanks for reading this toy example in PHP!</p>
    </footer>
</body>
</html>
