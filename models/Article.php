<?php
require_once "models/Query.php";
class Article extends Query
{
    public $table = 'article';
    public function getList() {
        return $this->select($this->table, ['id','title','thumbnail','author','category','description','date','update_at']);
    }
    public function getCurrentThumbnail($id) {
        return $this->getThumbnail($this->table, $id);
    }
    
    public function store($data){
        return $this->insert($this->table,$data);
    }
    public function edit($data,$id){
        return $this->update($this->table,$data,$id);
    }
    public function find($id){
        return $this->getId($this->table,$id);
    }
    public function destroy($id){
        return $this->delete($this->table,$id);
    }
}
?>