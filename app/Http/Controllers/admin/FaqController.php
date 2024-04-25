<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Faq;

class FaqController extends Controller
{
        public function index(){
            return view('admin/faq/list');
        }

        public function add(){
            return view('admin/faq/add');
        }

        public function save(Request $req){
            // echo "<pre>";
            // print_r($req->all());die;
            $faq = new Faq();
            $faq->question = $req->question;
            $faq->answer = $req->answer;
            $faq->save();
        }
}
