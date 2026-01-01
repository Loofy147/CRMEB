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

namespace crmeb\services\pay\storage;


use crmeb\basic\BaseManager;
use crmeb\services\pay\BasePay;
use crmeb\exceptions\PayException;
use crmeb\services\pay\PayInterface;
use think\facade\Config;
use think\facade\Route;

/**
 * Class ChargilyPay
 * @package crmeb\services\pay\storage
 */
class ChargilyPay extends BasePay implements PayInterface
{
    /**
     * @var string
     */
    protected $host = 'https://pay.chargily.com/api/v2';

    protected function initialize(array $config)
    {
        // TODO: Implement initialize() method.
    }

    /**
     * @param string $orderId
     * @param string $totalFee
     * @param string $attach
     * @param string $body
     * @param string $detail
     * @param array $options
     * @return mixed|void
     */
    public function create(string $orderId, string $totalFee, string $attach, string $body, string $detail, array $options = [])
    {
        $data = [
            'amount' => $totalFee,
            'currency' => 'dzd',
            'success_url' => Route::buildUrl('/success')->domain(true)->build(),
            'failure_url' => Route::buildUrl('/fail')->domain(true)->build(),
            'webhook_endpoint' => Route::buildUrl('/webhook')->domain(true)->build(),
            'description' => $body,
            'metadata' => [
                'order_id' => $orderId
            ],
        ];

        //TODO send request to chargily and return checkout url
    }

    /**
     * @param string $openid
     * @param string $orderId
     * @param string $amount
     * @param array $options
     */
    public function merchantPay(string $openid, string $orderId, string $amount, array $options = [])
    {
        // TODO: Implement merchantPay() method.
    }

    /**
     * @param string $outTradeNo
     * @param array $opt
     */
    public function refund(string $outTradeNo, array $opt = [])
    {
        // TODO: Implement refund() method.
    }

    /**
     * @param string $outTradeNo
     * @param string $outRequestNo
     * @param array $other
     */
    public function queryRefund(string $outTradeNo, string $outRequestNo, array $other = [])
    {
        // TODO: Implement queryRefund() method.
    }

    /**
     * @return mixed
     */
    public function handleNotify()
    {
        // TODO: Implement handleNotify() method.
    }
}
