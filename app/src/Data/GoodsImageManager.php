<?php
/**
 * User: dongww
 * Date: 14-5-8
 * Time: 下午2:13
 */

namespace Data;

use Data\Base\Manager;

class GoodsImageManager extends Manager
{
    static $tableName = 'goodsimage';

    protected $fields = [
        [
            'name' => 'path',
            'type' => 'string'
        ],
        [
            'name' => 'created',
            'type' => 'datetime'
        ],
    ];

    protected $many2one = [
        'goods',
    ];

    public function delete($id, $options = [])
    {
        if (!$options['base_dir']) {
            throw new \Exception('未传递目录参数');
        }

        $img = $this->get($id);

        unlink($options['base_dir'] . $img->path);

        parent::delete($id);
    }
}
 