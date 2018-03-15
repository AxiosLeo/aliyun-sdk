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

use aliyun\sdk\core\help\HttpResponse as Response;
use GuzzleHttp\Client;

class HttpHelper
{
    public static $connectTimeout = 30;//30 second

    public static $readTimeout = 80;//80 second

    /**
     * @param $domain
     * @param $path
     * @param array $data
     * @param string $method
     * @param array $header
     * @return Response
     */
    public static function curl($domain, $path, $data = [], $method = "POST", $header = [])
    {
        $domain = "http://" . $domain;
        $client = new Client(['base_uri' => $domain]);
        $result = $client->request($method, $path, [
            'http_errors' => false,
            'form_params' => $data,
            'headers' => $header
        ]);
        $body = $result->getBody();
        $response = new Response();
        $response->setHeader($result->getHeaders());
        $body = (string)$body;
        $content_type = $result->getHeaderLine("content-type");
        if (strpos($content_type, "xml") !== false) {
            $body = Parse::xmlToArray($body);
        } else if (strpos($content_type, "json") !== false) {
            $body = Parse::jsonToArray($body);
        }
        $response->setBody($body);
        $response->setStatus($result->getStatusCode());
        return $response;
    }

    public static function uuid($salt = "")
    {
        return md5($salt . uniqid(md5(microtime(true)), true));
    }
}
