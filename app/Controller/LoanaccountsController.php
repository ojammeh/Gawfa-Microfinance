<?php
App::uses('AppController', 'Controller');
/**
 * Loanaccounts Controller
 *
 * @property Loanaccount $Loanaccount
 */
class LoanaccountsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Loanaccount->recursive = 0;
		$this->set('loanaccounts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */

	public function view($id = null) {
		$this->Loanaccount->id = $id;
		if (!$this->Loanaccount->exists()) {
			throw new NotFoundException(__('Invalid loanaccount'));
		}
		$this->set('loanaccount', $this->Loanaccount->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */

     public function add_loan_account($id) {
            $this->request->data['Loanaccount']['type'] = 'ADDLOANACCOUNT';

            $this->add($id);
        }

	public function add($id) {

            $this->loadModel('Customer'); //if it's not already loaded
            $this->Customer->recursive = -1;
            $customerData = $this->Customer->read(null, $id);

		if ($this->request->is('post')) {
			$this->Loanaccount->create();
			if ($this->Loanaccount->save($this->request->data)) {
				$this->Session->setFlash(__('The loanaccount has been saved'));
                $this->redirect(array('controller' => 'customers', 'action' => 'view/'.$this->request->data['Loanaccount']['customer_id'].'/'));
				// $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loanaccount could not be saved. Please, try again.'));
			}

            $this->request->data['Loanaccounts']['customer_id'] = $id;
       
       //$customers = $this->customer->find('list'); //or whatever conditions you want
            
		}
                
                
                $this->loadModel('LoanType');
                $this->request->data['Loanaccount']['customer_id'] = $id;
                
                $this->set('types', $this->LoanType->find('list'));
                $this->set('customer',$customerData);
                
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Loanaccount->id = $id;
		if (!$this->Loanaccount->exists()) {
			throw new NotFoundException(__('Invalid loanaccount'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Loanaccount->save($this->request->data)) {
				$this->Session->setFlash(__('The loanaccount has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loanaccount could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Loanaccount->read(null, $id);
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
		$this->Loanaccount->id = $id;
		if (!$this->Loanaccount->exists()) {
			throw new NotFoundException(__('Invalid loanaccount'));
		}
		if ($this->Loanaccount->delete()) {
			$this->Session->setFlash(__('Loanaccount deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Loanaccount was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
