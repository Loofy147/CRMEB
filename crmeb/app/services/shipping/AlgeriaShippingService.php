<?php
// +----------------------------------------------------------------------
// | CRMEB [ CRMEB赋能开发者，助力企业发展 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2023 https://www.crmeb.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed CRMEB并不是自由软件，未经许可不能去掉CRMEB相关版权
// +----------------------------------------------------------------------
// | Author: CRMEB Team <admin@crmeb.com>
// +----------------------------------------------------------------------

namespace app\services\shipping;


use app\dao\shipping\ExpressDao;
use app\services\BaseServices;
use crmeb\exceptions\AdminException;
use crmeb\services\FormBuilder as Form;

/**
 *
 * Class AlgeriaShippingService
 * @package app\services\shipping
 */
class AlgeriaShippingService extends BaseServices
{
    /**
     * 构造方法
     * AlgeriaShippingService constructor.
     * @param ExpressDao $dao
     */
    public function __construct(ExpressDao $dao)
    {
        $this->dao = $dao;
    }

    /**
     * 物流公司查询
     * @param string $cacheName
     * @param string $expressNum
     * @param string|null $com
     * @param string $phone
     * @return array
     */
    public function query(string $cacheName, string $expressNum, string $com = null, $phone = '')
    {
        // TODO: Implement query() method.
        return [];
    }
}
