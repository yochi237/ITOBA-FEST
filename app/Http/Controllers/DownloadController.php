<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controllers;
use Response;

class DownloadController extends Controller
{ 
    public function getDownload($file){
         $file=base_path("../")."/file/".$file.".pdf";
        return Response::download($file);
	}
	public function getInfoTransportasi(){
         $file=base_path("../")."/file/infoTransportasi.pdf";
        return Response::download($file);
	}
	public function getRundownAcara(){
         $file=base_path("../")."/file/rundownAcara.pdf";
        return Response::download($file);
	}
	public function getInfoPenginapan(){
         $file=base_path("../")."/file/infoPenginapan.pdf";
        return Response::download($file);
	}
	public function getFinalisBusiness(){
         $file=base_path("../")."/file/finalisBusinessPlan.pdf";
        return Response::download($file);
	}
	public function getFinalisRobotic(){
         $file=base_path("../")."/file/pesertaRobotic.pdf";
        return Response::download($file);
	}
	public function getFinalisSecurity(){
         $file=base_path("../")."/file/finalisSecurity.pdf";
        return Response::download($file);
	}
	public function getFinalisDesign(){
         $file=base_path("../")."/file/finalisDesign.pdf";
        return Response::download($file);
	}
	public function getFinalisProgramming(){
         $file=base_path("../")."/file/finalisProgramming.pdf";
        return Response::download($file);
	}
	
    
}
