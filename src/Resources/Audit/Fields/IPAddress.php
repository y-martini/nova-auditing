<?php

namespace YMartini\Nova\Auditing\Resources\Audit\Fields;

use Laravel\Nova;

/**
 * @method static self make(string $name = 'IP address', string|null $attribute = null, callable|null $resolveCallback = null)
 */
class IPAddress extends Nova\Fields\Text
{
  public function __construct(string $name = 'IP address', ?string $attribute = null, ?callable $resolveCallback = null)
  {
    parent::__construct($name, $attribute, $resolveCallback);
  }
}
