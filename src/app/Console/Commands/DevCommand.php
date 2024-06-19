<?php

namespace App\Console\Commands;

use App\Models\Position;
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
        // $this->prepareData();
        // Вручную
        $position = Position::find(1);
        $workers = Worker::where('position_id', $position->id)->get();
        dd($workers->toArray());

        $workers = Worker::whereIn('id', [1, 3])->get();
        $posId = $workers->pluck('position_id')->unique();
        $position = Position::whereIn('id', $posId)->get();

        dd($position->toArray());

        // Концепция Laravel
        $worker = Worker::find(3);
        $position = Position::find(2);
        dd($worker->position->toArray());
        dd($position->workers->toArray());
    }

    protected function prepareData()
    {

        $position1 = Position::create([
            'title' => "Developer"
        ]);
        $position2 = Position::create([
            'title' => "Manager"
        ]);

        $workerInfo1 = [
            'name' => 'Walter',
            'surname' => 'White',
            'position_id' => $position1->id,
            'email' => 'ww@gmail.com',
            'age' => '45',
            'description' => 'Say my name...',
            'is_married' => true,
        ];
        $workerInfo2 = [
            'name' => 'Gus',
            'surname' => 'Fring',
            'position_id' => $position1->id,
            'email' => 'callmegus@gmail.com',
            'age' => '43',
            'description' => 'Call me Gus',
            'is_married' => false,
        ];
        $workerInfo3 = [
            'name' => 'Saul',
            'surname' => 'Goodman',
            'position_id' => $position2->id,
            'email' => 'bettercallsaul@gmail.com',
            'age' => '40',
            'description' => 'Better Call Saul!!!',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerInfo1);
        $worker2 = Worker::create($workerInfo2);
        $worker3 = Worker::create($workerInfo3);

        $profileInfo1 = [
            'worker_id' => $worker1->id,
            'city' => 'Albuquerque',
            'exp' => 15,
        ];
        $profileInfo2 = [
            'worker_id' => $worker2->id,
            'city' => 'Albuquerque',
            'exp' => 15,
        ];
        $profileInfo3 = [
            'worker_id' => $worker3->id,
            'city' => 'Albuquerque',
            'exp' => 15,
        ];

        $profile1 = Profile::create($profileInfo1);
        $profile2 = Profile::create($profileInfo2);
        $profile3 = Profile::create($profileInfo3);
    }
}
