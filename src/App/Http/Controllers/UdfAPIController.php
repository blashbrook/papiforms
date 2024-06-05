<?php

    namespace Blashbrook\PAPIForms\App\Http\Controllers;
    use Blashbrook\PAPIClient\Clients\PAPIClient;
    use Illuminate\Routing\Controller;

    class UdfAPIController extends Controller
    {
        public static function index()
        {

            $response = PAPIClient::publicRequest('GET','patronudfs');
            $body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            $udfs = $body['PatronUdfConfigsRows'];
            $i = 0;
            while($i < sizeOf($udfs)) {
                if ($udfs[$i]['Label'] === 'School') {
                    $values = $udfs[$i]['Values'];
                }
                $i++;
            }
            $schools = explode(',', $values);
            $schools = array_diff($schools,['None']);
            asort($schools);
            array_unshift($schools, 'None');
            print_r($schools);
        }
    }
