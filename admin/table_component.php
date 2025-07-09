
<?php


    function tableComponent($connection, $table_name,$dashboard_name, $table_column = [], $table_row = []) {

    // orders data
    $get_table_data = "SELECT * FROM $table_name";
    $query_table_data = mysqli_query($connection, $get_table_data);

    echo "$dashboard_name Dashboard";
    if ($query_table_data && mysqli_num_rows($query_table_data) > 0) {
        echo '
            <table border="2">
                <thead>
                    <tr>';
                        foreach ($table_column as  $col_name) {
                            echo '<th>'.$col_name.'</th>';
                        }
        echo        '</tr>
                </thead>
                <tbody>
        ';

        while ($row_name = mysqli_fetch_assoc($query_table_data)) {
            echo '
                <tr class="values">';
                    foreach($table_row as $row_values) {
                        if($row_values === 'price') {
                            echo '<td>' . $row_name[$row_values] . '$</td>';
                        }
                        else {
                            echo '<td>' . $row_name[$row_values] . '</td>';
                        }
                    }
            echo '</tr>';
        }
        echo '
            </tbody>
                </table>
                <br /><br />
        ';
    }

    }

?>