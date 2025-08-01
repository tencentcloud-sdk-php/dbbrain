<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllUserContact请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，固定值：mysql。
 * @method void setProduct(string $Product) 设置服务产品类型，固定值：mysql。
 * @method array getNames() 获取联系人名数组，支持模糊搜索。
 * @method void setNames(array $Names) 设置联系人名数组，支持模糊搜索。
 */
class DescribeAllUserContactRequest extends AbstractModel
{
    /**
     * @var string 服务产品类型，固定值：mysql。
     */
    public $Product;

    /**
     * @var array 联系人名数组，支持模糊搜索。
     */
    public $Names;

    /**
     * @param string $Product 服务产品类型，固定值：mysql。
     * @param array $Names 联系人名数组，支持模糊搜索。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }
    }
}
