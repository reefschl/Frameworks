<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\I18n\I18n;



class BlogsController extends AppController{

public function home(){

         if($this->request->is('post')) {
            $locale = $this->request->getData('locale');
            I18n::setLocale($locale);

         }
         $this->Authorization->skipAuthorization();
      }





 public function logout()
    {

        $result = $this->Authentication->getResult();
        $this->Authorization->skipAuthorization();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();

            return $this->redirect(['controller' => 'Blogs', 'action' => 'home']);
        }
    }


}

?>

