<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Playlist extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return[
           'id'=>$this->id,
           'artist'=>$this->artist,
           'track'=>$this->track,
           'genre'=>$this->genre,
           'year'=>$this->year,
           'duration'=>$this->duration

       ];
    }
}
