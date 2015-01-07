<?php

/**
 * A class that represents a student, their
 * grades and their contact info.
 * 
 * @author Chris Klassen
 */
class Student {
    // Construct the student object
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // Set the student's email
    function add_email($which, $address)
    {
        $this->emails[$which] = $address;
    }
    
    // Set the student's grade
    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }
    
    // Compute the student's average mark
    function average()
    {
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    // Print the student's details
    function toString()
    {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . "</pre>";
    }
}