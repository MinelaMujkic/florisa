<?php

namespace App\Http\Controllers;

use App\Models\Narudzba;
use App\Models\Ponuda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use stdClass;

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

    public function kontakt(){
        return view("korisnicki_view.kontakt");
        }

        public function login(){
             return view("korisnicki_view.login");
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

    public function prikazi()
    {
      $cvijetniAranzman = Ponuda::where([['kategorija_cvijeca', "=", "1"],["status", "=", "1"]])->get();
    // dd("$cvijetniAranzman");
    return view("korisnicki_view/cvijetni_aranzmani", compact("cvijetniAranzman"));
    }   
    public function prikaziAdmin()
    {
      $cvijetniAranzman = Ponuda::where([['kategorija_cvijeca', "=", "1"],["status", "=", "1"]])->get();
    // dd("$cvijetniAranzman");
    return view("admin_view/admin_cvijetni_aranzmani", compact("cvijetniAranzman"));
    }       

    public function prikaziKC()
    {
      $kucnoCvijece = Ponuda::where([['kategorija_cvijeca', "=", "0"],["status", "=", "1"]])->get();
    // dd("$kucnoCvijece");
    return view("korisnicki_view/kucno_cvijece", compact("kucnoCvijece"));
    }  
    
    public function prikaziKCAdmin()
    {
      $kucnoCvijece = Ponuda::where([['kategorija_cvijeca', "=", "0"],["status", "=", "1"]])->get();
    // dd("$kucnoCvijece");
    return view("admin_view/admin_kucno_cvijece", compact("kucnoCvijece"));
    }      


    public function prikaziOdabranuPonudu($id){
        //dd($id);
        $ponuda=Ponuda::where('id', "=", "$id")->get();
        //dd($ponuda);
        return view("korisnicki_view.order", compact("ponuda"));
        // return view("korisnicki_view.order", compact("ponuda"));
    }

    public function prikaziOdabranuPonuduAdmin($id){
        //dd($id);
        $ponuda=Ponuda::where('id', "=", "$id")->get();
        //dd($ponuda);
        return view("admin_view.izmijeni_trenutnu_ponudu", compact("ponuda"));
        // return view("korisnicki_view.order", compact("ponuda"));
    }

    public function pristupiAdminOkruzenju(Request $request)
    {
  
     $email = $request->email;
     $password = $request->password;

     if($email == "admin@admin.com" && $password == "123456789"){
        return view("admin_view.adminHome");
     }else {
        // return  view("korisnicki_view.home") ->with("alert", "Nemate autorizovan pristup.");
        return redirect()->back()->with('alert','Nemate autorizovan pristup.');
    }        
        
    }

    public function storeNarudzba(Request $request){
       
      
            Narudzba::create([
                'ime_narucioca' => $request->ime_narucioca,
                "prezime_narucioca"=>$request->prezime_narucioca,
                "id_ponude"=> $request->id_ponude,
                "ugovorena_cijena_KM"=>$request->ugovorena_cijena_KM,
                'broj_telefona'=>$request->broj_telefona,
                "ulica"=>$request->ulica,
                "grad"=>$request->grad,
                "postanski_broj"=>$request->postanski_broj,
                "kanton"=>$request->kanton,
                "drzava"=>$request->drzava,
                "komentar_napomena"=>$request->komentar_napomena,
                "saglasnost_za_uvjete_koristenja"=>$request->saglasnost_za_uvjete_koristenja,

                
    
            ]);
         return view("korisnicki_view.home");
    }
}
