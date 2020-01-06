<?php
    echo <<<_END
        <html>
            <head>
                <title>Ice Test</title>
            </head>
            <body>
                <form method="post" action="ice_test.php">
                    Vanilla <input type="checkbox" name="ice[]" value="Vanilla">
                    Chocolate <input type="checkbox" name="ice[]" value="Chocolate">
                    Strawberry <input type="checkbox" name="ice[]" value="Strawberry">
                    <input type="submit">
                </form>
_END;
    $ice = $_POST['ice'];
    echo "Your favorite ice cream flavor(s) is/are: ";
    if (isset($ice)) foreach($ice as $item) echo "$item ";
    else echo "Ice Cream Hater!";
    echo <<<_END
            </body>
        </html>
_END;
?>