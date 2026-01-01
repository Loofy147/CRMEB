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
declare (strict_types=1);

namespace app\services\pay;

use app\services\BaseServices;
use crmeb\exceptions\ApiException;
use crmeb\services\pay\Pay;

/**
 *
 * Class ChargilyPayService
 * @package app\services\pay
 */
class ChargilyPayService extends BaseServices
{
    /**
     * TODO: Cache the payment gateway configuration to avoid fetching it from the database on every request.
     * You can use the CacheService to store the configuration for a certain period of time.
     *
     * Example:
     *
     * use crmeb\services\CacheService;
     *
     * $config = CacheService::get('chargily_pay_config');
     * if (!$config) {
     *     $config = ... // Fetch the configuration from the database
     *     CacheService::set('chargily_pay_config', $config, 3600);
     * }
     */

    /**
     * 支付
     * @param $order_id
     * @param $total_fee
     * @return array
     */
    public function pay($order_id, $total_fee)
    {
        // TODO: Implement pay() method.
        return [];
    }

    /**
     * 支付异步回调
     * @return string
     */
    public function notify()
    {
        // TODO: Implement notify() method.
        return '';
    }
}
