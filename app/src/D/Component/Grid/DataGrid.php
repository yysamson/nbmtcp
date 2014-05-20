<?php
/**
 * User: dongww
 * Date: 14-5-9
 * Time: 上午9:29
 */
//todo
namespace D\Component\Grid;


use Data\Base\Manager;

class DataGrid
{
    protected $fieldNames = [];

    protected $data;

    protected $page;

    protected $perPage;

    protected $count;

    public function __construct(Manager $manager)
    {
        foreach ($manager->getFields() as $f) {
            $this->fieldNames[] = null;
        }


    }
}
 