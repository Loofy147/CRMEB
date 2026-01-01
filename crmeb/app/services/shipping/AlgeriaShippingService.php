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
use PiteurStudio\CourierDZ\CourierDZ;
use PiteurStudio\CourierDZ\ShippingProvider;

/**
 *
 * Class AlgeriaShippingService
 * @package app\services\shipping
 */
class AlgeriaShippingService extends BaseServices
{
    /**
     * To use this service, you need to install the CourierDZ library.
     * You can do this by running the following command in your terminal:
     * composer require piteurstudio/courierdz
     */

    /**
     * @var CourierDZ
     */
    protected $shipping_provider;

    /**
     * 构造方法
     * AlgeriaShippingService constructor.
     * @param ExpressDao $dao
     */
    public function __construct(ExpressDao $dao)
    {
        $this->dao = $dao;

        /**
         * Initialize the shipping provider and set your credentials.
         *
         * // Ecotrack providers
         * $credentials = ['token' => '****'];
         *
         * // Procolis providers ( ZREXPRESS )
         * $credentials = ['id' => '****', 'token' => '****'];
         *
         * // Yalidine providers
         * $credentials = ['token' => '****', 'key' => '****'];
         *
         * // Mayestro Delivery providers
         * $credentials = ['token' => '****'];
         */
        $credentials = ['token' => 'YOUR_TOKEN'];
        $this->shipping_provider = CourierDZ::provider(ShippingProvider::YALIDINE, $credentials);
    }

    /**
     * Get shipping rates.
     *
     * @param array $data
     * @return array
     */
    public function getRates(array $data)
    {
        /**
         * TODO: Cache the shipping rates to avoid fetching them from the shipping provider's API on every request.
         * You can use the CacheService to store the rates for a certain period of time.
         *
         * Example:
         *
         * use crmeb\services\CacheService;
         *
         * $cacheName = 'algeria_shipping_rates_' . md5(json_encode($data));
         * $rates = CacheService::get($cacheName);
         * if (!$rates) {
         *     $rates = $this->shipping_provider->getRates($data);
         *     CacheService::set($cacheName, $rates, 3600);
         * }
         *
         * return $rates;
         */
        return $this->shipping_provider->getRates($data);
    }

    /**
     * Create a new order.
     *
     * @param array $data
     * @return array
     */
    public function createOrder(array $data)
    {
        return $this->shipping_provider->createOrder($data);
    }

    /**
     * Get the order label.
     *
     * @param string $tracking_number
     * @return array
     */
    public function orderLabel(string $tracking_number)
    {
        return $this->shipping_provider->orderLabel($tracking_number);
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
