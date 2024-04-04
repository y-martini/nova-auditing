<?php

namespace YMartini\Nova\Auditing\Resources\Audit\Fields;

use Laravel\Nova;

/**
 * @method static self make(string $name = 'Created at', string|null $attribute = null, callable|null $resolveCallback = null)
 */
class CreatedAt extends Nova\Fields\DateTime
{
  public function __construct(string $name = 'Created at', ?string $attribute = null, ?callable $resolveCallback = null)
  {
    parent::__construct($name, $attribute, $resolveCallback);
  }
}
