<?php
require('FormElement.php');
class NewsletterForm{   
    var $isValidationEnabled;
    var $submitDate;
    var $method;
    var $action;
    var $formElements = array();
    var $hasValidation="false";
    
    function __construct($method, $action){
        $this->method = $method;
        $this->action = $action;        
    }

    function addFormElement($type,$name,$id,$value,$placeHolder){
        $this->formElements[$name] = new FormElement($type,$name,$id,$value,$placeHolder);                
    }

    function showForm(){
        $output = '';
        $output .= '<form action="'.$this->action.'" method="'.$this->method.'" id="newsletter" name="newsletter">';
        foreach($this->formElements as $formElement){            
            $output .= '<input type="'.$formElement->type.'" name="'.$formElement->name.'" id="'.$formElement->id.'" value="'.$formElement->value.'" placeholder="'.$formElement->placeHolder.'" />';        
        }
        $output .= '<input id="validation" name="validation" type="hidden" value="'.$this->hasValidation.'">';                
        $output .= '<input type="submit" value="Subscribe" name="signup-button" id="signup-button">';
        $output .='</form>';
        return $output;
    }    

    function setValidation($hasValidation){
        $this->hasValidation = $hasValidation;
    }
}
?>