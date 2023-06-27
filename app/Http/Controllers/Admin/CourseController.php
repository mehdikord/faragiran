<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\CoursesStoreRequest;
use App\Http\Requests\Courses\LessonsStoreRequest;
use App\Interface\Courses\CoursesInterface;
use App\Models\Course;

class CourseController extends Controller
{

    protected CoursesInterface $repository;
    public function __construct(CoursesInterface $courses)
    {
        return $this->repository = $courses;
    }

    public function index()
    {
        return $this->repository->index();
    }
    public function store(CoursesStoreRequest $request)
    {
        return $this->repository->store($request);
    }

    public function update(Course $course,CoursesStoreRequest $request)
    {
        return $this->repository->update($course,$request);
    }

    public function lessons_store(Course $course,LessonsStoreRequest $request)
    {
        return $this->repository->lessons_store($course,$request);
    }

}
