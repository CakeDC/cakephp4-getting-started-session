<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CampaignsMailingLists Controller
 *
 * @property \App\Model\Table\CampaignsMailingListsTable $CampaignsMailingLists
 *
 * @method \App\Model\Entity\CampaignsMailingList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampaignsMailingListsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campaigns', 'MailingLists'],
        ];
        $campaignsMailingLists = $this->paginate($this->CampaignsMailingLists);

        $this->set(compact('campaignsMailingLists'));
    }

    /**
     * View method
     *
     * @param string|null $id Campaigns Mailing List id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campaignsMailingList = $this->CampaignsMailingLists->get($id, [
            'contain' => ['Campaigns', 'MailingLists'],
        ]);

        $this->set('campaignsMailingList', $campaignsMailingList);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campaignsMailingList = $this->CampaignsMailingLists->newEmptyEntity();
        if ($this->request->is('post')) {
            $campaignsMailingList = $this->CampaignsMailingLists->patchEntity($campaignsMailingList, $this->request->getData());
            if ($this->CampaignsMailingLists->save($campaignsMailingList)) {
                $this->Flash->success(__('The campaigns mailing list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campaigns mailing list could not be saved. Please, try again.'));
        }
        $campaigns = $this->CampaignsMailingLists->Campaigns->find('list', ['limit' => 200]);
        $mailingLists = $this->CampaignsMailingLists->MailingLists->find('list', ['limit' => 200]);
        $this->set(compact('campaignsMailingList', 'campaigns', 'mailingLists'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campaigns Mailing List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campaignsMailingList = $this->CampaignsMailingLists->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campaignsMailingList = $this->CampaignsMailingLists->patchEntity($campaignsMailingList, $this->request->getData());
            if ($this->CampaignsMailingLists->save($campaignsMailingList)) {
                $this->Flash->success(__('The campaigns mailing list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campaigns mailing list could not be saved. Please, try again.'));
        }
        $campaigns = $this->CampaignsMailingLists->Campaigns->find('list', ['limit' => 200]);
        $mailingLists = $this->CampaignsMailingLists->MailingLists->find('list', ['limit' => 200]);
        $this->set(compact('campaignsMailingList', 'campaigns', 'mailingLists'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campaigns Mailing List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campaignsMailingList = $this->CampaignsMailingLists->get($id);
        if ($this->CampaignsMailingLists->delete($campaignsMailingList)) {
            $this->Flash->success(__('The campaigns mailing list has been deleted.'));
        } else {
            $this->Flash->error(__('The campaigns mailing list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
