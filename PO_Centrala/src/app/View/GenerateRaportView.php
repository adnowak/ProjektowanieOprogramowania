<?php 
require_once 'Base/View.php';

class GenerateRaportView extends View
{
    private $_template = 'generateRaport.html.php';
    
    public function __construct(...$args) 
    {
        $this->units = $args[0];
        $this->err = $args[1];
        if($this->err){
            echo 'Nie wybrano zadnych jednostek';
            echo '<meta http-equiv="Refresh" content="3; url=/createraport" />';
        }
        else
            $this->toHtml();

    }

    private function sumOfCases()
    {
        $sum = 0;
        foreach($this->units as $unit){
            $sum += $unit['cases'];
        }
        return $sum;
    }

    private function toHtml() 
    {
        require_once TEMPLATES . $this->_template;
    }

    private function currentDateTime()
    {
        return date("d/m/Y H:i");
    }

    private function availableIntervals()
    {
        foreach($this->intervals as $interval){
            echo '<option value="' . $interval['Id'] . '">' . $interval['IntervalName'] . '</option>';
        }
    }

    private function createTable(){
        
        $i = 1;
        foreach($this->units as $unit){
            echo
            '<tr>
                <td>'. $i . '</td>
                <td>'. $unit["Name"] . '</td>
                <td>' . $unit['cases'] . '</td>
            </tr>';
            $i++;
        }
    }

}