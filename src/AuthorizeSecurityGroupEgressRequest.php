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

class AuthorizeSecurityGroupEgressRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $securityGroupId;

    private $ipProtocol;

    private $portRange;

    private $destGroupId;

    private $destGroupOwnerAccount;

    private $destCidrIp;

    private $policy;

    private $priority;

    private $nicType;

    private $clientToken;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Ecs", "2014-05-26", "AuthorizeSecurityGroupEgress");
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


    public function getDestGroupId()
    {
        return $this->destGroupId;
    }


    public function setDestGroupId($destGroupId)
    {
        $this->destGroupId                    = $destGroupId;
        $this->queryParameters["DestGroupId"] = $destGroupId;
    }


    public function getDestGroupOwnerAccount()
    {
        return $this->destGroupOwnerAccount;
    }


    public function setDestGroupOwnerAccount($destGroupOwnerAccount)
    {
        $this->destGroupOwnerAccount                    = $destGroupOwnerAccount;
        $this->queryParameters["DestGroupOwnerAccount"] = $destGroupOwnerAccount;
    }


    public function getDestCidrIp()
    {
        return $this->destCidrIp;
    }


    public function setDestCidrIp($destCidrIp)
    {
        $this->destCidrIp                    = $destCidrIp;
        $this->queryParameters["DestCidrIp"] = $destCidrIp;
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


    public function getPriority()
    {
        return $this->priority;
    }


    public function setPriority($priority)
    {
        $this->priority                    = $priority;
        $this->queryParameters["Priority"] = $priority;
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


    public function getClientToken()
    {
        return $this->clientToken;
    }


    public function setClientToken($clientToken)
    {
        $this->clientToken                    = $clientToken;
        $this->queryParameters["ClientToken"] = $clientToken;
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