<?php 

namespace App\Services;
use App\Traits\ConsumeExternalService;
class MedicationPlanService
{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('service.MedicationsPlan.base_uri');
    }
    /*public function obtainUsers()
    {
        return $this->performRequest('GET','users');
    }*/
    /** Obtener el plan de medicacion desde el microservicio MedicationPlan */

    public function obtainMedicationPlanByUser($user)
    {
        
        return $valor= $this->performRequest('GET',"medicationPlan/{$user}");
        
    }
}