<?php namespace Aliyun\ECS\Request;

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

use Aliyun\Core\RpcAcsRequest;

class DescribeEipAddressesRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $status;

    private $eipAddress;

    private $allocationId;

    private $pageNumber;

    private $pageSize;

    private $ownerAccount;

    private $filter1Key;

    private $filter2Key;

    private $filter1Value;

    private $filter2Value;

    private $lockReason;


    public function  __construct()
    {
        parent::__construct("Ecs", "2014-05-26", "DescribeEipAddresses");
    }


    public function getOwnerId()
    {
        return $this->ownerId;
    }


    public function setOwnerId($ownerId)
    {
        $this->ownerId                    = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }


    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }


    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount                    = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }


    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }


    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId                    = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }


    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status                    = $status;
        $this->queryParameters["Status"] = $status;
    }


    public function getEipAddress()
    {
        return $this->eipAddress;
    }


    public function setEipAddress($eipAddress)
    {
        $this->eipAddress                    = $eipAddress;
        $this->queryParameters["EipAddress"] = $eipAddress;
    }


    public function getAllocationId()
    {
        return $this->allocationId;
    }


    public function setAllocationId($allocationId)
    {
        $this->allocationId                    = $allocationId;
        $this->queryParameters["AllocationId"] = $allocationId;
    }


    public function getPageNumber()
    {
        return $this->pageNumber;
    }


    public function setPageNumber($pageNumber)
    {
        $this->pageNumber                    = $pageNumber;
        $this->queryParameters["PageNumber"] = $pageNumber;
    }


    public function getPageSize()
    {
        return $this->pageSize;
    }


    public function setPageSize($pageSize)
    {
        $this->pageSize                    = $pageSize;
        $this->queryParameters["PageSize"] = $pageSize;
    }


    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }


    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount                    = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }


    public function getFilter1Key()
    {
        return $this->filter1Key;
    }


    public function setFilter1Key($filter1Key)
    {
        $this->filter1Key                    = $filter1Key;
        $this->queryParameters["Filter1Key"] = $filter1Key;
    }


    public function getFilter2Key()
    {
        return $this->filter2Key;
    }


    public function setFilter2Key($filter2Key)
    {
        $this->filter2Key                    = $filter2Key;
        $this->queryParameters["Filter2Key"] = $filter2Key;
    }


    public function getFilter1Value()
    {
        return $this->filter1Value;
    }


    public function setFilter1Value($filter1Value)
    {
        $this->filter1Value                    = $filter1Value;
        $this->queryParameters["Filter1Value"] = $filter1Value;
    }


    public function getFilter2Value()
    {
        return $this->filter2Value;
    }


    public function setFilter2Value($filter2Value)
    {
        $this->filter2Value                    = $filter2Value;
        $this->queryParameters["Filter2Value"] = $filter2Value;
    }


    public function getLockReason()
    {
        return $this->lockReason;
    }


    public function setLockReason($lockReason)
    {
        $this->lockReason                    = $lockReason;
        $this->queryParameters["LockReason"] = $lockReason;
    }

}