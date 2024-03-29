<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientDocument extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id', 'id')->where('object_type', 'client_document');
    }
}
