<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Validator\Tests\Stubs;

use Drewlabs\Contracts\Validator\Validatable;
use Drewlabs\Validator\Traits\ViewModel;

class ValidatableModel implements Validatable
{
    use ViewModel;

    public function updateRules()
    {
        return [
            'y' => 'sometimes',
        ];
    }

    public function rules()
    {
        return [
            'y' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [];
    }
}