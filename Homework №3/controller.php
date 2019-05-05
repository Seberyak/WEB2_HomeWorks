<?php

require_once 'template.php';

// Initialize object
$tpl = new template('main.tpl');

$tpl->set('username', 'Valerian');
$tpl->set('age', '20');
$tpl->set('city', 'Tbilisi');
// Set {header} as a header.tpl file
$tpl->set('header', $tpl->getFile('header.tpl'));

// Render the template
$tpl->render();