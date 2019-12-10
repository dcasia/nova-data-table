<?php

namespace DigitalCreative\NovaDataTable;

use Laravel\Nova\Card;

class NovaDataTable extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    public function __construct($component = null)
    {

        parent::__construct($component);
        $this->withMeta([
            'rowLabels' => [],
            'columns' => [],
            'data' => [],
        ]);

    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-data-table';
    }

    public function columns(array $columns): self
    {
        return $this->withMeta([ 'columns' => $columns ]);
    }

    public function data(array $data): self
    {
        return $this->withMeta([ 'data' => $data ]);
    }

    public function rowLabels(array $rowLabels): self
    {
        return $this->withMeta([ 'rowLabels' => $rowLabels ]);
    }
}
