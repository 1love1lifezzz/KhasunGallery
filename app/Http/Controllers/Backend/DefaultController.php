<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Library\MainFunction;

use Input;

class DefaultController extends Controller
{
    public function __construct()
    {
    }

    // ------------------------------------ Show All List Page
    public function index()
    {
        return view('backend.default.update');
    }
    // ------------------------------------ View Add Page
    public function create()
    {
    }
    // ------------------------------------ Record Data
    public function store(Request $request)
    {
    }
    // ------------------------------------ Show Data : ID
    public function show($id)
    {

    }
    // ------------------------------------ View Update Page
    public function edit($id)
    {
    }
    // ------------------------------------ Record Update Data
    public function update(Request $request,$id)
    {
    }
    // ------------------------------------ Delete Data
    public function destroy($id)
    {
    }
}
