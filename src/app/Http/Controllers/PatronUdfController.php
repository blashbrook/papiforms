<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Blashbrook\PAPIForms\App\Models\PatronUdf;

    class PatronUdfController extends Controller
    {
        public function index()
        {
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
