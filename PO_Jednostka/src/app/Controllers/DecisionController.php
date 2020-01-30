<?php

class DecisionController extends Controller
{
    private $caseId;
    private $worker;


    public function makeDecision(Request $request)
    {
        $this->caseId = $request->url(0);
        $case = $this->modelEntity('CaseEntity')->getById($this->caseId)->getData();
        $document = $this->modelEntity('Document')->getById($case['IdDocument'])->getData();
        //print_r($case['Id']);
        $documentType = $this->modelEntity('DocumentType')->getById($document['IdDocumentType'])->getData();
        $worker = $this->modelEntity('Worker')->getById($case['IdWorker'])->getData();
        $view = $this->view('DecisionView', $case, $document, $documentType, $worker);
    }

    public function saveDecision(Request $request)
    {
        echo($this->caseId);
        $this->modelEntity('Decision')
        ->setDecisionType($request->post('decisionType'))
        ->setDate(date('Y-m-d'))
        ->setReasoning($request->post('content'))
        ->setDecisionMaker($request->post('worker'))
        ->setIdCase($request->post('caseid'))
        ->save();
    }
}
