<?php namespace App;

use Kalnoy\Nestedset\Node;

/**
 * Class Category
 *
 * @param string $title
 *
 * @package App
 */
class Category extends Node {

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'parent_id',
    ];

}
