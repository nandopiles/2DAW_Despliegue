<?php

namespace Ferran\App\Views;

class ListView
{
    /**
     * Prints the information with a table format
     *
     * @param  Array $data
     * @return void
     */
    public function printHTML(array $data)
    {
        echo '<table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
            </tr>';

        foreach ($data as $row) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['surname'] . '</td>
                </tr>';
        }

        echo '</table>';
    }
}
