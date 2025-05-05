<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="OwaspCategory",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="code", type="string", example="A01:2021"),
 *     @OA\Property(property="name", type="string", example="Broken Access Control"),
 *     @OA\Property(property="description", type="string", example="Access control enforces policy such that users cannot act outside of their intended permissions."),
 *     @OA\Property(property="version", type="string", example="2021"),
 *     @OA\Property(property="is_active", type="boolean", example=true),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class OwaspCategorySchema {}
