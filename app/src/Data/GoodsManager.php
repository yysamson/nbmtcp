<?php
/**
 * User: dongww
 * Date: 14-5-8
 * Time: 上午9:24
 */

namespace Data;

use Data\Base\Manager;

class GoodsManager extends Manager
{
    static $tableName = 'goods';

    //todo 改为 static
    protected $fields = [
        [
            'name' => 'name',
            'type' => 'string'
        ],
        [
            'name' => 'price',
            'type' => 'float'
        ],
        [//简要描述
            'name' => 'description',
            'type' => 'string'
        ],
        [//详细介绍
            'name' => 'introduction',
            'type' => 'string'
        ],
        [//规格
            'name' => 'specification',
            'type' => 'string'
        ],
        [//是否上架
            'name' => 'available',
            'type' => 'bool'
        ],
        [//标题图片
            'name' => 'image',
            'type' => 'string'
        ],
        [
            'name' => 'created',
            'type' => 'datetime'
        ],
    ];

    protected $many2one = [
        'goodsCategory',
    ];

    public function deleteAllImages($id, $baseDir)
    {
        $gim    = new GoodsImageManager();
        $images = $gim->findAll(sprintf(' goods_id = %d ', $id));

        foreach ($images as $i) {
            $gim->delete($i->id, ['base_dir' => $baseDir]);
        }
    }
}
