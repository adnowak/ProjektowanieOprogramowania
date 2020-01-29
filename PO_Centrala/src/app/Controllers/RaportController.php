<?php 

class RaportController extends Controller 
{
    public function createRaportView(Request $request)
    {
        $units = $this->modelEntity('Unit')->getAllEntities();
        $intervals = $this->modelEntity('TimeInterval')->getAllEntities();
        $view = $this->view('CreateRaportView', $units, $intervals);
    }

    public function generateRaportView(Request $request)
    {
        $interval = $request->get('interval');
        $unitIds = $request->get('unit');

        $this->units = [];
        foreach($unitIds as $unitId){
            $unit = $this->modelEntity('Unit')->getById($unitId)->getData();
            array_push($this->units, $unit);
        }
        //print_r($this->units);

        $cases = $this->modelEntity('CaseEntity')->getAllEntities();
        $packages = $this->modelEntity('Package')->getAllEntities();
        //$noCases = [];
       // foreach($unitIds as $unitId){
       //     array_push($noCases, $this->modelEntity('Unit')->casesInInterval($unitId, $interval, $cases, $packages));
       // }
        foreach($this->units as &$unit){
            $unit['cases'] = $this->modelEntity('Unit')->casesInInterval($unitId, $interval, $cases, $packages);
        }
        // print_r($this->units);
        //$this->units['dupa'] = 5;
        


        $view = $this->view('GenerateRaportView', $this->units);


        //$units = $this->modelEntity('Unit')->getAllEntities();
        //$intervals = $this->modelEntity('TimeInterval')->getAllEntities();
        //$view = $this->view('RaportView', $units, $intervals);
        // print_r($units);
    }

}