<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class HelpResourceType
 * @package App
 *
 * @property int $id
 * @property int $help_resource_id
 * @property int $resource_type_id
 * @property string|null $message
 * @property DateTime|null $created_at
 * @property DateTime|null $updated_at
 * @property DateTime|null $deleted_at
 *
 */
class HelpResourceType extends Model
{
    /**
     * @return BelongsTo
     */
    public function helpresource()
    {
        return $this->belongsTo(HelpResource::class);
    }

    /**
     * @return BelongsTo
     */
    public function resourcetype()
    {
        return $this->belongsTo(ResourceType::class);
    }
}