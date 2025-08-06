<?php
$students =[[],[]];
$id=2;
$results = array_filter($students, function($student) use ($id) {
    return $student['id'] == $id;
});
