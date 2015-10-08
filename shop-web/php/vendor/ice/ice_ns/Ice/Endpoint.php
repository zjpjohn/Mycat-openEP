<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Endpoint.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/Version.php';
    require_once 'Ice/BuiltinSequences.php';
    require_once 'Ice/EndpointF.php';
}

namespace Ice
{
    if(!defined('\\Ice\\TCPEndpointType'))
    {
        define(__NAMESPACE__ . '\\TCPEndpointType', 1);
    }
}

namespace Ice
{
    if(!defined('\\Ice\\UDPEndpointType'))
    {
        define(__NAMESPACE__ . '\\UDPEndpointType', 3);
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\EndpointInfo'))
    {
        abstract class EndpointInfo
        {
            public function __construct($timeout=0, $compress=false)
            {
                $this->timeout = $timeout;
                $this->compress = $compress;
            }

            abstract public function type();
            abstract public function datagram();
            abstract public function secure();

            public function __toString()
            {
                global $Ice__t_EndpointInfo;
                return IcePHP_stringify($this, $Ice__t_EndpointInfo);
            }

            public $timeout;
            public $compress;
        }

        $Ice__t_EndpointInfo = IcePHP_defineClass('::Ice::EndpointInfo', '\\Ice\\EndpointInfo', -1, true, false, $Ice__t_Object, null, array(
            array('timeout', $IcePHP__t_int, false, 0),
            array('compress', $IcePHP__t_bool, false, 0)));
    }
}

namespace Ice
{
    if(!interface_exists('\\Ice\\Endpoint'))
    {
        interface Endpoint
        {
            public function toString();
            public function getInfo();
        }

        $Ice__t_Endpoint = IcePHP_defineClass('::Ice::Endpoint', '\\Ice\\Endpoint', -1, true, false, $Ice__t_Object, null, null);
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\IPEndpointInfo'))
    {
        abstract class IPEndpointInfo extends \Ice\EndpointInfo
        {
            public function __construct($timeout=0, $compress=false, $host='', $port=0)
            {
                parent::__construct($timeout, $compress);
                $this->host = $host;
                $this->port = $port;
            }

            public function __toString()
            {
                global $Ice__t_IPEndpointInfo;
                return IcePHP_stringify($this, $Ice__t_IPEndpointInfo);
            }

            public $host;
            public $port;
        }

        $Ice__t_IPEndpointInfo = IcePHP_defineClass('::Ice::IPEndpointInfo', '\\Ice\\IPEndpointInfo', -1, true, false, $Ice__t_EndpointInfo, null, array(
            array('host', $IcePHP__t_string, false, 0),
            array('port', $IcePHP__t_int, false, 0)));
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\TCPEndpointInfo'))
    {
        abstract class TCPEndpointInfo extends \Ice\IPEndpointInfo
        {
            public function __construct($timeout=0, $compress=false, $host='', $port=0)
            {
                parent::__construct($timeout, $compress, $host, $port);
            }

            public function __toString()
            {
                global $Ice__t_TCPEndpointInfo;
                return IcePHP_stringify($this, $Ice__t_TCPEndpointInfo);
            }
        }

        $Ice__t_TCPEndpointInfo = IcePHP_defineClass('::Ice::TCPEndpointInfo', '\\Ice\\TCPEndpointInfo', -1, true, false, $Ice__t_IPEndpointInfo, null, null);
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\UDPEndpointInfo'))
    {
        abstract class UDPEndpointInfo extends \Ice\IPEndpointInfo
        {
            public function __construct($timeout=0, $compress=false, $host='', $port=0, $mcastInterface='', $mcastTtl=0)
            {
                parent::__construct($timeout, $compress, $host, $port);
                $this->mcastInterface = $mcastInterface;
                $this->mcastTtl = $mcastTtl;
            }

            public function __toString()
            {
                global $Ice__t_UDPEndpointInfo;
                return IcePHP_stringify($this, $Ice__t_UDPEndpointInfo);
            }

            public $mcastInterface;
            public $mcastTtl;
        }

        $Ice__t_UDPEndpointInfo = IcePHP_defineClass('::Ice::UDPEndpointInfo', '\\Ice\\UDPEndpointInfo', -1, true, false, $Ice__t_IPEndpointInfo, null, array(
            array('mcastInterface', $IcePHP__t_string, false, 0),
            array('mcastTtl', $IcePHP__t_int, false, 0)));
    }
}

namespace Ice
{
    if(!class_exists('\\Ice\\OpaqueEndpointInfo'))
    {
        abstract class OpaqueEndpointInfo extends \Ice\EndpointInfo
        {
            public function __construct($timeout=0, $compress=false, $rawEncoding=null, $rawBytes=null)
            {
                parent::__construct($timeout, $compress);
                $this->rawEncoding = is_null($rawEncoding) ? new \Ice\EncodingVersion : $rawEncoding;
                $this->rawBytes = $rawBytes;
            }

            public function __toString()
            {
                global $Ice__t_OpaqueEndpointInfo;
                return IcePHP_stringify($this, $Ice__t_OpaqueEndpointInfo);
            }

            public $rawEncoding;
            public $rawBytes;
        }

        $Ice__t_OpaqueEndpointInfo = IcePHP_defineClass('::Ice::OpaqueEndpointInfo', '\\Ice\\OpaqueEndpointInfo', -1, true, false, $Ice__t_EndpointInfo, null, array(
            array('rawEncoding', $Ice__t_EncodingVersion, false, 0),
            array('rawBytes', $Ice__t_ByteSeq, false, 0)));
    }
}
?>