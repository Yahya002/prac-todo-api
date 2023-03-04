<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ToDoResource extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string|null
     */
    public static $wrap = NULL;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ownerId' => $this->owner_id,
            'taskText' => $this->task_text,
            'dueAt' => $this->due_at,
            'completed' => $this->completed,
            // 'createdAt' => $this->created_at,
            // 'updatedA' => $this->updated_at,
        ];
    }
}
