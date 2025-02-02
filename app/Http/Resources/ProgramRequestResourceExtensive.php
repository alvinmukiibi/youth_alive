<?php

namespace App\Http\Resources;
use App\User;
use App\Project;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TravelScopeResource;
use App\Http\Resources\VehicleHotelResource;
use App\Http\Resources\BudgetResource;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\TrailResource;
use App\Http\Resources\AttachmentsResource;
use App\Http\Resources\NotesResource;

class ProgramRequestResourceExtensive extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => User::find($this->user_id)->fname . ' ' . User::find($this->user_id)->lname,
            'requestor' => new ProfileResource(User::find($this->user_id)),
            'activity_type' => $this->activity_type,
            'documents' => $this->documents,
            'doc_completion_status' => $this->doc_completion_status,
            'id' => $this->id,
            'status' => $this->status,
            'notes' => $this->notes,
            'identity' => $this->identity,
            'requestor_type' => $this->getRequestorType() == 'board_chairman' ? 'director' :  $this->getRequestorType(),
            'project' => Project::find($this->project_id)->name,
            'created_at' => date('d-M-Y', strtotime($this->created_at)),
            'tsow' => $this->travelscope()->count() > 0 ? new TravelScopeResource($this->travelscope) : null,
            'vhr' => $this->vehiclehotel()->count() > 0 ? new VehicleHotelResource($this->vehiclehotel) : null,
            'bgt' => $this->travelscopebudget()->count() > 0 ? new BudgetResource($this->travelscopebudget) : null,
            'trail' => new TrailResource($this->trail),
            'attachments' => AttachmentsResource::collection($this->attachments),
            'notes' => NotesResource::collection($this->notes()->latest()->get())
        ];
    }
}
