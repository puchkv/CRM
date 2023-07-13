<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamMemberResource;
use Illuminate\Http\Request;

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\TeamResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class TeamController extends Controller
{
    // @ -> api/v1/team/
    public function index() {

        $team = TeamResource::collection(User::all());

        return response()->json([
            'status' => Response::HTTP_OK,
            'team' => $team
        ]);
    }

    public function get(Request $request) {

        try {
            $user = User::findOrFail($request->route('id'));
        
            $member = new TeamMemberResource($user);
    
            return response()->json([
                'status' => Response::HTTP_OK,
                'member' => $member,
            ]);
        }
        catch (ModelNotFoundException $exception) {
            return response([
                'status' => Response::HTTP_NOT_FOUND,        
                'member' => NULL,
            ]);
        }   

        return response([
            'status' => Response::HTTP_BAD_REQUEST,
            'member' => NULL
        ]);

    }


    public function update() {
        // @ -> api/v1/team/member/{_id_}

    }

    public function destroy() {
        // @ -> api/v1/team/member/{_id_}

    }
}
