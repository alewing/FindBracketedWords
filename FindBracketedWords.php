<!-- 
    Name:       FindBracketedWords.php
    
    Purpose:    Finds words that are within square brackets ([]).

    Created By: Andrew Ewing - 01/11/2022
-->

<?php
    $myFile = 'data.txt';

    // Get the file contents
    $myFileContents = @file_get_contents( $myFile );

    // Does file exist?
    if ($myFileContents === false)
    {
        //  No
        echo ('File does not exist in directory.');
        return;
    }

    preg_match_all('#\[(.*?)\]#', $myFileContents, $matches);

    // Was there at least one match?
    if (count($matches[0]) == 0)
    {
        // No
        echo 'There are 0 instances of words between [] in this file.';
        return;
    }

    foreach($matches[0] as $value)
        echo $value . "\r\n";
?>