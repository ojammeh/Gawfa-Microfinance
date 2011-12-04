<?php
App::uses('AppController', 'Controller');
/**
 * Transactions Controller
 *
 * @property Transaction $Transaction
 */
class TransactionsController extends AppController {
    
    public $components = array('RequestHandler');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Transaction->recursive = 0;
		$this->set('transactions', $this->paginate());
        
	}
        
        public function index_loans($id) {
		$this->paginate = array('conditions' => 
                    array('Transaction.customer_id' => $id, 'Transaction.type' => 'LOAN')
                );
                $this->index();
        
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Transaction->id = $id;
		if (!$this->Transaction->exists()) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		$this->set('transaction', $this->Transaction->read(null, $id));
	}
        
        public function add_load($id) {
            $this->request->data['Transaction']['type'] = 'LOAN';
         
            $this->add($id);
        }
        public function add_annual_subscription($id) {
            $this->request->data['Transaction']['type'] = 'ANNUALSUBSCRIPTION';
         
            $this->add($id);
        }
         public function add_application_fee($id) {
            $this->request->data['Transaction']['type'] = 'APPLICATIONFEE';

            $this->add($id);
        }

         public function add_processing_fee($id) {
            $this->request->data['Transaction']['type'] = 'PROCESSINGFEE';

            $this->add($id);
        }

         public function add_credit($id) {
            $this->request->data['Transaction']['type'] = 'ADDCREDIT';

            $this->add($id);
        }

         public function add_debit($id) {
            $this->request->data['Transaction']['type'] = 'ADDDEBIT';

            $this->add($id);
        }

/**
 * add method
 *
 * @return void
 */
 	
	public function add($id) {
            
            $this->loadModel('Customer'); //if it's not already loaded
        
            $this->Customer->recursive = -1;
            
            $customerData = $this->Customer->read(null, $id);
            
            
            
            // debug($customerData);
            
		if ($this->request->is('post')) {
			$this->Transaction->create();
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved'));
				$this->redirect(array('controller' => 'customers', 'action' => 'view/'.$this->request->data['Transaction']['customer_id'].'/'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
       	// $this->set('types', $this->Transaction->getTransactionTypes());
       // $this->set('branches', $this->Transaction->getBranches());
        $this->loadModel('branch'); //if it's not already loaded
       $branches = $this->branch->find('list'); //or whatever conditions you want
       $this->set('branches',$branches);

       $this->request->data['Transaction']['customer_id'] = $id;
       
       //$customers = $this->customer->find('list'); //or whatever conditions you want
       $this->set('customer',$customerData);
       
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Transaction->id = $id;
		if (!$this->Transaction->exists()) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Transaction->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Transaction->id = $id;
		if (!$this->Transaction->exists()) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		if ($this->Transaction->delete()) {
			$this->Session->setFlash(__('Transaction deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Transaction was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
