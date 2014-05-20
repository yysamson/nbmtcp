<?php
/**
 * User: dongww
 * Date: 14-5-7
 * Time: 上午9:50
 */

namespace Data;

use Data\Base\TreeCategoryManager;

class GoodsCategoryManager extends TreeCategoryManager
{
    static $tableName = 'goodscategory';

    public function getGoods($cateId)
    {
        //todo
    }
}
