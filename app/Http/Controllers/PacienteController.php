<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Paciente;
use App\antecedente;
use Carbon\Carbon;
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado_civil = DB::table('estado_civil')->get();
        $nacionalidad= DB::table('nacionalidad')->get();
        $antecedentes=DB::table('antecedentes')->get();
        return view('pacientes.index',compact('estado_civil','nacionalidad','antecedentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$paciente=new Paciente();

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
     $fecha_nac= date("Y/m/d", strtotime($request->fecha_nacimiento));
     $paciente = new Paciente();
  

     $paciente->rut=$request->rut;
     $paciente->nombres=$request->nombres_paciente;
     $paciente->fecha_nac=$fecha_nac;
     $paciente->telefono=$request->telefono;
     $paciente->id_estado_civil=$request->estado_civil;
     $paciente->id_nacionalidad=$request->nacionalidad;
     $paciente->direccion=$request->direccion;
     $paciente->nombre_menor=$request->nombre_menor;
     $paciente->rut_menor=$request->rut_menor;
     $paciente->motivo_consulta=$request->motivo_consulta;
     $paciente->diagnostivo=null;
     $paciente->plan_tratamiento=null;
     $paciente->pronostico=null;
  
     if($paciente->save()){

       
        $antecedente = new Antecedente();


 $antecedente->id_paciente=$paciente->id;
 $antecedente->padre_vida=$request->padre_v;
 $antecedente->enfermedad_padre=$request->enfermedad_padre;
 $antecedente->madre_vida=$request->madre_v;
 $antecedente->enfermedad_madre=$request->enfermedad_madre;
 $antecedente->sufre_enfermedad=$request->sufre_enf;
 $antecedente->cual_enfermedad=$request->cual_enfermedad;
 $antecedente->tratamiento_medico=$request->tratamiento;
 $antecedente->cual_tratamiento=$request->cual_tratamiento;
 $antecedente->medicamento_consume=$request->medicamento_consume;
 $antecedente->alergico_medicamento=$request->alergico;
 $antecedente->cual_medicamento=$request->alergico_medicamento;
 $antecedente->anestesia=$request->anestesia;
 $antecedente->antibiotico=$request->antibiotico;
 $antecedente->cual_antibiotico=$request->cual_antibiotico;
 $antecedente->problema_cardiaco=$request->problema_cardiaco;
 $antecedente->cicatrizacion=$request->cicatrizacion?$request->cicatrizacion:0;
 $antecedente->sangrado=$request->sangra_mucho;
 $antecedente->diabetico=$request->diabetico;
 $antecedente->diabetico_controlado=$request->control_diabetes;
 $antecedente->hipertenso=$request->hipertenso;
 $antecedente->hipertenso_controlado=$request->hipertenso_controlado;
 $antecedente->aspirina=$request->aspirina;
 $antecedente->cual_aspirina=$request->cual_aspirina;
 $antecedente->hepatitis=$request->hepatitis;
 $antecedente->sifilis=$request->sifilis;
 $antecedente->gonorrea=$request->gonorrea;
 $antecedente->hiv=$request->hiv;
 $antecedente->asma=$request->asma;
 $antecedente->chaga=$request->chaga;
 $antecedente->infectocontagiosa=$request->infectocontagiosa;
 $antecedente->fue_operado=$request->operacion;
 $antecedente->cual_operacion=$request->especifica_operacion;
 $antecedente->problema_respiratorio=$request->p_respiratorio;
 $antecedente->fuma=$request->fuma;
 $antecedente->embarazo=$request->embarazo;
 $antecedente->meses=$request->mes_gestacion;

 $antecedente->save();

 //return view('/paciente/edit/'.$paciente->id);
 return redirect('/paciente/'.$paciente->id.'/edit');

     }
      return redirect('/paciente/'.$paciente->id.'/edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente= Paciente::findOrFail($id);

        $dent =array(
        array(
            array('id' =>18 ,'img'=>'18_1','number'=>18 ),
            array('id' =>17 ,'img'=>'17_1','number'=>17 ),
            array('id' =>16 ,'img'=>'16_1','number'=>16 ),
            array('id' =>15 ,'img'=>'15_1','number'=>15 ),
            array('id' =>14 ,'img'=>'14_1','number'=>14 ),
            array('id' =>13 ,'img'=>'13_1','number'=>13 ),
            array('id' =>12 ,'img'=>'12_1','number'=>12 ),
            array('id' =>11 ,'img'=>'11_1','number'=>11 ),
            array('id' =>0 ,'img'=>'' ),
            array('id' =>21 ,'img'=>'21_1','number'=>21 ),
            array('id' =>22 ,'img'=>'22_1','number'=>22 ),
            array('id' =>23 ,'img'=>'23_1','number'=>23 ),
            array('id' =>24 ,'img'=>'24_1','number'=>24 ),
            array('id' =>25 ,'img'=>'25_1','number'=>25 ),
            array('id' =>26 ,'img'=>'26_1','number'=>26 ),
            array('id' =>27 ,'img'=>'27_1','number'=>27 ),
            array('id' =>28 ,'img'=>'28_1','number'=>28 )
        ),
        array(
            array('id' =>182 ,'img'=>'18_2','number'=>18),
            array('id' =>172 ,'img'=>'17_2','number'=>17),
            array('id' =>162 ,'img'=>'16_2','number'=>16),
            array('id' =>152 ,'img'=>'15_2','number'=>15),
            array('id' =>142 ,'img'=>'14_2','number'=>14),
            array('id' =>132 ,'img'=>'13_2','number'=>13),
            array('id' =>122 ,'img'=>'12_2','number'=>12),
            array('id' =>112 ,'img'=>'11_2','number'=>11),
            array('id' =>0 ,'img'=>'' ),
            array('id' =>212 ,'img'=>'21_2','number'=> 21),           
            array('id' =>222 ,'img'=>'22_2','number'=> 22),
            array('id' =>232 ,'img'=>'23_2','number'=> 23),
            array('id' =>242 ,'img'=>'24_2','number'=> 24),
            array('id' =>252 ,'img'=>'25_2','number'=> 25),
            array('id' =>262 ,'img'=>'26_2','number'=> 26),
            array('id' =>272 ,'img'=>'27_2','number'=> 27),
            array('id' =>282 ,'img'=>'28_2','number'=> 28)
        ),

        array(
            array('id' =>48 ,'img'=>'48_1' ,'number'=>48),
            array('id' =>47 ,'img'=>'47_1' ,'number'=>47),
            array('id' =>46 ,'img'=>'46_1' ,'number'=>46),
            array('id' =>45 ,'img'=>'45_1' ,'number'=>45),
            array('id' =>44 ,'img'=>'44_1' ,'number'=>44),
            array('id' =>43 ,'img'=>'43_1' ,'number'=>43),
          
            array('id' =>42 ,'img'=>'42_1' ,'number'=>42),
            array('id' =>41 ,'img'=>'41_1' ,'number'=>41),
            array('id' =>0 ,'img'=>'' ),
            array('id' =>31 ,'img'=>'31_1' ,'number'=>31),
            array('id' =>32 ,'img'=>'32_1' ,'number'=>32),
            array('id' =>33 ,'img'=>'33_1' ,'number'=>33),
            array('id' =>34 ,'img'=>'34_1' ,'number'=>34),
            array('id' =>35 ,'img'=>'35_1' ,'number'=>35),
            array('id' =>36 ,'img'=>'36_1' ,'number'=>36),
            array('id' =>37 ,'img'=>'37_1' ,'number'=>37),
            array('id' =>38 ,'img'=>'38_1' ,'number'=>38)
          
        ),
         array(
            array('id' =>482 ,'img'=>'48_2' ,'number'=>48),
            array('id' =>472 ,'img'=>'47_2' ,'number'=>47),
            array('id' =>462 ,'img'=>'46_2' ,'number'=>46),
            array('id' =>452 ,'img'=>'45_2' ,'number'=>45),
            array('id' =>442 ,'img'=>'44_2' ,'number'=>44),
            array('id' =>432 ,'img'=>'43_2' ,'number'=>43),
          
            array('id' =>422 ,'img'=>'42_2' ,'number'=>42),
            array('id' =>412 ,'img'=>'41_2' ,'number'=>41),
            array('id' =>0 ,'img'=>'' ),
            array('id' =>312 ,'img'=>'31_2' ,'number'=>31),
            array('id' =>322 ,'img'=>'32_2' ,'number'=>32),
            array('id' =>332 ,'img'=>'33_2' ,'number'=>33),
            array('id' =>342 ,'img'=>'34_2' ,'number'=>34),
            array('id' =>352 ,'img'=>'35_2' ,'number'=>35),
            array('id' =>362 ,'img'=>'36_2' ,'number'=>36),
            array('id' =>372 ,'img'=>'37_2' ,'number'=>37),
            array('id' =>382 ,'img'=>'38_2' ,'number'=>38)
          
        )
    );

       $lineal=[];
       foreach ($dent as $key => $est) {
        foreach ($est as $key => $value) {
            $lineal[$value['id']]=$value;
        }
         
       }
      
      
       return view('pacientes.odondograma',compact('paciente','dent','lineal'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado_civil = DB::table('estado_civil')->get();
        $nacionalidad= DB::table('nacionalidad')->get();
        $antecedentes=DB::table('antecedentes')->get();
        $paciente= Paciente::findOrFail($id);

       $edad=Carbon::createFromDate($paciente->fecha_nac)->age;
        return view('pacientes.edit',compact('estado_civil','nacionalidad','antecedentes','paciente','edad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $fecha_nac= date("Y/m/d", strtotime($request->fecha_nacimiento));
     $paciente = Paciente::findOrFail($id);
   
     $paciente->rut=$request->rut;
     $paciente->nombres=$request->nombres_paciente;
     $paciente->fecha_nac=$fecha_nac;
     $paciente->telefono=$request->telefono;
     $paciente->id_estado_civil=$request->estado_civil;
     $paciente->id_nacionalidad=$request->nacionalidad;
     $paciente->direccion=$request->direccion;
     $paciente->nombre_menor=$request->nombre_menor;
     $paciente->rut_menor=$request->rut_menor;
     $paciente->motivo_consulta=$request->motivo_consulta;
     $paciente->diagnostivo=null;
     $paciente->plan_tratamiento=null;
     $paciente->pronostico=null;
  
     if($paciente->save()){

       
$antecedente = Antecedente::where('id_paciente','=',$paciente->id)->first();



 $antecedente->padre_vida=$request->padre_v;
 $antecedente->enfermedad_padre=$request->enfermedad_padre;
 $antecedente->madre_vida=$request->madre_v;
 $antecedente->enfermedad_madre=$request->enfermedad_madre;
 $antecedente->sufre_enfermedad=$request->sufre_enf;
 $antecedente->cual_enfermedad=$request->cual_enfermedad;
 $antecedente->tratamiento_medico=$request->tratamiento;
 $antecedente->cual_tratamiento=$request->cual_tratamiento;
 $antecedente->medicamento_consume=$request->medicamento_consume;
 $antecedente->alergico_medicamento=$request->alergico;
 $antecedente->cual_medicamento=$request->alergico_medicamento;
 $antecedente->anestesia=$request->anestesia;
 $antecedente->antibiotico=$request->antibiotico;
 $antecedente->cual_antibiotico=$request->cual_antibiotico;
 $antecedente->problema_cardiaco=$request->problema_cardiaco;
 $antecedente->cicatrizacion=$request->cicatrizacion?$request->cicatrizacion:0;
 $antecedente->sangrado=$request->sangra_mucho;
 $antecedente->diabetico=$request->diabetico;
 $antecedente->diabetico_controlado=$request->control_diabetes;
 $antecedente->hipertenso=$request->hipertenso;
 $antecedente->hipertenso_controlado=$request->hipertenso_controlado;
 $antecedente->aspirina=$request->aspirina;
 $antecedente->cual_aspirina=$request->cual_aspirina;
 $antecedente->hepatitis=$request->hepatitis;
 $antecedente->sifilis=$request->sifilis;
 $antecedente->gonorrea=$request->gonorrea;
 $antecedente->hiv=$request->hiv;
 $antecedente->asma=$request->asma;
 $antecedente->chaga=$request->chaga;
 $antecedente->infectocontagiosa=$request->infectocontagiosa;
 $antecedente->fue_operado=$request->operacion;
 $antecedente->cual_operacion=$request->especifica_operacion;
 $antecedente->problema_respiratorio=$request->p_respiratorio;
 $antecedente->fuma=$request->fuma;
 $antecedente->embarazo=$request->embarazo;
 $antecedente->meses=$request->mes_gestacion;

 $antecedente->save();

 //return view('/paciente/edit/'.$paciente->id);
  }
 return redirect('/paciente/'.$paciente->id.'/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




}
