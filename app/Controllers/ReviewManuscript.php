<?php

namespace App\Controllers;

class ReviewManuscript extends BaseController
{
    public function index()
    {
        echo "Welcome to the Index Page of Review Manuscript";
    }

    public function ViewAssignments()
    {
        return view('ViewAssignments');
    }

    public function GetDetailAssignment()
    {
        return view('GetDetailAssignment');
    }

    public function AcceptAssignment()
    {
        return view('AcceptAssignment');
    }

    public function RejectAssignment()
    {
        return view('RejectAssignment');
    }

    public function SubmitReview()
    {
        return view('SubmitReview');
    }

}
