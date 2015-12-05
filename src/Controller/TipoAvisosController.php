<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoAvisos Controller
 *
 * @property \App\Model\Table\TipoAvisosTable $TipoAvisos
 */
class TipoAvisosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tipoAvisos', $this->paginate($this->TipoAvisos));
        $this->set('_serialize', ['tipoAvisos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Aviso id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoAviso = $this->TipoAvisos->get($id, [
            'contain' => ['Avisos']
        ]);
        $this->set('tipoAviso', $tipoAviso);
        $this->set('_serialize', ['tipoAviso']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoAviso = $this->TipoAvisos->newEntity();
        if ($this->request->is('post')) {
            $tipoAviso = $this->TipoAvisos->patchEntity($tipoAviso, $this->request->data);
            if ($this->TipoAvisos->save($tipoAviso)) {
                $this->Flash->success(__('The tipo aviso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo aviso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoAviso'));
        $this->set('_serialize', ['tipoAviso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Aviso id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoAviso = $this->TipoAvisos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoAviso = $this->TipoAvisos->patchEntity($tipoAviso, $this->request->data);
            if ($this->TipoAvisos->save($tipoAviso)) {
                $this->Flash->success(__('The tipo aviso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo aviso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoAviso'));
        $this->set('_serialize', ['tipoAviso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Aviso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoAviso = $this->TipoAvisos->get($id);
        if ($this->TipoAvisos->delete($tipoAviso)) {
            $this->Flash->success(__('The tipo aviso has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo aviso could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
