<?php

    namespace Blashbrook\PAPIForms\App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Blashbrook\PAPIForms\App\Models\PatronUdf;


    class PatronUdfController extends Controller
    {



        public function index()
        {
        }

        public static function createSelection()
        {


            $collection = PatronUdf::select('Values')->where('PatronUdfID', 4)->get();
            $string =  $collection[0]['Values'];
            return array_filter(array_map('trim', explode(',', $string)));

        }


        public function store()
        {


        }

        public function show(PatronUdf $patronUdf)
        {

        }

        public function update(PatronUdf $patronUdf)
        {

        }

        public function destroy(PatronUdf $patronUdf)
        {

            $patronUdf->delete();

            return response()->json();
        }
    }
