<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Resources\Admin\ClientResource;
use App\Models\Client;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('client_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ClientResource(Client::with(['user', 'agents'])->get());
    }

    public function store(StoreClientRequest $request)
    {
        $client = Client::create($request->validated());
        $client->agents()->sync($request->input('agents', []));

        return (new ClientResource($client))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Client $client)
    {
        abort_if(Gate::denies('client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ClientResource($client->load(['user', 'agents']));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->validated());
        $client->agents()->sync($request->input('agents', []));

        return (new ClientResource($client))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Client $client)
    {
        abort_if(Gate::denies('client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
