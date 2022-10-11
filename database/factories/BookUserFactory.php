<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookUser>
 */
class BookUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $allStatus = ['not yet approved', 'approved', 'rejected', 'returned'];
        shuffle($allStatus);
        $status = $allStatus[0];
        $borrowedDate = $this->faker->date();
        $dueDate = Carbon::createFromFormat('Y-m-d', $borrowedDate)->addDays(5);

        if($status === 'returned'){
            return [
                'user_id' => 'overriddenn',
                'book_id' => 'overridden',
                'borrowed_date' => $borrowedDate,
                'due_date' => $dueDate,
                'return_date' => $dueDate,
                'status' => $status,
            ];
        }

        return [
            'user_id' => 'overriddenn',
            'book_id' => 'overridden',
            'borrowed_date' => $borrowedDate,
            'due_date' => $dueDate,
            'status' => $status,
        ];
    }
}
