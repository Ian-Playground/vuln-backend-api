<?php

namespace App\Http\Controllers;

use App\Models\OwaspCategory;
use Illuminate\Http\JsonResponse;

class OwaspCategoryController extends Controller
{
    /**
     * Display a listing of the OWASP categories.
     * 
     * @OA\Get(
     *     path="/api/v1/owasp-categories",
     *     summary="Get all OWASP categories",
     *     tags={"OWASP Categories"},
     *     security={{"bearerAuth": {}}},
     *     @OA\Response(
     *         response=200,
     *         description="List of OWASP categories",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/OwaspCategory")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated"
     *     )
     * )
     */
    public function index(): JsonResponse
    {
        return response()->json(OwaspCategory::all());
    }

    /**
     * Display the specified OWASP category.
     * 
     * @OA\Get(
     *     path="/api/v1/owasp-categories/{id}",
     *     summary="Get a specific OWASP category",
     *     tags={"OWASP Categories"},
     *     security={{"bearerAuth": {}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the OWASP category",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OWASP category details",
     *         @OA\JsonContent(ref="#/components/schemas/OwaspCategory")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="OWASP category not found"
     *     )
     * )
     */
    public function show(OwaspCategory $owaspCategory): JsonResponse
    {
        return response()->json($owaspCategory);
    }
}
