<?php
namespace App\Functions;

use App\Model\AbstractManager;

class Article extends AbstractManager
{
    public const TABLE = 'articles';

    // Function qui va formater la date a la France
    public function getCreatedAt(): string
    {
        return "Date";
    }
}