<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Projecte;
use \App\Imatge_paquet;
use App\Nosaltres;

class AdministraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projectes = Projecte::all();
        return view('admin.projectes.projectes')->with('projectes', $projectes);
    }
    /**
     * Mostra les entrades
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getProjectes()
    {
        $projectes = Projecte::all();
        return view('admin.projectes.projectes')->with('projectes', $projectes);
    }
    /**
     * Mostra info nosaltres
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getNosaltres()
    {
        $nosaltres = Nosaltres::first();
        $nosaltresTranslation = $nosaltres->getTranslations();
        //return $nosaltres;
        //return $nosaltresTranslation['descripcioCurta'];
        return view('admin.nosaltres.nosaltres')->with('editdata', $nosaltres)->with('editdataTranslation', $nosaltresTranslation);
    }
    public function setNosaltres(Request $request)
    {
        //return $request;
        if($request->id != null){
            $nosaltres = Nosaltres::where('id', $request->id)->first();
        }else{
            $nosaltres = new Nosaltres();
        }
        $nosaltres->nom = $request->nom;
        $nosaltres->setTranslation('descripcioCurta', 'ca', $request->descripcioCurta);
        $nosaltres->setTranslation('descripcioLlarga', 'ca', $request->descripcioLlarga);
        $nosaltres->email = $request->email;
        $nosaltres->telefon = $request->telefon;
        $nosaltres->adressa = $request->adressa;
        $nosaltres->paraulesClau = $request->paraulesClau;
        $nosaltres->instagram = $request->instagram;

        $nosaltres->setTranslation('descripcioCurta', 'es', $request->descripcioCurtaES);
        $nosaltres->setTranslation('descripcioLlarga', 'es', $request->descripcioLlargaES);
        $nosaltres->setTranslation('descripcioCurta', 'en', $request->descripcioCurtaEN);
        $nosaltres->setTranslation('descripcioLlarga', 'en', $request->descripcioLlargaEN);
        $nosaltres->save();
        $nosaltresTranslation = $nosaltres->getTranslations();
        return view('admin.nosaltres.nosaltres')->with('editdata', $nosaltres)->with('editdataTranslation', $nosaltresTranslation);
    }
    public function novaProjecte()
    {
        return view('admin.projectes.create');
    }
    public function guardarProjecte(Request $request)
    {
        $request->validate([
            'file1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:458',
            "filemultiple"    => "required|array|min:1|max:15",
            'filemultiple.*' => 'required|mimes:jpg,jpeg,png,bmp|max:458',
            'nom' => 'required|string',
            'descripcioCurta' => 'required|string',
            'descripcioLlarga' => 'required|string',
            'nomFotos' => 'required|string',
            'instagram' => 'required|string',
        ]);
        $projecte = new Projecte();
        $projecte->titol = $request->nom;
        $projecte->setTranslation('descripcioCurta', 'ca', $request->descripcioCurta);
        $projecte->setTranslation('descripcioLlarga', 'ca', $request->descripcioLlarga);
        $projecte->setTranslation('descripcioCurta', 'es', $request->descripcioCurta);
        $projecte->setTranslation('descripcioLlarga', 'es', $request->descripcioLlarga);
        $projecte->setTranslation('descripcioCurta', 'en', $request->descripcioCurta);
        $projecte->setTranslation('descripcioLlarga', 'en', $request->descripcioLlarga);
        $projecte->instagram = $request->instagram;
        $projecte->data = $request->data;
        $projecte->filescolumnes = $request->filescolumnes;
        $imageName = $request->nomFotos.'.'.$request->file1->getClientOriginalExtension();
        $projecte->imatge = $imageName;
        $projecte->nomFotos = $request->nomFotos;
        $request->file1->move(public_path('profile_images'), $imageName);
        $i=0;
        $projecte->save();
        foreach ($request->filemultiple as $key => $imatge){
            $i +=1;
            $imatge_paquet = new Imatge_paquet();
            $paketImageName = $request->nomFotos.$i.'.'.$imatge->getClientOriginalExtension();
            $imatge_paquet->imatge = $paketImageName;
            $imatge_paquet->id_projecte = $projecte->id;
            $imatge_paquet->save();
            $imatge->move(public_path('profile_images'), $paketImageName);
            //return $imatge->getClientOriginalExtension();
        }
        return view('admin.projectes.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrades  $entrades
     * @return \Illuminate\Http\Response
     */
    public function edit($projecte_id)
    {
        $projecte = Projecte::where('id', $projecte_id)->first();
        $imatgePaket = Imatge_paquet::all();
        $projecte->paquetImatge = Imatge_paquet::where('id_projecte', $projecte->id)->get();

        $projecteTranslation = $projecte->getTranslations();
        /*$entrada->nomCA = $entrada->translations->where('locale', 'ca')->first()->nom;
        $entrada->descripcioCA =  $entrada->translations->where('locale', 'ca')->first()->descripcio;
        $entrada->nomES = $entrada->translations->where('locale', 'es')->first()->nom;
        $entrada->descripcioES =  $entrada->translations->where('locale', 'es')->first()->descripcio;
        $entrada->nomEN =  $entrada->translations->where('locale', 'en')->first()->nom;
        $entrada->descripcioEN =  $entrada->translations->where('locale', 'en')->first()->descripcio;
        $entrada->nomFR =  $entrada->translations->where('locale', 'fr')->first()->nom;
        $entrada->descripcioFR =  $entrada->translations->where('locale', 'fr')->first()->descripcio;/*/
        return view('admin.projectes.edit')
            ->with('editdata', $projecte)->with('editdataTranslation', $projecteTranslation);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrades  $entrades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'descripcioCurta' => 'required|string',
            'descripcioLlarga' => 'required|string',
            'instagram' => 'required|string',
            'data' => 'required|date',
        ]);
        $projecte = Projecte::where('id', $request->projecte_id)->first();
        $projecte->titol = $request->nom;
        $projecte->setTranslation('descripcioCurta', 'ca', $request->descripcioCurta);
        $projecte->setTranslation('descripcioLlarga', 'ca', $request->descripcioLlarga);
        $projecte->setTranslation('descripcioCurta', 'es', $request->descripcioCurtaES);
        $projecte->setTranslation('descripcioLlarga', 'es', $request->descripcioLargaES);
        $projecte->setTranslation('descripcioCurta', 'en', $request->descripcioCurtaEN);
        $projecte->setTranslation('descripcioLlarga', 'en', $request->descripcioLargaEN);
        $projecte->instagram = $request->instagram;
        $projecte->data = $request->data;
        $projecte->filescolumnes = $request->filescolumnes;
        $nomImatgePortada = explode( '.', $projecte->imatge )[0];//obting el nom de la imatge
        if($request->selectImagePortada){
            $extencioImatge = $request->selectImagePortada->getClientOriginalExtension();
            $request->selectImagePortada->move(public_path('profile_images'), $nomImatgePortada.'.'.$extencioImatge);
            $projecte->imatge = $nomImatgePortada.'.'.$extencioImatge;
        }
        if($request->filemultiple){
            $i=0;
            //obtinc el nom de l'ultima imatge del projecte
            $nomImatgePaket = Imatge_paquet::where('id_projecte', $request->projecte_id)->OrderBy('imatge','desc')->first();
            if($nomImatgePaket){
                //Si existeix alguna imatge paket extrec el numero del nom de l'ultima imatge
                $i = intval(preg_replace('/[^0-9]+/', '',explode( '.', $nomImatgePaket->imatge )[0]), 10);
            }else{
                //Si no existeix cap imatge paket i iniciarà a 0
                $i = 0;
            }
            foreach ($request->filemultiple as $key => $imatge){
                $i +=1;
                $imatge_paquet = new Imatge_paquet();
                $paketImageName = $nomImatgePortada.$i.'.'.$imatge->getClientOriginalExtension();
                $imatge_paquet->imatge = $paketImageName;
                $imatge_paquet->id_projecte = $projecte->id;
                $imatge_paquet->save();
                $imatge->move(public_path('profile_images'), $paketImageName);
            }
        }
        $projecte->save();
        $projecte->paquetImatge = Imatge_paquet::where('id_projecte', $projecte->id)->get();
        $projecteTranslation = $projecte->getTranslations();
        return view('admin.projectes.edit')
            ->with('editdata', $projecte)->with('editdataTranslation', $projecteTranslation);
    }
    /**
     * Desactiva una entrada.
     *
     * @param  \App\Entrades  $entrades
     * @return \Illuminate\Http\Response
     */
    public function desactiva($id)
    {
        $entrada = Entrades::find($id);
        //TODO desactivar l'entrada
        return $entrada;
    }
    /**
     * Remove imatge
     *
     * @param  \App\Entrades  $entrades
     * @return \Illuminate\Http\Response
     */
    public function eliminaImatge($nomImatge)
    {
        $image_path = public_path('profile_images/').$nomImatge;
            //Borro la imatge
            if (file_exists($image_path)) {
                File::delete($image_path);
            }
        $imatge = Imatge_paquet::where('imatge', $nomImatge)->first();
        $imatge->delete();
        return "suprimit";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrades  $entrades
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        //return $request->id;
        $projecte = Projecte::where('id', $request->id)->first();
        //return = $entrada;
        if($projecte == null){
            $miss = "No existeix el projecte";
            session()->flash('error_message', $miss);
        }else{
            $projecte->delete();
            $miss = "Projecte eliminat";
            session()->flash('success_message', $miss);
        }
        
        return redirect('administra/llistatProjectes');
    }

}
