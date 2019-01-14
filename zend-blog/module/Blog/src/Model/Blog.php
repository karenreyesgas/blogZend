<?php 
namespace Blog\Model;

class Blog
{
    public $id;
    public $content;
    public $title;
    public $slug;
    public $created_at;
    public $updated_at;
    public $author;
    public $status;



    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id']) ? $data['id'] : null;
        $this->content = !empty($data['content']) ? $data['content'] : null;
        $this->title = !empty($data['title']) ? $data['title'] : null;
        $this->slug = !empty($data['slug']) ? $data['slug'] : null;
        $this->title = !empty($data['created_at']) ? $data['created_at'] : null;
        $this->texto  = !empty($data['updated_at']) ? $data['updated_at'] : null;
        $this->author = !empty($data['author']) ? $data['author'] : null;
        $this->status  = !empty($data['status']) ? $data['status'] : null;


    }
}