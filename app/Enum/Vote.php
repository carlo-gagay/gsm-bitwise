<?php

namespace App\Enum;

enum Vote: string
{
    case UpVote = 'up_vote';
    case DownVote = 'down_vote';

    public static function getValues(): array
    {
        return array_column(Vote::cases(), 'value');
    }
}
