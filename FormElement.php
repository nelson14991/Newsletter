<?php
class FormElement{
    var $type;
    var $name;
    var $id;
    var $value;
    var $placeHolder;

    function __construct($type,$name,$id,$value,$placeHolder){
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->placeHolder = $placeHolder;
    }   
}
?>