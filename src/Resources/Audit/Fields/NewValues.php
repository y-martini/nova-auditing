<?php

namespace YMartini\Nova\Auditing\Resources\Audit\Fields;

use Laravel\Nova;

/**
 * @method static self make(string $name = 'New values', string|null $attribute = null, callable|null $resolveCallback = null)
 */
class NewValues extends Nova\Fields\KeyValue
{
  public function __construct(string $name = 'New values', ?string $attribute = null, ?callable $resolveCallback = null)
  {
    parent::__construct($name, $attribute, $resolveCallback);
  }
}
