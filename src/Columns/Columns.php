<?php

namespace DigitalCreative\NovaDataTable\Columns;

use JsonSerializable;

class Columns implements JsonSerializable
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $key;

    public function __construct(string $title, string $key)
    {

        $this->title = $title;
        $this->key = $key;

    }

    public function jsonSerialize(): array
    {
        return [
            'title' => $this->title,
            'key' => $this->key,
        ];
    }
}
