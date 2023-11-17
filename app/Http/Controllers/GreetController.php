<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * @OA\Info(
 *     description="Contoh API doc menggunakan OpenAPI/Swagger",
 *     version="0.0.1",
 *     title="Contoh API documentation",
 *     termsOfService="http://swagger.io/terms/",
 *     @OA\Contact(
 *         email="choirudin.emcha@gmail.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */
class GreetController extends Controller
{
    /**
 * @OA\Get(
 *     path="/api/greet",
 *     tags={"greeting"},
 *     summary="Returns a Sample API response",
 *     description="A sample greeting to test out the API",
 *     operationId="greet",
 *     @OA\Parameter(
 *         name="firstname",
 *         description="First name",
 *         required=true,
 *         in="query",
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Parameter(
 *         name="lastname",
 *         description="Last name",
 *         required=true,
 *         in="query",
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Response(
 *         response="default",
 *         description="Successful operation"
 *     )
 * )
 */
    public function greet(Request $request)
{
    $userData = $request->only(['firstname', 'lastname']);

    if (empty($userData['firstname']) && empty($userData['lastname'])) {
        return new \Exception('Missing data', 404);
    }

    return 'Halo ' . $userData['firstname'] . ' ' . $userData['lastname'];
}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
