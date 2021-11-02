<?php

namespace App\Repository\Tools;

trait Message
{
    public function msgCreate()
    {
        return 'create';
    }
    public function msgDelete()
    {
        return 'delete';
    }
    public function msgSuccess()
    {
        return 'success';
    }
    public function msgWarning()
    {
        return 'warning';
    }
    public function msgOk()
    {
        return 'ok';
    }
    public function msgNo()
    {
        return 'no';
    }
}
