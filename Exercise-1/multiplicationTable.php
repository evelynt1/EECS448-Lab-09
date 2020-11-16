<?php

        echo "<table>";

        for($i = 0; $i <= 100; $i++)
        {
            echo "<tr> \n";
                for($j = 0; $j <= 100; $j++)
                {
                    if($i == 0)
                    {
                            if($j == 0)
                            {
                                    echo "<td></td>";
                            }
                            else
                            {
                                    echo "<td>$j</td>";
                            }
                    }
                    else
                    {
                        if($j == 0)
                        {
                                echo "<td>$i</td>";
                        }
                        else
                        {
                                $product = $i*$j;
                                echo "<td>$product</td> \n";
                        }
                    }
                }
                echo "</tr>";
        }
        echo "</table>";

?>
