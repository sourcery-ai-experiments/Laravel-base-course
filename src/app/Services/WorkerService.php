<?php

namespace App\Services;

use App\Http\Requests\Worker\StoreRequest;
use App\Models\Worker;

class WorkerService
{
    public function createWorker($data)
    {
        $data['is_married'] = isset($data['is_married']);
        return Worker::create($data);
    }
}
