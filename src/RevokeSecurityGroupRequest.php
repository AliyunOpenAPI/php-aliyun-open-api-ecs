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

class RevokeSecurityGroupRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $securityGroupId;

    private $ipProtocol;

    private $portRange;

    private $sourceGroupId;

    private $sourceGroupOwnerAccount;

    private $sourceCidrIp;

    private $policy;

    private $nicType;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Ecs", "2014-05-26", "RevokeSecurityGroup");
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


    public function getSecurityGroupId()
    {
        return $this->securityGroupId;
    }


    public function setSecurityGroupId($securityGroupId)
    {
        $this->securityGroupId                    = $securityGroupId;
        $this->queryParameters["SecurityGroupId"] = $securityGroupId;
    }


    public function getIpProtocol()
    {
        return $this->ipProtocol;
    }


    public function setIpProtocol($ipProtocol)
    {
        $this->ipProtocol                    = $ipProtocol;
        $this->queryParameters["IpProtocol"] = $ipProtocol;
    }


    public function getPortRange()
    {
        return $this->portRange;
    }


    public function setPortRange($portRange)
    {
        $this->portRange                    = $portRange;
        $this->queryParameters["PortRange"] = $portRange;
    }


    public function getSourceGroupId()
    {
        return $this->sourceGroupId;
    }


    public function setSourceGroupId($sourceGroupId)
    {
        $this->sourceGroupId                    = $sourceGroupId;
        $this->queryParameters["SourceGroupId"] = $sourceGroupId;
    }


    public function getSourceGroupOwnerAccount()
    {
        return $this->sourceGroupOwnerAccount;
    }


    public function setSourceGroupOwnerAccount($sourceGroupOwnerAccount)
    {
        $this->sourceGroupOwnerAccount                    = $sourceGroupOwnerAccount;
        $this->queryParameters["SourceGroupOwnerAccount"] = $sourceGroupOwnerAccount;
    }


    public function getSourceCidrIp()
    {
        return $this->sourceCidrIp;
    }


    public function setSourceCidrIp($sourceCidrIp)
    {
        $this->sourceCidrIp                    = $sourceCidrIp;
        $this->queryParameters["SourceCidrIp"] = $sourceCidrIp;
    }


    public function getPolicy()
    {
        return $this->policy;
    }


    public function setPolicy($policy)
    {
        $this->policy                    = $policy;
        $this->queryParameters["Policy"] = $policy;
    }


    public function getNicType()
    {
        return $this->nicType;
    }


    public function setNicType($nicType)
    {
        $this->nicType                    = $nicType;
        $this->queryParameters["NicType"] = $nicType;
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

}