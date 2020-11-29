<?php

namespace App\Http\Controllers;

use App\Models\Ponuda;
use Illuminate\Http\Request;

class FlorisaController extends Controller
{
    public function home(){
        return view("korisnicki_view.home");
        }

     public function oNama(){
         return view("korisnicki_view.o_nama");
        }

    public function cvijetniAranzmani(){
        return view("korisnicki_view.cvijetni_aranzmani");
         }
    public function kucnoCvijece(){
        return view("korisnicki_view.kucno_cvijece");
         }

    public function blog(){
        return view("korisnicki_view.blog");
        }   
        
    public function unesiPonudu(){
        return view("admin_view.adminUnesiPonudu");
        }  
        
        public function store(Request $request){
        //    dd("$request");
            $path = $this->uploadImage($request);
            Ponuda::create([
                'kategorija_cvijeca' => $request->kategorija_cvijeca,
                'naziv' => $request->naziv,
                "opis"=> $request->opis,
                'slika' => $path,
                "cijena_KM" => $request->cijena_KM,
                "status"=> $request->status
               
    
            ]);
            return view("admin_view.adminUnesiPonudu");
            }

            private function uploadImage(Request $request) {
                if(!$request->hasFile('slika')) {
                    return response()->json(['upload_file_not_found'], 400);
                }
        
                $file = $request->file('slika');
                if(!$file->isValid()) {
                    return response()->json(['invalid_file_upload'], 400);
                }
        
                $path = '/uploads/'.$file->getClientOriginalName();
        
        
                $file->move("uploads", $file->getClientOriginalName());
                return $path;
            }

}
