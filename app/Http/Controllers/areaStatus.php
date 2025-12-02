<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirebaseService;
use App\Services\ParkingLogicService;
use Illuminate\Http\JsonResponse;

class areaStatus extends Controller
{
    protected $firebaseService;
    protected $parkingLogicService;

    // Gunakan dependency injection untuk 'memasukkan' service kita
    public function __construct(FirebaseService $firebaseService, ParkingLogicService $parkingLogicService)
    {
        $this->firebaseService = $firebaseService;
        $this->parkingLogicService = $parkingLogicService;
    }

    /**
     * Handle permintaan untuk mendapatkan status area parkir.
     *
     * @param string $areaName (Contoh: "Area_A")
     * @return JsonResponse
     */

    /**
     * @OA\Get(
     * path="/status/{areaName}",
     * summary="Dapatkan status slot parkir per area",
     * tags={"Parkir"},
     * @OA\Parameter(
     * name="areaName",
     * in="path",
     * required=true,
     * description="Nama area (Contoh: Area_A, Area_B, Area_C)",
     * @OA\Schema(type="string")
     * ),
     * @OA\Response(
     * response=200,
     * description="Operasi sukses. Mengembalikan status slot.",
     * @OA\JsonContent(
     * type="object",
     * example={
     * "Area_A": {
     * "S1": {"status_slot": "Kosong"},
     * "S2": {"status_slot": "Terisi"}
     * }
     * }
     * )
     * ),
     * @OA\Response(
     * response=404,
     * description="Area tidak ditemukan",
     * @OA\JsonContent(
     * type="object",
     * example={"error": "Area not found or Firebase error"}
     * )
     * )
     * )
     */
    public function __invoke(string $areaName): JsonResponse
    {
        // 1. Ambil data mentah dari Firebase
        $rawData = $this->firebaseService->getParkingData($areaName);

        if (!$rawData) {
            return response()->json(['error' => 'Area not found or Firebase error'], 404);
        }

        $processedData = [];

        // 2. Loop setiap slot (S1, S2, ...)
        foreach ($rawData as $slotName => $sensorData) {

            // 3. Terapkan logika untuk menentukan status
            $status = $this->parkingLogicService->calculateSlotStatus($sensorData);

            // 4. Format output sesuai keinginan frontend
            $processedData[$slotName] = [
                'status_slot' => $status
            ];
        }

        // 5. Kembalikan sebagai JSON
        return response()->json([
            $areaName => $processedData
        ]);
    }
}
