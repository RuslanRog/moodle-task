<?php

require_once("../../config.php");

$id = optional_param('id', 1, PARAM_INT);

$PAGE->set_url('/local/catalog/index.php', array('id' => $id));
if (!$cm = get_coursemodule_from_id('catalog', $id)) {
    throw new moodle_exception('...');
}

if (!$course = $DB->get_record("local_catalog_products", array("id" => $cm->course))) {
    throw new moodle_exception('...');
}

//if (!$pulse = $DB->get_record("local_catalog_products", array("id" => $cm->instance))) {
//    throw new moodle_exception('...');
//}


require_login($course, true, $cm);

redirect("$CFG->wwwroot/course/view.php?id=$course->id");
