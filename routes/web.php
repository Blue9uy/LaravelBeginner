<?php

use Illuminate\Support\Facades\Route;

Route ::get("/admin/posts", function () {
    return "Hello Admin Posts!!!!!";});

    Route ::get("/blog", function () {
        return "Hello blog page";});

Route ::get("/post/{id}/{name}", function ($id,$name) {
    return "Your Post is ". $id ." ". $name;});

Route ::get("/admin/dashboard/post/edit/",['as'=>'admin.post', function () {
    $url = route('admin.post');
    return "your url is".$url;}]);
