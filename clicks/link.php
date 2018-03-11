<?php

//gets the content from "counter.txt"
$filecontent = file_get_contents('counter.txt');

//separates the contents of counter.txt by "\n" (spaces)
$filelines = explode("\n", $filecontent);

$location_url = null;

$new_file_content = "";

//for each $filelines variable, assign it as $fileline and execute code
foreach ($filelines AS $fileline)
{
//separates the contents of $fileline by "|"
    $filelines_exploded = explode("|", $fileline);

    //assigns counter.txt label to a variable
    $label       = $filelines_exploded[0];
    //assigns counter.txt id's to a variable
    $click_id    = $filelines_exploded[1];
    //assigns counter.txt url's to a variable
    $click_url   = $filelines_exploded[2];
    //assigns counter.txt click count to a variable
    $click_count = $filelines_exploded[3];

    if ($_REQUEST["id"] == $click_id)
    {
        //$url_array contains all of the variables in an array
        //$url_array = $filelines_exploded;
        $location_url = $click_url;
        //string to rebuild the counter.txt file
        $new_file_content .= $label . "|" . $click_id . "|" . $click_url . "|" . ((int) $click_count + 1);
    }
    else

    {
        $new_file_content .= $fileline;
    }
    //adds a line break when rebuilding the counter.txt
    $new_file_content .= "\n";
}
//file_put_contents to rewrite the file
file_put_contents('counter.txt', trim($new_file_content));
//redirects to the link gathered from the counter.txt file
if (strlen($location_url) > 0) {
    header('Location: ' . $location_url);
}
?>