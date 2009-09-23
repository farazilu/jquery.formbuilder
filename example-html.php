<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>jQuery FormBuilder Demo (Output)</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body>

<?php

require('Formbuilder/Formbuilder.php');

// At this stage, we simulate getting an array of the
// form_structure and hash from our database. This is
// how the form data would have been saved using
// the $form->store() method.
$fake_db_vals = array(
				'form_hash'=>'bb7d5c1fa425235aa666c1a78b3873e7732709af',
				'form_structure'=>'a:4:{i:0;a:3:{s:5:"class";s:10:"input_text";s:8:"required";s:5:"false";s:6:"values";s:4:"Name";}i:1;a:3:{s:5:"class";s:10:"input_text";s:8:"required";s:4:"true";s:6:"values";s:15:"E-mail Address?";}i:2;a:4:{s:5:"class";s:8:"checkbox";s:8:"required";s:5:"false";s:5:"title";s:11:"Choose any:";s:6:"values";a:4:{i:2;a:2:{s:5:"value";s:3:"PHP";s:7:"default";s:4:"true";}i:3;a:2:{s:5:"value";s:6:"jQuery";s:7:"default";s:4:"true";}i:4;a:2:{s:5:"value";s:3:"XML";s:7:"default";s:4:"true";}i:5;a:2:{s:5:"value";s:5:"Aspen";s:7:"default";s:5:"false";}}}i:3;a:4:{s:5:"class";s:5:"radio";s:8:"required";s:4:"true";s:5:"title";s:11:"Choose one:";s:6:"values";a:2:{i:2;a:2:{s:5:"value";s:3:"Yes";s:7:"default";s:4:"true";}i:3;a:2:{s:5:"value";s:2:"No";s:7:"default";s:5:"false";}}}}');


$form = new Formbuilder($fake_db_vals);
$form->render_html('example-submit.php');

?>

	</body>
</html>