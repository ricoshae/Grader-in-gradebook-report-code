


// Developed for Moodle version 3.6.3
// location: /grade/report/grader/lib.php

// Line 1199 
// Code is placed just before the comment:
// Enable keyboard navigation if the grade is editable (not locked, not in a unoverridable category, etc).



// ------- start grader name code --------
// Ricoshae 24th 2019 October add grader
// Ricoshae 14th 2019 November don't show usermodified and user are the same
if ($grade->usermodified && $grade->usermodified  <> $grade->userid) {
$grader = $DB->get_field('user', 'firstname', array('id' => $grade->usermodified));
$grader .= ' '. $DB->get_field('user', 'lastname', array('id' => $grade->usermodified));
$itemcell->text .= '<br><span class="small text-muted">Updated by: '.$grader .'</span>';
 }

// ------- start grader name code  --------

// Enable keyboard navigation if the grade is editable (not locked, not in a unoverridable category, etc).
