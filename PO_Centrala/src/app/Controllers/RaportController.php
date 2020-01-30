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
        $this->units = [];

        $interval = $request->get('interval');
        $unitIds = $request->get('unit');
        $err = false;
        if (empty($request->get("unit"))){
            $err = true;
            $view = $this->view('GenerateRaportView', $this->units, $err);
            return;
        }

        foreach($unitIds as $unitId){
            $unit = $this->modelEntity('Unit')->getById($unitId)->getData();
            array_push($this->units, $unit);
        }

        $cases = $this->modelEntity('CaseEntity')->getAllEntities();
        $packages = $this->modelEntity('Package')->getAllEntities();
        foreach($this->units as &$unit){
            $unit['cases'] = $this->modelEntity('Unit')->casesInInterval($unit['Id'], $interval, $cases, $packages);
        }        


        $view = $this->view('GenerateRaportView', $this->units, $err);

    }

}