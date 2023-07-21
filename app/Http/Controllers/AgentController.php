<?php

namespace App\Http\Controllers\;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use App\Http\Resources\AgentResource;
use Illuminate\Http\JsonResponse;

class AgentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $agents = Agent::all();

        return $this->sendResponse(AgentResource::collection($agents), 'Agents retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'codename' => 'required',
            'real_name' => 'required',
            'origin' => 'required',
            'race' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'basic_abilities_1' => 'required',
            'basic_abilities_2' => 'required',
            'signature_abilities' => 'required',
            'ultimate_ability' => 'required',
            'ult_points' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $agent = Agent::create($input);

        return $this->sendResponse(new AgentResource($agent), 'Agent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $agent = Agent::find($id);

        if (is_null($agent)) {
            return $this->sendError('Agent not found.');
        }

        return $this->sendResponse(new AgentResource($agent), 'Agent retrieved successfully.');
    }

    public function getByRole($role): JsonResponse
    {
        $agent = Agent::where('role', $role)->first();

        if (is_null($agent)) {
            return $this->sendError('Agent not found.');
        }

        return $this->sendResponse(new AgentResource($agent), 'Agent retrieved successfully.');
    }

    public function getByName($name): JsonResponse
    {
        $agent = Agent::where('name', $name)->first();

        if (is_null($agent)) {
            return $this->sendError('Agent not found.');
        }

        return $this->sendResponse(new AgentResource($agent), 'Agent retrieved successfully.');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request): JsonResponse
    {
        $agent = Agent::find($id);
        $agent->update($request->all());

        //jika berhasil maka simpan data dengan method $post->save()
        if ($agent->save()) {
            return response()->json('Agent updated successfully.');
        } else {
            return response()->json('Failed to update.');
        }

        // $input = $request->all();

        // $validator = Validator::make($input, [
        //     'name' => 'required',
        //     'codename' => 'required',
        //     'real_name' => 'required',
        //     'origin' => 'required',
        //     'race' => 'required',
        //     'gender' => 'required',
        //     'role' => 'required',
        //     'basic_abilities_1' => 'required',
        //     'basic_abilities_2' => 'required',
        //     'signature_abilities' => 'required',
        //     'ultimate_ability' => 'required',
        //     'ult_points' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return $this->sendError('Validation Error.', $validator->errors());
        // }

        // $agent->name = $input['name'];
        // $agent->codename = $input['codename'];
        // $agent->real_name = $input['real_name'];
        // $agent->origin = $input['origin'];
        // $agent->race = $input['race'];
        // $agent->role = $input['role'];
        // $agent->gender = $input['gender'];
        // $agent->basic_abilities_1 = $input['basic_abilities_1'];
        // $agent->basic_abilities_2 = $input['basic_abilities_2'];
        // $agent->signature_abilities = $input['signature_abilities'];
        // $agent->ultimate_ability = $input['ultimate_ability'];
        // $agent->ult_points = $input['ult_points'];
        // $agent->save();

        // return $this->sendResponse(new AgentResource($agent), 'Agent updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): JsonResponse
    {
        $agent = Agent::findOrFail($id);

        if ($agent->delete()) {
            return $this->sendResponse([], 'Agent deleted successfully.');
        } else {
            return $this->sendResponse([], 'Failed to delete');
        }
    }

    public function destroyByName($name): JsonResponse
    {
        $agent = Agent::findOrFail($name);

        if ($agent->delete()) {
            return $this->sendResponse([], 'Agent deleted successfully.');
        } else {
            return $this->sendResponse([], 'Failed to delete');
        }
    }
}
