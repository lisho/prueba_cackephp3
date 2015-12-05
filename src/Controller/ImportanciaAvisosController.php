<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ImportanciaAvisos Controller
 *
 * @property \App\Model\Table\ImportanciaAvisosTable $ImportanciaAvisos
 */
class ImportanciaAvisosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('importanciaAvisos', $this->paginate($this->ImportanciaAvisos));
        $this->set('_serialize', ['importanciaAvisos']);
    }

    /**
     * View method
     *
     * @param string|null $id Importancia Aviso id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $importanciaAviso = $this->ImportanciaAvisos->get($id, [
            'contain' => ['Avisos']
        ]);
        $this->set('importanciaAviso', $importanciaAviso);
        $this->set('_serialize', ['importanciaAviso']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $importanciaAviso = $this->ImportanciaAvisos->newEntity();
        if ($this->request->is('post')) {
            $importanciaAviso = $this->ImportanciaAvisos->patchEntity($importanciaAviso, $this->request->data);
            if ($this->ImportanciaAvisos->save($importanciaAviso)) {
                $this->Flash->success(__('The importancia aviso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The importancia aviso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('importanciaAviso'));
        $this->set('_serialize', ['importanciaAviso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Importancia Aviso id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $importanciaAviso = $this->ImportanciaAvisos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $importanciaAviso = $this->ImportanciaAvisos->patchEntity($importanciaAviso, $this->request->data);
            if ($this->ImportanciaAvisos->save($importanciaAviso)) {
                $this->Flash->success(__('The importancia aviso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The importancia aviso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('importanciaAviso'));
        $this->set('_serialize', ['importanciaAviso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Importancia Aviso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $importanciaAviso = $this->ImportanciaAvisos->get($id);
        if ($this->ImportanciaAvisos->delete($importanciaAviso)) {
            $this->Flash->success(__('The importancia aviso has been deleted.'));
        } else {
            $this->Flash->error(__('The importancia aviso could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
