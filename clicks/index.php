<html lang="en">
    <head>
        <meta charset="utf-8">        
        <link rel="stylesheet" href="style_blue.css" type="text/css" media="screen" />
        <title>Click Counter Statistics</title>
    </head>
    <body>
        <div class="container">
            <div class="statistics_table">
                <table>
                    <tr>
                        <td>
                            Label
                        </td>
                        <td>
                            Link
                        </td>
                        <td>
                            URL
                        </td>
                        <td>
                            Click
                        </td>
                    </tr>
                <?php
                //gets the content from "counter.txt"
                $filecontent = file_get_contents('counter.txt');

                //separates the contents of counter.txt by "\n" (spaces)
                $filelines = explode("\n", $filecontent);

                $url_array = null;

                $new_file_content = "";

                //for each $filelines variable, assign it as $fileline and execute code
                foreach ($filelines AS $fileline)
                {
                    //separates the contents of $fileline by "|"
                    $filelines_exploded = explode("|", $fileline);

                    //assigns counter.txt label to a variable
                    $label    = $filelines_exploded[0];
                    //assigns counter.txt id's to a variable
                    $click_id    = $filelines_exploded[1];
                    //assigns counter.txt url's to a variable
                    $click_url   = $filelines_exploded[2];
                    //assigns counter.txt click count to a variable
                    $click_count = $filelines_exploded[3];
                    //$url_array contains all of the variables in an array
                    $url_array   = $filelines_exploded;
                
                echo "<tr>";
                echo "<td>";
                echo "$label";
                echo "</td>";
                echo "<td>";
                echo "?id=$click_id";
                echo "</td>";
                echo "<td>";
                echo "$click_url";
                echo "</td>";
                echo "<td>";
                echo "$click_count";
                echo "</td>";
                echo "</tr>";
                }
                ?>
                    </table>
            </div>
        </div>

        <div class="bottom-link middle_fix">
            <p class="middle_fix">Created by <a href="http://www.mfscripts.com" style="color: #4F6B72;" target="_blank">MFScripts.com</a></p>
        </div>

    </body>
</html>
