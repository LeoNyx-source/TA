<?php

namespace App\Services;

use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\Log;

class FirebaseService
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    /**
     * Mengambil data parkir mentah dari Firebase untuk area tertentu.
     *
     * @param string $areaName (Contoh: "Area_A", "Area_B")
     * @return array|null
     */
    public function getParkingData(string $areaName): ?array
    {
        try {
            // Path lengkap di Firebase Realtime Database
            $path = 'Parkir/' . $areaName;

            $reference = $this->database->getReference($path);
            $snapshot = $reference->getSnapshot();

            if ($snapshot->exists()) {
                return $snapshot->getValue();
            }

            return null; // Area tidak ditemukan

        } catch (\Exception $e) {
            // Sebaiknya log error-nya
            Log::error('Firebase connection error: ' . $e->getMessage());
            return null;
        }
    }
}
