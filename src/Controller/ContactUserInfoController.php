<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContactUserInfo Controller
 *
 * @property \App\Model\Table\ContactUserInfoTable $ContactUserInfo
 * @method \App\Model\Entity\ContactUserInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactUserInfoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contactUserInfo = $this->paginate($this->ContactUserInfo);

        $this->set(compact('contactUserInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact User Info id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactUserInfo = $this->ContactUserInfo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contactUserInfo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactUserInfo = $this->ContactUserInfo->newEmptyEntity();
        if ($this->request->is('post')) {
            $contactUserInfo = $this->ContactUserInfo->patchEntity($contactUserInfo, $this->request->getData());
            if ($this->ContactUserInfo->save($contactUserInfo)) {
                $this->Flash->success(__('The contact user info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact user info could not be saved. Please, try again.'));
        }
        $this->set(compact('contactUserInfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact User Info id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactUserInfo = $this->ContactUserInfo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactUserInfo = $this->ContactUserInfo->patchEntity($contactUserInfo, $this->request->getData());
            if ($this->ContactUserInfo->save($contactUserInfo)) {
                $this->Flash->success(__('The contact user info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact user info could not be saved. Please, try again.'));
        }
        $this->set(compact('contactUserInfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact User Info id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactUserInfo = $this->ContactUserInfo->get($id);
        if ($this->ContactUserInfo->delete($contactUserInfo)) {
            $this->Flash->success(__('The contact user info has been deleted.'));
        } else {
            $this->Flash->error(__('The contact user info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
