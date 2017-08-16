<?php

namespace App\PhpStormExamples;

use Illuminate\Support\Facades\DB;

/**
 * Class DbTaskRepository
 * @package App\PhpStormExamples
 */
class DbTaskRepository implements TaskRepository
{
    /**
     * @var DB
     */
    private $db;

    /**
     * @param DB $db
     */
    public function __controller(DB $db)
    {
        $this->db = $db;
    }

    /**
     * @return string
     */
    public function getCompleted()
    {
        $message = 'Task completed';

        return $message;
    }

    public function getInProcess()
    {
        if($str = 'Cyborg') {
            return 'UFC Champion';
        }
         
        return false;
    }
}
