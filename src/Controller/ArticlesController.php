<?php
// src/Controller/ArticlesController.php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

class ArticlesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    // public function home() {
    // exit ("Hi");
   //  }


    public function index()
    {



    $key = $this->request->getQuery('key');
            if($key){
                $query = $this->Articles->find('all')
                ->where(['Or'=>['title like'=>'%'.$key.'%','body like'=>'%'.$key.'%','slug like'=>'%'.$key.'%']]);

            }else{
                $query = $this->Articles;
            }

           $articles = $this->paginate($query);


       //$articles = $this->Paginator->paginate($this->Articles->find());       allgemeine Auflistung aller Rezepte
        $this->set(compact('articles'));
        $this->Authorization->skipAuthorization();













    }



   public function view($slug = null)
   {

       $article = $this->Articles
           ->findBySlug($slug)
           ->contain('Tags')
           ->firstOrFail();
       $this->set(compact('article'));
       $this->Authorization->skipAuthorization();

    }

     public function add()
       {


           $article = $this->Articles->newEmptyEntity();

           $this->Authorization->authorize($article);
           if ($this->request->is('post')) {
               $article = $this->Articles->patchEntity($article, $this->request->getData());


               // Hardcoding the user_id is temporary, and will be removed later
               // when we build authentication out.
               $article->user_id = $this->request->getAttribute('identity')->getIdentifier();







                 if(!$article->getErrors){
                              $image = $this->request->getData('image_file');

                              $name  = $image->getClientFilename();

                              if( !is_dir(WWW_ROOT.'img'.DS.'article-img') )
                              mkdir(WWW_ROOT.'img'.DS.'article-img',0775);

                              $targetPath = WWW_ROOT.'img'.DS.'article-img'.DS.$name;

                              if($name)
                              $image->moveTo($targetPath);

                              $article->image = 'article-img/'.$name;

                          }
















               if ($this->Articles->save($article)) {
                   $this->Flash->success(__('Dein Rezept wurde gespeichert.'));
                   return $this->redirect(['action' => 'index']);
               }
               $this->Flash->error(__('Dein Rezept konnte nicht hinzugefügt werden.'));
           }
           // Get a list of tags.
           $tags = $this->Articles->Tags->find('list')->all();

           // Set tags to the view context
           $this->set('tags', $tags);

           $this->set('article', $article);
       }

    public function edit($slug)
    {
            $article = $this->Articles
                    ->findBySlug($slug)
                    ->contain('Tags')
                    ->firstOrFail();
                    $this->Authorization->authorize($article);
        if ($this->request->is(['post', 'put'])) {
            $this->Articles->patchEntity($article, $this->request->getData());[
            'accessibleFields' => ['user_id' => false]
             ];
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Das Rezept wurde geändert.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Das Rezept konnte nicht geändert werden.'));

        }

        // Get a list of tags.
        $tags = $this->Articles->Tags->find('list')->all();

        // Set tags to the view context
        $this->set('tags', $tags);

        $this->set('article', $article);
    }
    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        $this->Authorization->authorize($article);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('Das {0} Rezept wurde gelöscht.', $article->title));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function tags()
    {




        // The 'pass' key is provided by CakePHP and contains all
        // the passed URL path segments in the request.
        $tags = $this->request->getParam('pass');
        $this->Authorization->skipAuthorization();

        // Use the ArticlesTable to find tagged articles.
        $articles = $this->Articles->find('tagged', [
                'tags' => $tags
            ])
            ->all();

        // Pass variables into the view template context.
        $this->set([
            'articles' => $articles,
            'tags' => $tags
        ]);

    }

}
