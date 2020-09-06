<?php

class StudentData {
    
    public $studentList;

   function __construct(array $studentList) {
        if (sizeof($studentList)>0) {
            $this->studentList = $studentList;
        } else {
            throw new Exception("NO SUCH ITEM AVAILABLE IN MENU");
        }
    }
   // function __construct(int $studentList) {
  //      $this->studentList = $studentList;
//}

    public function getStudentByPrn($id) {
             $idd=$id+877;
       $response = [];
       if($idd) {
            foreach($this->studentList as $menu_items) {
                if ($idd == $menu_items['id']) {
                   
                  $response = $menu_items;
       
                  
                    break;
               }
            }
        }
        return json_encode($response);
    }


}
?>