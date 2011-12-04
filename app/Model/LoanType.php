<?php
App::uses('AppModel', 'Model');
/**
 * LoanType Model
 *
 */
class LoanType extends AppModel {
    public $displayField = 'name_type';
    /**
 * Validation rules
 *
 * @var array
 * 
 */
	public $validate = array(
		
		'name_type' => array(
			'blank' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
