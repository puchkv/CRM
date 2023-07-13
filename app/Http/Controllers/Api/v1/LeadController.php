<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Lead;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Http\Resources\LeadResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\TeamMemberResource;
use App\Models\LeadStatus;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = LeadResource::collection(Lead::all());

        return response()->json([
            'status' => Response::HTTP_OK,
            'team' => $leads
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeadRequest $request)
    {
        $lead = Lead::create([
            'title' => $request->title,
            'category' => $request->category,
            'source' => $request->source,
            'price' => $request->price,
            'status' => 'new',
            'created_by' => auth()->user()->id,
        ]);

        return response([
            'status' => Response::HTTP_OK,
            'message' => 'Lead created successfully!',
            'inserted_data' => $lead,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function get(Request $requestedLead)
    {
        $lead = Lead::findOrFail($requestedLead->route('id'));
        
        $leadResource = new LeadResource($lead);
    
        return response()->json([
            'status' => Response::HTTP_OK,
            'lead' => $leadResource,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeadRequest  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
