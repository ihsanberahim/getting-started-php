<?php
/*
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Cloud\Samples\Bookshelf;

/**
 * Class FakeImageStorage
 * @package Google\Cloud\Samples\Bookshelf
 *
 * A simple mock that is easy to verify in tests.
 */
class FakeImageStorage
{
    public function __construct()
    {
        $this->count = 0;
        $this->deletedFiles = array();
    }

    public function storeFile($localFilePath, $contentType)
    {
        $this->count += 1;
        return 'img' . $this->count;
    }

    public function deleteFile($url)
    {
        array_push($this->deletedFiles, $url);
    }
}
