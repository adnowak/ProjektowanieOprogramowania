<?php 

class AddCaseController extends Controller 
{
    private $cases;
    private $documents;
    private $documentTypes;

    public function addCase(Request $request)
    {
        $this->cases = $this->modelEntity('CaseEntity')->getAllEntities();
        $this->documents = $this->modelEntity('Document')->getAllEntities();
        $this->documentTypes = $this->modelEntity('DocumentType')->getAllEntities();
        
        $view = $this->view('AddCaseView', $this->documents, $this->documentTypes);
    }

    public function saveCase(Request $request)
    {
        $this->cases = $this->modelEntity('CaseEntity')->getAllEntities();
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

        if (empty($request->post("Id"))){
            $err = true;
        }else{
            $documentTypeId = $request->post("Id");
        }
        
        if($err == true){
            $errorMsg = 'Nie udało się dodać sprawy<br>wszystkie pola muszą być wypełnione';
            $view = $this->view('AddCaseView', $this->documents, $this->documentTypes, $errorMsg);
        }
        else{
            $msg = 'Dodano nową sprawę';
            $maxIdDocument = 0;
            $documentExists = false;
            $documentId = 0;
            foreach($this->documents as $document){
                if($document['Id']>$maxIdDocument){
                    $maxIdDocument = $document['Id'];
                }

                if($document['Number']==$request->post('documentNumber'))
                {
                    if($document['Name']==$request->post('name'))
                    {
                        if($document['Surname']==$request->post('surname'))
                        {
                            if($document['IdDocumentType']==$request->post('Id'))
                            {
                                $documentExists = true;
                                $documentId = $document['Id'];
                            }
                        }
                    }
                }
            }

            $maxIdLocalCase = 0;
            foreach($this->cases as $case){
                if($case['IdLocal']>$maxIdLocalCase){
                    $maxIdLocalCase = $case['IdLocal'];
                }
            }

            if(!$documentExists){
                $this->modelEntity('Document')
                ->setNumber($request->post('documentNumber'))
                ->setName($request->post('name'))
                ->setSurname($request->post('surname'))
                ->setIdDocumentType($request->post('Id'))
                ->save();

                $this->case = $this->modelEntity('CaseEntity')
                ->setIdLocal($maxIdLocalCase+1)
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
                ->setIdDocument($maxIdDocument+1)
                ->setIdWorker(1)
                ->save();
            }
            else{
                $this->case = $this->modelEntity('CaseEntity')
                ->setIdLocal($maxIdLocalCase+1)
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
                ->setIdDocument($documentId)
                ->setIdWorker(1)
                ->save();
            }
            

            
            $view = $this->view('AddCaseView', $this->documents, $this->documentTypes, $msg);
        }
    }
}