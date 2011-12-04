<?php
App::uses('AppModel', 'Model');
/**
 * Transaction Model
 *
 */
class Transaction extends AppModel {
/**
 * Validation rules
 *
 * @var array
 * 
 */
    public $direction = null;
 
 
	public $validate = array(
		'customer_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'branch_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'type' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            
		'amount' => array(
			'notempty' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                
            /**
		'reciept_number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),**/
	);
	
	public function getTransactionTypes(){
	 return array('Deposit' => 'Deposit', 'Credit' => 'Credit');
 }
 /**	public function getBranches(){
	 return array('0' => 'Bakau', '1' => 'Kotu');
      } **/

       public function getBranches() {
        $options = $this->branch->find('list'); //or whatever conditions you want
        $branches= $this->set('options',$options);
          // debug($branches);
            return $branches;
        }
 
}
