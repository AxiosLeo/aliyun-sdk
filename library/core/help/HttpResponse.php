<?php
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

namespace aliyun\sdk\core\help;

class HttpResponse
{
    public $header;

    public $body;

    public $status;

    public function setHeader($header)
    {
        $this->header = $header;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getContent($format = "json")
    {
        if ($format === "json") {
            if (is_string($this->body)) {
                $result = json_decode($this->body, true);
                return empty($result) ? $this->body : $result;
            }
        }
        return $this->body;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
