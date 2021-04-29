<?php 

namespace App\Services;
use App\Traits\ConsumeExternalService;
class UserService
{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('service.users.base_uri');
    }
    public function obtainUsers()
    {
        return $this->performRequest('GET','users');
    }

    public function obtainUsersById($id)
    {
        $valor= $this->performRequest('GET',"user/{$id}");
        return $valor;
    }
}