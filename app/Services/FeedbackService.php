<?php

namespace App\Services;

use App\Http\Requests\FeedbackRequest;
use App\Jobs\SendMail;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class FeedbackService
{
    /**
     * @param FeedbackRequest $request
     * @return Builder|Model
     */
    public function store(FeedbackRequest $request): Model|Builder
    {
        $data = $request->validated();
        $feedback = Feedback::query()->create($data);
        $this->createJobToSendMail($feedback);
        return $feedback;
    }

    /**
     * @param $feedback
     * @return void
     */
    private function createJobToSendMail($feedback): void
    {
        SendMail::dispatch($feedback);
    }
}
