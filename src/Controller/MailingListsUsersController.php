<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MailingListsUsers Controller
 *
 * @property \App\Model\Table\MailingListsUsersTable $MailingListsUsers
 *
 * @method \App\Model\Entity\MailingListsUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MailingListsUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MailingLists', 'Users'],
        ];
        $mailingListsUsers = $this->paginate($this->MailingListsUsers);

        $this->set(compact('mailingListsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Mailing Lists User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mailingListsUser = $this->MailingListsUsers->get($id, [
            'contain' => ['MailingLists', 'Users'],
        ]);

        $this->set('mailingListsUser', $mailingListsUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mailingListsUser = $this->MailingListsUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $mailingListsUser = $this->MailingListsUsers->patchEntity($mailingListsUser, $this->request->getData());
            if ($this->MailingListsUsers->save($mailingListsUser)) {
                $this->Flash->success(__('The mailing lists user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mailing lists user could not be saved. Please, try again.'));
        }
        $mailingLists = $this->MailingListsUsers->MailingLists->find('list', ['limit' => 200]);
        $users = $this->MailingListsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('mailingListsUser', 'mailingLists', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mailing Lists User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mailingListsUser = $this->MailingListsUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mailingListsUser = $this->MailingListsUsers->patchEntity($mailingListsUser, $this->request->getData());
            if ($this->MailingListsUsers->save($mailingListsUser)) {
                $this->Flash->success(__('The mailing lists user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mailing lists user could not be saved. Please, try again.'));
        }
        $mailingLists = $this->MailingListsUsers->MailingLists->find('list', ['limit' => 200]);
        $users = $this->MailingListsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('mailingListsUser', 'mailingLists', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mailing Lists User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mailingListsUser = $this->MailingListsUsers->get($id);
        if ($this->MailingListsUsers->delete($mailingListsUser)) {
            $this->Flash->success(__('The mailing lists user has been deleted.'));
        } else {
            $this->Flash->error(__('The mailing lists user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
