<?php

/**
 * Student - Class represents student's contact information and grades.
 *
 * @author William
 */

class Student {
    
    function __construct() {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
}   

function add_email($which,$address) {
    $this->emails[$which] = $address;
}

function add_grade($grade) {
    $this->grades[] = $grade;
}

function average() {
    $total = 0;
    foreach ($this->grades as $value)
        $total += $value;
    return $total / count($this->grades);
}

function toString() {
    
    $result = "______________________\n";
            
    $result .= $this->first_name . ' ' . $this->surname;  
    $result .= ' ('.$this->average().")\n";
    $result .= "______________________\n\n\n\n";
    
    foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n\n";
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
}
    
}
