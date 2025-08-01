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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiagDBInstances返回参数结构体
 *
 * @method integer getTotalCount() 获取实例总数。
 * @method void setTotalCount(integer $TotalCount) 设置实例总数。
 * @method integer getDbScanStatus() 获取全实例巡检状态：0：开启全实例巡检；1：未开启全实例巡检。
 * @method void setDbScanStatus(integer $DbScanStatus) 设置全实例巡检状态：0：开启全实例巡检；1：未开启全实例巡检。
 * @method array getItems() 获取实例相关信息。
 * @method void setItems(array $Items) 设置实例相关信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDiagDBInstancesResponse extends AbstractModel
{
    /**
     * @var integer 实例总数。
     */
    public $TotalCount;

    /**
     * @var integer 全实例巡检状态：0：开启全实例巡检；1：未开启全实例巡检。
     */
    public $DbScanStatus;

    /**
     * @var array 实例相关信息。
     */
    public $Items;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 实例总数。
     * @param integer $DbScanStatus 全实例巡检状态：0：开启全实例巡检；1：未开启全实例巡检。
     * @param array $Items 实例相关信息。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DbScanStatus",$param) and $param["DbScanStatus"] !== null) {
            $this->DbScanStatus = $param["DbScanStatus"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InstanceInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
