<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
            $students = [
            "Emmanuel"  => 42,
            "Thierry"   => 51,
            "Pascal"    => 45,
            "Eric"      => 48,
            "Nicolas"   => 19
        ];
            $average;
        ?>
        <table>
            <tbody>
            <th>Prénom</th>
            <th>Ages</th>
                <?php foreach($students as $cle => $element)
                {
                    $average += $element;
                    ?>
                    <tr>
                        <td>
                        <?php
                            echo $cle;
                        ?>
                        </td>
                        <td>
                        <?php
                            echo $element ;
                        ?>
                        </td>
                    </tr>
            <?php
                }

                ?>
            </tbody>
        </table>
        <br/>
        <?php
            $count = count($students);
            $average = $average/$count;
            echo "Moyenne :" . $average;
        ?>
    </body>
</html>
