<?php
App::uses('AppController', 'Controller');
/**
 * LoanTypes Controller
 *
 * @property LoanType $LoanType
 */
class LoanTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LoanType->recursive = 0;
		$this->set('loanTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->LoanType->id = $id;
		if (!$this->LoanType->exists()) {
			throw new NotFoundException(__('Invalid loan type'));
		}
		$this->set('loanType', $this->LoanType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LoanType->create();
			if ($this->LoanType->save($this->request->data)) {
				$this->Session->setFlash(__('The loan type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->LoanType->id = $id;
		if (!$this->LoanType->exists()) {
			throw new NotFoundException(__('Invalid loan type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LoanType->save($this->request->data)) {
				$this->Session->setFlash(__('The loan type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LoanType->read(null, $id);
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
		$this->LoanType->id = $id;
		if (!$this->LoanType->exists()) {
			throw new NotFoundException(__('Invalid loan type'));
		}
		if ($this->LoanType->delete()) {
			$this->Session->setFlash(__('Loan type deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Loan type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
