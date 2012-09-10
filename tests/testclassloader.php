<?php

/**
 * Class loader for unit testing.
 */

spl_autoload_register(function ($class) {

            $path = get_include_path();

            $class = str_replace("proof\\", NULL, $class);

            print "Searching for the $class class.. in $path.\n";

            $class = str_replace("\\", '/', $class) . ".php";

            $result = (include_once $class);

            if($result)
            {
                print "Found $class!\n";
            }
            else
            {
                print "..\n";
            }

        });
?>
