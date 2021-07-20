<?php

namespace App\Console\Commands;

use App\Managers\TodoItemsManager;
use Illuminate\Console\Command;

class RemoveDoneItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo-items:remove-finished';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command checks data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(private TodoItemsManager $todoItemsManager)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->todoItemsManager->removeDoneItems();

        return 0;
    }
}
