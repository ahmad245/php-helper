// Read a CSV file
$handle = fopen("my_huge_csv_file.csv", "r");

// Optionally, you can keep the number of the line where
// the loop its currently iterating over
$lineNumber = 1;

// Iterate over every line of the file
while (($raw_string = fgets($handle)) !== false) {
    // Parse the raw csv string: "1, a, b, c"
    $row = str_getcsv($raw_string);

    // into an array: ['1', 'a', 'b', 'c']
    // And do what you need to do with every line
    var_dump($row);
    
    // Increase the current line
    $lineNumber++;
}

fclose($handle);