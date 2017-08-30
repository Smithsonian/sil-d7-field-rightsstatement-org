<?php
function _get_rightsstatement_values() {
	$ret = array(
		'InC' => array(
			'value' => 'InC',
			'statement' => 'In Copyright',
			'uri' => 'http://rightsstatements.org/vocab/InC/1.0/',
			'image_slug' => 'InC'
		),
		'InC-OW-EU' => array(
			'value' => 'InC-OW-EU',
			'statement' => 'In Copyright - EU Orphan Work',
			'uri' => 'http://rightsstatements.org/vocab/InC-OW-EU/1.0/',
			'image_slug' => 'InC-EU-ORPHAN'
		),
		'InC-EDU' => array(
			'value' => 'InC-EDU',
			'statement' => 'In Copyright - Educational Use Permitted',
			'uri' => 'http://rightsstatements.org/vocab/InC-EDU/1.0/',
			'image_slug' => 'InC-EDUCATIONAL'
		),
		'InC-NC' => array(
			'value' => 'InC-NC',
			'statement' => 'In Copyright - Non-Commercial Use Permitted',
			'uri' => 'http://rightsstatements.org/vocab/InC-NC/1.0/',
			'image_slug' => 'InC-NONCOMMERCIAL'
		),
		'InC-RUU' => array(
			'value' => 'InC-RUU',
			'statement' => 'In Copyright - Rights-holder(s) Unlocatable or Unidentifiable',
			'uri' => 'http://rightsstatements.org/vocab/InC-RUU/1.0/',
			'image_slug' => 'InC-UNKNOWN'
		),
		'NoC-CR' => array(
			'value' => 'NoC-CR',
			'statement' => 'No Copyright - Contractual Restrictions',
			'uri' => 'http://rightsstatements.org/vocab/NoC-CR/1.0/',
			'image_slug' => 'NoC-CONTRACTUAL'
		),
		'NoC-NC' => array(
			'value' => 'NoC-NC',
			'statement' => 'No Copyright - Non-Commercial Use Only ',
			'uri' => 'http://rightsstatements.org/vocab/NoC-NC/1.0/',
			'image_slug' => 'NoC-NONCOMMERCIAL'
		),
		'NoC-OKLR' => array(
			'value' => 'NoC-OKLR',
			'statement' => 'No Copyright - Other Known Legal Restrictions',
			'uri' => 'http://rightsstatements.org/vocab/NoC-OKLR/1.0/',
			'image_slug' => 'NoC-OTHER'
		),
		'NoC-US' => array(
			'value' => 'NoC-US',
			'statement' => 'No Copyright - United States',
			'uri' => 'http://rightsstatements.org/vocab/NoC-US/1.0/',
			'image_slug' => 'NoC-US'
		),
		'CNE' => array(
			'value' => 'CNE',
			'statement' => 'Copyright Not Evaluated',
			'uri' => 'http://rightsstatements.org/vocab/CNE/1.0/',
			'image_slug' => 'Other-NOTEVALUATED'
		),
		'UND' => array(
			'value' => 'UND',
			'statement' => 'Copyright Undetermined',
			'uri' => 'http://rightsstatements.org/vocab/UND/1.0/',
			'image_slug' => 'Other-UNDETERMINED'
		),
		'NKC' => array(
			'value' => 'NKC',
			'statement' => 'No Known Copyright',
			'uri' => 'http://rightsstatements.org/vocab/NKC/1.0/',
			'image_slug' => 'Other-UNKNOWN'
		)
	);
	return $ret;
}