<?php

namespace MacsiDigital\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class UpdateQuestion extends PersistResource
{

    protected $persistAttributes = [
    	'name' => 'nullable|string',
    	'type' => 'nullable|in:single,multiple',
    	'answers' => 'nullable|array'
    ];
    
}