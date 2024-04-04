<?php

namespace YMartini\Nova\Auditing\Resources\Audit\Fields;

use Laravel\Nova;

/**
 * @method static self make(string $name = 'Auditable', string|null $attribute = null, callable|null $resolveCallback = null)
 */
class Auditable extends Nova\Fields\MorphTo
{
  public function __construct(string $name = 'Auditable', ?string $attribute = null, ?callable $resolveCallback = null)
  {
    parent::__construct($name, $attribute, $resolveCallback);
  }
}
