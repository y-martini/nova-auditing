<?php

namespace YMartini\Nova\Auditing\Resources;

use Laravel\Nova;
use YMartini\Nova\Auditing\Resources\Audit\Fields;

class Audit extends Nova\Resource
{
  public static string $model = \OwenIt\Auditing\Models\Audit::class;

  public function fields(Nova\Http\Requests\NovaRequest $request): array
  {
    return [
      Fields\ID::make(),
      Fields\User::make(),
      Fields\Event::make(),
      Fields\Auditable::make(),
      Fields\OldValues::make(),
      Fields\NewValues::make(),
      Fields\URL::make(),
      Fields\IPAddress::make(),
      Fields\UserAgent::make(),
      Fields\Tags::make(),
      Fields\CreatedAt::make(),
      Fields\UpdatedAt::make(),
    ];
  }
}
