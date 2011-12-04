<?php
App::uses('AppController', 'Controller');
/**
 * Savingtransactions Controller
 *
 * @property Savingtransaction $Savingtransaction
 */
class SavingtransactionsController extends AppController {

    
    public function beforeRender() {
        $this->set('types', array('DEPOSIT' => 'Deposit', 'WITHDRAW' => 'Withdrawal', 'INTEREST' => 'Interest Payment'));
        parent::beforeRender();
    }
    
    public function dashboard($id) {
        
        $this->set('id', $id);
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Savingtransaction->recursive = 0;
		$this->set('savingtransactions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Savingtransaction->id = $id;
		if (!$this->Savingtransaction->exists()) {
			throw new NotFoundException(__('Invalid savingtransaction'));
		}
		$this->set('savingtransaction', $this->Savingtransaction->read(null, $id));
	}
        
        public function add_withdrawal($id) {
            $this->request->data['Savingtransaction']['customer_id'] = $id;
            $this->request->data['Savingtransaction']['type'] = 'WITHDRAW';
            $this->add();
        }

        public function add_deposit($id) {
            $this->request->data['Savingtransaction']['customer_id'] = $id;
            $this->request->data['Savingtransaction']['type'] = 'DEPOSIT';
            $this->add();
        }

        public function add_interest($id) {
            $this->request->data['Savingtransaction']['customer_id'] = $id;
            $this->request->data['Savingtransaction']['type'] = 'INTEREST';
            $this->add();
        }
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Savingtransaction->create();
			if ($this->Savingtransaction->save($this->request->data)) {
				$this->Session->setFlash(__('The savingtransaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The savingtransaction could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Savingtransaction->Customer->find('list');
		$branches = $this->Savingtransaction->Branch->find('list');
		$this->set(compact('customers', 'branches'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Savingtransaction->id = $id;
		if (!$this->Savingtransaction->exists()) {
			throw new NotFoundException(__('Invalid savingtransaction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Savingtransaction->save($this->request->data)) {
				$this->Session->setFlash(__('The savingtransaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The savingtransaction could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Savingtransaction->read(null, $id);
		}
		$customers = $this->Savingtransaction->Customer->find('list');
		$branches = $this->Savingtransaction->Branch->find('list');
		$this->set(compact('customers', 'branches'));
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
		$this->Savingtransaction->id = $id;
		if (!$this->Savingtransaction->exists()) {
			throw new NotFoundException(__('Invalid savingtransaction'));
		}
		if ($this->Savingtransaction->delete()) {
			$this->Session->setFlash(__('Savingtransaction deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Savingtransaction was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
