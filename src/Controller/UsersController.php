<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
        
        $dir = new Folder(WWW_ROOT . 'img/user_fotos');
		$fotos = $dir->find('.*\.jpg');
		
		$this->set('fotos',$fotos);		
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
 
        // Paginamos los avisos de este usuario
 
        $this->loadModel('Avisos');
        $this->paginate = [
        'contain' => ['Users', 'ImportanciaAvisos', 'TipoAvisos'],
        'limit' => 5,
        'order' => [
            'Avisos.created' => 'desc'],
         'conditions' => ['Avisos.user_id' => $id]
        ];
        
        $this->set('avisos', $this->paginate($this->Avisos));
        $this->set('_serialize', ['avisos']); 
        
        //debug($user);exit();
        
        $dir = new Folder(WWW_ROOT . 'img/user_fotos');
        $f=$user['username'].'.jpg';
        $foto = $dir->find($f);
		
		$this->set('foto',$foto);		
        //debug($f);exit();
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Se ha añadido un nuevo usuario.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('No se ha guardado el nuevo usuario. Por favor, inténtelo le nuevo.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            
          //  debug($this->request->data);exit();
            
           $filename=$this->request->data['foto'];
			
				if (!empty($this->request->data['foto']['tmp_name'])
    				&& is_uploaded_file($this->request->data['foto']['tmp_name'])) 
				{

				$filename=basename($this->request->data['username']);

				move_uploaded_file($this->request->data['foto']['tmp_name'],IMAGES.'user_fotos/'.$this->request->data['username'].'.jpg');
				} 
				
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Los cambios en el usuario se han guardado correctamente.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('No se han guardado los cambios en el usuario. Por favor, inténtelo le nuevo.'));
                }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
        
        $dir = new Folder(WWW_ROOT . 'img/user_fotos');
        $f=$user['username'].'.jpg';
        $foto = $dir->find($f);
		
		$this->set('foto',$foto);	
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El usuario no ha sido borrado. Por favor, inténtelo le nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
        public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        //$this->Auth->allow(['add', 'logout']);
    }
    
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('El usuario y/o la contraseña no son correctos. Por favor, inténtelo le nuevo.'));
        }
    }
    
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
