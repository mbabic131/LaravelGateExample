<?php

namespace App\PhpStormExamples;

interface TaskRepository
{
    public function getCompleted();

    public function getInProcess();
}