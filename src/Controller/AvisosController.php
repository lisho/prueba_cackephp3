<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Avisos Controller
 *
 * @property \App\Model\Table\AvisosTable $Avisos
 */
class AvisosController extends AppController
{

 
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        
        $this->paginate = [
            'contain' => ['Users', 'ImportanciaAvisos', 'TipoAvisos'],
            'limit' => 5,
            'order' => [
                'Avisos.created' => 'desc'
        ]
        ];
       
        $this->set('avisos', $this->paginate($this->Avisos));
        $this->set('_serialize', ['avisos']);
        
    }
    
    /**
     * IndexFiltroImportancia method
     *
     * @return void
     */
    public function indexFiltroImportancia($importancia=null)
    {
        
        
        $this->paginate = [
            'contain' => ['Users', 'ImportanciaAvisos', 'TipoAvisos'],
            'limit' => 5,
            'order' => [
                'Avisos.created' => 'desc'],
             'conditions' => ['Avisos.importancia_aviso_id' => $importancia]
        ];
        
        $this->set('avisos', $this->paginate($this->Avisos));
        $this->set('_serialize', ['avisos']);
        
        
     //debug($avisos);exit();
    }

    /**
     * IndexFiltroImportancia method
     *
     * @return void
     */
    public function indexFiltroTipo($tipo=null)
    {
        
        $this->paginate = [
            'contain' => ['Users', 'ImportanciaAvisos', 'TipoAvisos'],
            'limit' => 5,
            'order' => [
                'Avisos.created' => 'desc'],
             'conditions' => ['Avisos.tipo_aviso_id' => $tipo]
        ];
        
        $this->set('avisos', $this->paginate($this->Avisos));
        $this->set('_serialize', ['avisos']);
        
    }
    /**
     * View method
     *
     * @param string|null $id Aviso id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aviso = $this->Avisos->get($id, [
            'contain' => ['Users', 'ImportanciaAvisos', 'TipoAvisos']
        ]);
        $this->set('aviso', $aviso);
        $this->set('_serialize', ['aviso']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aviso = $this->Avisos->newEntity();
        if ($this->request->is('post')) {
            $aviso = $this->Avisos->patchEntity($aviso, $this->request->data);
            if ($this->Avisos->save($aviso)) {
                $this->Flash->success(__('The aviso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aviso could not be saved. Please, try again.'));
            }
        }
        $users = $this->Avisos->Users->find('list', ['limit' => 200]);
        $importanciaAvisos = $this->Avisos->ImportanciaAvisos->find('list', ['limit' => 200]);
        $tipoAvisos = $this->Avisos->TipoAvisos->find('list', ['limit' => 200]);
        $this->set(compact('aviso', 'users', 'importanciaAvisos', 'tipoAvisos'));
        $this->set('_serialize', ['aviso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aviso id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aviso = $this->Avisos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aviso = $this->Avisos->patchEntity($aviso, $this->request->data);
            if ($this->Avisos->save($aviso)) {
                $this->Flash->success(__('The aviso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aviso could not be saved. Please, try again.'));
            }
        }
        $users = $this->Avisos->Users->find('list', ['limit' => 200]);
        $importanciaAvisos = $this->Avisos->ImportanciaAvisos->find('list', ['limit' => 200]);
        $tipoAvisos = $this->Avisos->TipoAvisos->find('list', ['limit' => 200]);
        $this->set(compact('aviso', 'users', 'importanciaAvisos', 'tipoAvisos'));
        $this->set('_serialize', ['aviso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aviso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aviso = $this->Avisos->get($id);
        if ($this->Avisos->delete($aviso)) {
            $this->Flash->success(__('The aviso has been deleted.'));
        } else {
            $this->Flash->error(__('The aviso could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
