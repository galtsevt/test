<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Services\FeedbackService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class FeedbackController extends Controller
{
    /**
     * @param FeedbackRequest $request
     * @return Model|Builder
     */
    public function __invoke(FeedbackRequest $request): Model|Builder
    {
        return (new FeedbackService())->store($request);
    }
}
