<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class AnalysisController extends AppController
    {

        public function index()
        {
            $this->Authorization->skipAuthorization();
        }
    }