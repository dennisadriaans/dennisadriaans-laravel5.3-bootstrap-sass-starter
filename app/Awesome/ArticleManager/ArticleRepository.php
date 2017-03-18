<?php namespace App\Awesome\ArticleManager;

use App\Awesome\DbRepository;
use App\Article;

class ArticleRepository extends DbRepository implements ArticleInterface
{

    public $model;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->orderBy('created_at', 'desc')->with('category')->get();
    }
}
