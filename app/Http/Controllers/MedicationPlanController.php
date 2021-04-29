<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Services\MedicationPlanService;
use App\Services\UserService;

class MedicationPlanController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $medicationPlanService;
    public $userService;

    public function __construct(MedicationPlanService $medicationPlanService,UserService $userService)
    {
        //
        $this->medicationPlanService = $medicationPlanService;
        $this->userService = $userService;
    }

    public function index(){
        return "Plan de medicaciones";
    }
    public function show($user){
      
        /*Service MedicationPlan */    
       // $datos= $this->successResponse($this->medicationPlanService->obtainMedicationPlanByUser($user));
        $medicationPlan= $this->medicationPlanService->obtainMedicationPlanByUser($user);
        //$array = json_encode(json_decode(json_encode($datos), true));
        $medicationPlan= json_decode($medicationPlan,true);

        $output = array();

        foreach($medicationPlan as $key=>$mp)
        {
             $temp = array();
             $temp['mp']=$medicationPlan[$key];
             $data= $this->userService->obtainUsersById($mp['user_id']);
             $data=json_decode($data,true);  
             $temp['user']=$data;
            $output[]=$temp;
        }
        return $output;

        //return $valor[0]['user_id'];
        
        
        
    }

    //
}
