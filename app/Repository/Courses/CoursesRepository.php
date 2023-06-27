<?php
namespace App\Repository\Courses;

use App\Interface\Courses\CoursesInterface;
use App\Models\Course;

class CoursesRepository implements CoursesInterface
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $result = Course::query();
        //load course lessons count
        $result->withCount('lessons');
        //sort data
        $result->orderByDesc('id');
        return response_success($result->get());
    }
    public function store($request): \Illuminate\Http\JsonResponse
    {
        $result = Course::create([
            'user_id' => auth('api')->id(),
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return response_success($result,'Course created success');
    }

    public function update($item,$request): \Illuminate\Http\JsonResponse
    {
        $item->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return response_success($item,'Course updated success');
    }

    public function lessons_store($item,$request): \Illuminate\Http\JsonResponse
    {
        $result = $item->lessons()->create([
            'name' => $request->name,
            'price' => $request->price
        ]);
        return response_success($result,'Lesson created success');

    }

}
