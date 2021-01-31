<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {


    $key = $this->request->getQuery('key');
            if($key){
                $query = $this->Users->find('all')
                ->where(['Or'=>['email like'=>'%'.$key.'%']]);

            }else{
                $query = $this->Users;
            }




           // $users = $this->paginate($this->Users);
           $users = $this->paginate($query);









        //$users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->Authorization->skipAuthorization();
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('user'));
        $this->Authorization->skipAuthorization();
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        $this->Authorization->skipAuthorization();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Der User wurde gespeichert.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Der User konnte nicht gespeichert werden.'));
        }
        $this->set(compact('user'));


    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Der User wurde gespeichert.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Der User konnte nicht geändert werden.'));
        }
        $this->set(compact('user'));
        $this->Authorization->skipAuthorization();
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $this->Authorization->skipAuthorization();
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Der User wurde gelöscht.'));
        } else {
            $this->Flash->error(__('Der User konnte nicht gelöscht werden.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }

    public function login()
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['get', 'post']);


        $result = $this->Authentication->getResult();

        // regardless of POST or GET, redirect if user is logged in

        if ($result->isValid()) {
            // redirect to /articles after login success

            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Blogs',  //Redirect zum home möglich //Blogs
                'action' => 'home',   //home
            ]);


            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Fehlerhafte Daten'));


        }

    }
    public function logout()
    {

        $result = $this->Authentication->getResult();
        $this->Authorization->skipAuthorization();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();

            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
}
