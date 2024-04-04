<?php

namespace YMartini\Nova\Auditing\Resources\Audit\Fields;

use Laravel\Nova;

/**
 * @method static self make(string $name = 'User agent', string|null $attribute = null, callable|null $resolveCallback = null)
 */
class UserAgent extends Nova\Fields\Textarea
{
  public function __construct(string $name = 'User agent', ?string $attribute = null, ?callable $resolveCallback = null)
  {
    parent::__construct($name, $attribute, $resolveCallback);
  }
}
