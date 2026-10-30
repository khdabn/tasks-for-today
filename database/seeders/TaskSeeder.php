<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $today = today();

        $yesterday = $today->copy()->subDay()->toDateString();
        $todayDate = $today->toDateString();
        $tomorrow = $today->copy()->addDay()->toDateString();

        $tasks = [
            [
                'title' => 'Review Laravel migrations',
                'status' => 'completed',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Design the tasks table',
                'status' => 'completed',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Create the Task model',
                'status' => 'completed',
                'task_date' => $todayDate,
            ],
            [
                'title' => 'Build the Welcome page',
                'status' => 'pending',
                'task_date' => $todayDate,
            ],
            [
                'title' => 'Build the Task List page',
                'status' => 'pending',
                'task_date' => $todayDate,
            ],
            [
                'title' => 'Check the Profile page',
                'status' => 'pending',
                'task_date' => $todayDate,
            ],
            [
                'title' => 'Update the project README',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Deploy the application',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title']],
                $task
            );
        }

        User::updateOrCreate(
            ['username' => 'buen'],
            [
                'full_name' => 'Buen',
                'email' => 'buen@example.com',
            ]
        );
    }
}