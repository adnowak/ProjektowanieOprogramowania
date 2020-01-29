<?php 

class DisplayCasesController extends Controller 
{
    public function displayCases(Request $request)
    {
        $cases = $this->modelEntity('CaseEntity')->getAllEntities();
        $view = $this->view('DisplayCasesView', $cases);
    }
}