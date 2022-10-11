<?php

namespace App\Console\Commands;

use App\Events\UnreturnedBooks;
use App\Mail\ReminderEmail;
use App\Models\BookUser;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class DueDateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:duedate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checking book_user due date';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get all row with approved status
        $borrows = BookUser::with('user', 'book')
        ->where('due_date', '<' ,now()->format('Y-m-d'))
        ->where('status', 'approved')
        ->get();
        
        // Check isEmpty
        if($borrows){
            event(new UnreturnedBooks($borrows));
        }
    }
}
