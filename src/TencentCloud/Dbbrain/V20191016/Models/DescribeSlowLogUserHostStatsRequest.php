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
 * DescribeSlowLogUserHostStats请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getStartTime() 获取查询范围的开始时间，时间格式如：2019-09-10 12:13:14。
 * @method void setStartTime(string $StartTime) 设置查询范围的开始时间，时间格式如：2019-09-10 12:13:14。
 * @method string getEndTime() 获取查询范围的结束时间，时间格式如：2019-09-10 12:13:14。
 * @method void setEndTime(string $EndTime) 设置查询范围的结束时间，时间格式如：2019-09-10 12:13:14。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 */
class DescribeSlowLogUserHostStatsRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 查询范围的开始时间，时间格式如：2019-09-10 12:13:14。
     */
    public $StartTime;

    /**
     * @var string 查询范围的结束时间，时间格式如：2019-09-10 12:13:14。
     */
    public $EndTime;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $StartTime 查询范围的开始时间，时间格式如：2019-09-10 12:13:14。
     * @param string $EndTime 查询范围的结束时间，时间格式如：2019-09-10 12:13:14。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
