<!--Vaswani p23-->
<!--assign a variabl and computee-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Assign 3</title>
    </head>
    <body>
        <?php
            // set a variable
            $attribute = 'price';
            // create a new variable
            // its name comes dynamically
            // from the value of $attribute
            ${$attribute} = 678;
            // output: 678
            echo $price;
        ?>
    </body>
</html>
