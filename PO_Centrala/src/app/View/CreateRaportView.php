<?php 
require_once 'Base/View.php';

class CreateRaportView extends View
{
    private $_template = 'createRaport.html.php';
    
    public function __construct(...$args) 
    {
        $this->units = $args[0];
        $this->intervals = $args[1];
        $this->toHtml();
    }

    private function toHtml() 
    {
        require_once TEMPLATES . $this->_template;
    }

    private function availableIntervals()
    {
        foreach($this->intervals as $interval){
            echo '<option value="' . $interval['UnixTime'] . '">' . $interval['IntervalName'] . '</option>';
        }
    }

    private function populateTable()
    {
        $i = 1;
        foreach($this->units as $unit){
            echo
            '<tr>
                <td>'. $i . '</td>
                <td>'. $unit["Name"] . '</td>
                <td><input type="checkbox" name="unit[]" value="' . $unit['Id'] . '"></td>
            </tr>';
            $i++;
        }
    }
    
}