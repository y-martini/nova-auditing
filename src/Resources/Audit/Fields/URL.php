<?php

namespace YMartini\Nova\Auditing\Resources\Audit\Fields;

use Laravel\Nova;

/**
 * @method static self make(string $name = 'URL', string|null $attribute = null, callable|null $resolveCallback = null)
 */
class URL extends Nova\Fields\URL
{
  public function __construct(string $name = 'URL', ?string $attribute = null, ?callable $resolveCallback = null)
  {
    parent::__construct($name, $attribute, $resolveCallback);
  }
}
