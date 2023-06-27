<?php
namespace App\Interface\Courses;

interface CoursesInterface{

    public function index();
    public function store($request);
    public function update($item,$request);
    public function lessons_store($item,$request);


}
