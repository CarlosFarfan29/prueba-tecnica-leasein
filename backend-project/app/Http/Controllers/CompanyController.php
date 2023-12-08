<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Leasing;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        try {
            $leasings = Leasing::with(['company', 'equipment'])->get();

            $getCompany = $leasings->map(function ($leasing) {
                return [
                    'company_name' => $leasing->company->name,
                    'equipment_type' => $leasing->equipment->UA_type,
                    'equipment_mark' => $leasing->equipment->mark,
                    'equipment_processor' => $leasing->equipment->processor,
                    'equipment_generation' => $leasing->equipment->generation,
                    'start_date' => $leasing->start_date->format('d-m-Y'),
                    'end_date' => $leasing->end_date->format('d-m-Y'),
                ];
            });

            return response()->json([
                'results' => $getCompany,
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching data.'], 500);
        }
    }
}
