<?php
 class Blog_model{
    private $blog =[
    [
        "penulis" => "Pelajar RPL",
        "judul" => "Belajar PHP MVC",
        "tulisan" => "Model"
    ],
    [
        "penulis" => "Pelajar RPL",
        "judul" => "Belajar PHP MVC",
        "tulisan" => "View"
    ],
    [
        "penulis" => "Pelajar RPL",
        "judul" => "Belajar PHP MVC",
        "tulisan" => "Controller"
    ]
    ];
    public function getAllBlog() {
        return $this->blog;
    }

 }