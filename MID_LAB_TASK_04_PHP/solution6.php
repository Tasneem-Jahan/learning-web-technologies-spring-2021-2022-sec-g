<?php
function searchArray($items, $search)
{
    foreach ($items as $item) {
        if ($item == strtolower($search)) {
            return $item;
        }
    }
}

$items = ['random', 'country', 'tour'];

searchArray($items, 'country');
