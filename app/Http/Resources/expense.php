<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class expense extends JsonResource
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
        
		 
		    
				'item_name' => $this->item_name,
				'item_price' => $this->item_price,
			
			];
        
		
    }
	
	 public function with($request)
    {
        return [
            'created_by' => 'saiyedul_bashar',
			'respected_by' => 'shohan vai',
        ];
    }
}
