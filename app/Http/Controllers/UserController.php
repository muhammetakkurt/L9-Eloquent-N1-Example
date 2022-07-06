<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __invoke()
    {
        $query = User::with(['posts', 'walletHistories'])
                ->withCount(['posts', 'walletHistories', 'walletHistories AS wallet_histories_balance' => function ($query) {
                    $query->select(DB::raw('SUM(value) as wallet_histories_balance'));
                }])
                ->limit(50)
                ->orderBy('id', 'DESC')
                ->get();

        return UserResource::collection($query);
    }
}
