<?php

namespace App\Console\Commands;

use App\Models\Profile;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dev command';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        // Концепция Laravel
        $worker = Worker::find(1);
        $profile = Profile::find(1);

        print_r($worker->profile->toArray());
        print_r($profile->worker->toArray());

        // Вручную
        $worker = Worker::find(1);
        $profile = Profile::where('worker_id', $worker->id)->first();

        $profile = Profile::find(1);
        $worker = Worker::find($profile->worker_id);

        $this->prepareData();
    }

    protected function prepareData()
    {
        $workerInfo = [
            'name' => 'Walter',
            'surname' => 'White',
            'email' => 'ww@gmail.com',
            'age' => '45',
            'description' => 'Say my name...',
            'is_married' => true,
        ];

        $worker = Worker::create($workerInfo);

        $profileInfo = [
            'worker_id' => $worker->id,
            'city' => 'Albuquerque',
            'position' => 'School Teacher',
            'exp' => 15,
        ];

        $profile = Profile::create($profileInfo);
    }
}
