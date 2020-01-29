<?php 

class AddCaseController extends Controller 
{

    private $documents;
    private $documentTypes;

    public function addCase(Request $request)
    {
        $this->documents = $this->modelEntity('Document')->getAllEntities();
        $this->documentTypes = $this->modelEntity('DocumentType')->getAllEntities();
        
        $view = $this->view('AddCaseView', $this->documents, $this->documentTypes);
    }

    public function saveCase(Request $request)
    {
        $this->documents = $this->modelEntity('Document')->getAllEntities();
        $this->documentTypes = $this->modelEntity('DocumentType')->getAllEntities();

        $err = false;
        if (empty($request->post("content"))){
            $err = true;
        }else{
            $content = $request->post("content");
        }
    
        if (empty($request->post("picture"))){
            $err = true;
            $picture = null;
        }else{
            $picture = $request->post("picture");
        }
    
        if (empty($request->post("gender"))){
            $err = true;
        }else{
            $sex = $request->post("gender");
        }
    
        if (empty($request->post("birthDate"))){
            $err = true;
        }else{
            $birthDate = $request->post("birthDate");
        }
    
        if (empty($request->post("birthPlace"))){
            $err = true;
        }else{
            $birthPlace = $request->post("birthPlace");
        }

        if (empty($request->post("address"))){
            $err = true;
        }else{
            $address = $request->post("address");
        }

        if (empty($request->post("citizenship"))){
            $err = true;
        }else{
            $citizenship = $request->post("citizenship");
        }

        if (empty($request->post("ancestorsInfo"))){
            $err = true;
        }else{
            $ancestorsInfo = $request->post("ancestorsInfo");
        }

        if (empty($request->post("documentNumber"))){
            $err = true;
        }else{
            $documentNumber = $request->post("documentNumber");
        }

        if (empty($request->post("name"))){
            $err = true;
        }else{
            $name = $request->post("name");
        }

        if (empty($request->post("surname"))){
            $err = true;
        }else{
            $surname = $request->post("surname");
        }

        if (empty($request->post("documentTypeId"))){
            $err = true;
        }else{
            $documentTypeId = $request->post("documentTypeId");
        }
        
        if($err == true){
            $errorMsg = 'Nie udało się dodać sprawy<br>wszystkie pola muszą być wypełnione';
            $view = $this->view('AddCaseView', $this->documents, $this->documentTypes, $errorMsg);
        }
        else{
            $msg = 'Dodano nową sprawę';
            $this->case = $this->modelEntity('CaseEntity')
            ->setIdLocal(5)
            ->setContent($request->post('content'))
            ->setPicture($request->post('picture'))
            ->setIsDeleted(false)
            ->setIsSent(false)
            ->setSex($request->post('gender'))
            ->setBirthDate($request->post('birthDate'))
            ->setBirthPlace($request->post('birthPlace'))
            ->setAddress($request->post('address'))
            ->setCitizenship($request->post('citizenship'))
            ->setAncestorsInfo($request->post('ancestorsInfo'))
            ->setIdDocument(1)
            ->setIdWorker(1)
            ->save();

        }
    }
}