<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @class PaymentPlugin
 * @brief 支付插件抽象类
 */
abstract class PaymentPlugin {

    public $method = "post"; //表单提交模式
    public $name = null;  //支付插件名称
    public $version = 1.0;   //版本
    public $callbackUrl = '';    //支付完成后，回调地址
    public $serverCallbackUrl = '';    //异步通知地址

    /**
     * @brief 构造函数
     * @param $payment_id 支付方式ID
     */

    public function __construct($payment_id) {
        
    }

    /**
     * @brief 记录支付平台的交易号
     * @param $orderNo string 订单编号
     * @param $tradeNo string 交易流水号
     * @return boolean
     */
    protected function recordTradeNo($orderNo, $tradeNo) {
        
    }

    /**
     * @brief 开始支付
     */
    public function doPay($sendData) {
        
    }

    /**
     * @brief 返回配置参数
     */
    public function configParam() {
        
    }

    /**
     * 异步通知停止
     */
    abstract public function notifyStop();

    /**
     * 获取提交地址
     * @return string Url提交地址
     */
    abstract public function getSubmitUrl();

    /**
     * 获取要发送的数据数组结构
     * @param $payment array 要传递的支付信息
     * @return array
     */
    abstract public function getSendData($paymentInfo);

    /**
     * 同步支付回调
     * @param $ExternalData array  支付接口回传的数据
     * @param $paymentId    int    支付接口ID
     * @param $money        float  交易金额
     * @param $message      string 信息
     * @param $orderNo      string 订单号
     */
    abstract public function callback($ExternalData, &$paymentId, &$money, &$message, &$orderNo);

    /**
     * 同步支付回调
     * @param $ExternalData array  支付接口回传的数据
     * @param $paymentId    int    支付接口ID
     * @param $money        float  交易金额
     * @param $message      string 信息
     * @param $orderNo      string 订单号
     */
    abstract public function serverCallback($ExternalData, &$paymentId, &$money, &$message, &$orderNo);
}
