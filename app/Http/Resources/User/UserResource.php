<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'posts'            => $this->posts,
            'posts_count'      => $this->posts_count,
            'wallet_histories' => $this->walletHistories,
            'wallet_transaction_count' => $this->wallet_histories_count,
            'wallet_balance'   => $this->wallet_histories_balance,
            'created_at'       => $this->created_at,
            'updated_at'       => $this->updated_at,
        ];
    }
}
