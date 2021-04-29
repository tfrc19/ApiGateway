<? 

namespace App\Service;

class TraetmentService
{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.treatments.base_uri');
    }
}