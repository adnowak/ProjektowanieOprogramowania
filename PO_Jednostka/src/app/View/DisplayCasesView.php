<?php
require_once 'Base/View.php';

class DisplayCasesView extends View
{
    private $_template = 'displayCases.html.php';

    public function __construct(...$args)
    {
        $this->cases = $args[0];
        $this->toHtml();
    }

    private function toHtml()
    {
        require_once TEMPLATES . $this->_template;
    }

    private function createTable()
    {
        foreach ($this->cases as $case) {
            $sent = $case['IsSent'] ? 'Tak' : 'Nie';
            $deleted = $case['IsDeleted'] ? 'Tak' : 'Nie';
            echo
                '<tr>
                <td>' . $case['IdLocal'] . '</td>
                <td>' . $case['Content'] . '</td>
                <td>' . $case['Picture'] . '</td>
                <td>' .  $deleted . '</td>
                <td>' . $sent  . '</td>
                <td>' . $case['Sex'] . '</td>
                <td>' . $case['BirthDate'] . '</td>
                <td>' . $case['BirthPlace'] . '</td>
                <td>' . $case['Address'] . '</td>
                <td>' . $case['Citizenship'] . '</td>
                <td>' . $case['AncestorsInfo'] . '</td>
                <td>' . $case['IdDocument'] . '</td>
                <td><a style="text-decoration: none; color: black; background-color: white;" href="#">√</a></td>
                <td><a style="text-decoration: none; color: white; background-color: green;" href="#">∆</a></td>
                <td><a style="text-decoration: none; color: white; background-color: red;" href="#">X</a></td>
                
            </tr>';
        }
    }
}
