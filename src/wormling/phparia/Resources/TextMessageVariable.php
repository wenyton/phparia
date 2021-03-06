<?php

/*
 * Copyright 2014 Brian Smith <wormling@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace phparia\Resources;

/**
 * A key/value pair variable in a text message.
 *
 * @author Brian Smith <wormling@gmail.com>
 */
class TextMessageVariable extends Response
{
    /**
     * @var string A unique key identifying the variable.
     */
    private $key;

    /**
     * @var string The value of the variable.
     */
    private $value;

    /**
     * @return string A unique key identifying the variable.
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string The value of the variable.
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $response
     */
    public function __construct($response)
    {
        parent::__construct($response);

        $this->key = $this->getResponseValue('key');
        $this->value = $this->getResponseValue('value');
    }

}
