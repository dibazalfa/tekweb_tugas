<?php

namespace App\Controllers;

class SubmitManuscript extends BaseController
{
    public function index()
    {
        echo "Welcome to the Index Page of Submit Manuscript";
    }

    public function ViewListSubmission()
    {
        return view('ViewListSubmission');
    }

    public function CreateNewSubmission()
    {
        return view('CreateNewSubmission');
    }

    public function EditSubmission()
    {
        return view('EditSubmission');
    }

    public function FinalizeSubmission()
    {
        return view('FinalizeSubmission');
    }
}
