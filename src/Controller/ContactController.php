<?php


namespace App\Controller;


use App\Model\Entity\ContactUserInfo;
use App\Model\Table\ContactUserInfoTable;
use Cake\Http\ServerRequest;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use TheSeer\Tokenizer\Exception;

class ContactController extends AppController
{
    const INDEX_POST = 'Contact.Index.post';
    const INDEX_ERROR = 'Contact.Index.errors';

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function index()
    {
        # セッション指定
        $sPost = $this->request->getSession()->consume(self::INDEX_POST);
        $sErrors = $this->request->getSession()->consume(self::INDEX_ERROR);

        /** @var ContactUserInfoTable $tContactUserInfo */
        $tContactUserInfo = TableRegistry::getTableLocator()->get('ContactUserInfo');
        $contactUserInfoEntity = $tContactUserInfo->newEmptyEntity();

        if (!empty($sErrors)) {
            $contactUserInfoEntity->setErrors($sErrors);
        }

        if ($this->request->is(['patch','post','put'])) {
            # セッション書き込み
            $this->request->getSession()->write(self::INDEX_POST, $this->request->getData());
            $post = $this->request->getData();
            # バリデーションチェック
            $contactUserInfoEntity = $tContactUserInfo->patchEntity($contactUserInfoEntity,$post);
                if (empty($contactUserInfoEntity->getErrors())) {
                    $token = sha1(microtime());
                    $this->redirect('/contact/contact_confirm'."?{$token}");
                } else {
                    # エラーの場合はセッションに書き込み
                    $this->request->getSession()->write(self::INDEX_ERROR, $contactUserInfoEntity->getErrors());
                    # 入力画面に戻す
                    return $this->redirect('/contact/index');
                }
        } else {
            if (!empty($sPost)) {
                $this->setRequest($this->setData($this->request, $sPost));
            }
        }

        $this->set('contactUserInfoEntity', $contactUserInfoEntity);

    }

    public function contactConfirm()
    {
        # セッション指定
        $sPost = $this->request->getSession()->read(self::INDEX_POST);
        $sErrors = $this->request->getSession()->consume(self::INDEX_ERROR);
        if (!empty($sErrors)) {
            # エラーが発生した場合はセッションを削除してトップ画面に戻す
            $this->request->getSession()->delete(self::INDEX_POST);
            $this->redirect('/main/index');
        }
        $contactUserInfoEntity = null;
        if (empty($sPost)) {
            $this->redirect('/main/index');
        } else {
            /** @var ContactUserInfoTable $tContactUserInfo */
            $tContactUserInfo = TableRegistry::getTableLocator()->get('ContactUserInfo');
            $contactUserInfoEntity = $tContactUserInfo->newEntity($sPost);
        }
//        if (!empty($sPost)) {
//            /** @var ContactUserInfoTable $tContactUserInfo */
//            $tContactUserInfo = TableRegistry::getTableLocator()->get('ContactUserInfo');
////            $contactUserInfoEntity = $tContactUserInfo->newEntity($sPost);
//        }
        if ($this->request->is(['patch','post','put'])) {
                $contactUserInfoEntity = $tContactUserInfo->patchEntity($contactUserInfoEntity,$sPost);
                if (empty($contactUserInfoEntity->getErrors())) {
                    # 登録処理
                    $tContactUserInfo->save($contactUserInfoEntity);
                    # セッション消す
                    $this->request->getSession()->delete(self::INDEX_POST);
                    $this->redirect('/contact/complete');
                } else {
                    # エラーの場合はセッションに書き込み
                    $this->request->getSession()->write(self::INDEX_ERROR, $sPost);
                }
        }

        $this->set('sPost', $sPost);
        $this->set('contactUserInfoEntity', $contactUserInfoEntity);

    }

    public function complete()
    {
        # リファラー（default'/'）で直接入力を判断、直接入力の場合はトップ画面へリダイレクト
        if ($this->referer()) {
            $this->redirect('/main/index');
        }
//        TODO tokenを貰って判定する
        if ($this->request->is(['patch','post','put'])) {
            $this->redirect('/main/index');
        }
    }
    /**
     * @param ServerRequest $request
     * @param $data
     */
    public function setData(ServerRequest $request, $data)
    {
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $request = $request->withData($key, $value);
            }
            return $request;
        }
        return $request;
    }
}
