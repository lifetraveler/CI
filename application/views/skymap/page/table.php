<div>
    <table border="1">
        <?php
        foreach($item as $table_item) {
            $table=array_values($table_item);
            echo '<tr>';
            for ($i = 0; $i < count($table); $i++)
            {
                echo '<td>'.$table[$i].'</td>';
            }
            echo '</tr>';
        }

        ?>




    </table>
    <?php
    echo $pagination;
    ?>
</div>