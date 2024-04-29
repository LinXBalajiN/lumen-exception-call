<?php

namespace App\Services;

use App\Exceptions\Handler as BaseHandler;
use Throwable;
use App\Services\BugAtlasReporterService;

class BugatlasExceptionHandlingService extends BaseHandler
{

    protected $bugAtlasReporter;

    
    public function __construct(BugAtlasReporterService $bugAtlasReporter)
    {
        $this->bugAtlasReporter = $bugAtlasReporter;
    }
    public function render($request, Throwable $exception)
    {
        if ($this->shouldHandleException($exception)) {
            $this->bugAtlasReporter->report($request, $exception);
        }
        return parent::render($request, $exception);
    }

    protected function shouldHandleException(Throwable $exception): bool
    {
            return true;
    }
}