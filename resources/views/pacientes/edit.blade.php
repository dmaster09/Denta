@extends('layouts.master')

@section('content')
 <div class="container-fluid">


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header card-header-icon card-header-primary">
                  <div class="btn card-icon">
                      <i class="material-icons">how_to_reg</i>
                    </div>
                     <div class="btn card-icon" title="Cita">
                      <i class="material-icons">event</i>
                    </div>
                    <div class="btn card-icon" title="Odontodoigrama">
                      <a href="{{url('paciente/'.$paciente->id)}}" style="color: #FFFFFF">
                      <i class="material-icons"> <svg aria-hidden="true" style="width: 18px;" focusable="false" data-prefix="fas" data-icon="tooth" class="svg-inline--fa fa-tooth fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M443.98 96.25c-11.01-45.22-47.11-82.06-92.01-93.72-32.19-8.36-63 5.1-89.14 24.33-3.25 2.39-6.96 3.73-10.5 5.48l28.32 18.21c7.42 4.77 9.58 14.67 4.8 22.11-4.46 6.95-14.27 9.86-22.11 4.8L162.83 12.84c-20.7-10.85-43.38-16.4-66.81-10.31-44.9 11.67-81 48.5-92.01 93.72-10.13 41.62-.42 80.81 21.5 110.43 23.36 31.57 32.68 68.66 36.29 107.35 4.4 47.16 10.33 94.16 20.94 140.32l7.8 33.95c3.19 13.87 15.49 23.7 29.67 23.7 13.97 0 26.15-9.55 29.54-23.16l34.47-138.42c4.56-18.32 20.96-31.16 39.76-31.16s35.2 12.85 39.76 31.16l34.47 138.42c3.39 13.61 15.57 23.16 29.54 23.16 14.18 0 26.48-9.83 29.67-23.7l7.8-33.95c10.61-46.15 16.53-93.16 20.94-140.32 3.61-38.7 12.93-75.78 36.29-107.35 21.95-29.61 31.66-68.8 21.53-110.43z"></path></svg></i>
                    </div>
                  </a>

                     

                  <h4 class="card-title"></h4>
               
                </div>
                <div class="card-body">
                  <form action="{{action('PacienteController@update',$paciente->id)}}" method="POST" enctype="multipart/form-data" id="FrVenue" novalidate="">
                 <input type="hidden" name="_method" value="PUT">
              
                     {{ csrf_field() }}
                 
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre y Apellido</label>
                          <input type="text" name="nombres_paciente" class="form-control text-uppercase" value="{{$paciente->nombres}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fecha de Nacimiento</label>
                          <input type="Date"  name="fecha_nacimiento" class="form-control" value="{{$paciente->fecha_nac}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Edad</label>
                          <input type="text" class="form-control" disabled="" value="{{$edad}} años">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Teléfono</label>
                        <input type="text" class="form-control" name="telefono"  minlength="9" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="{{$paciente->telefono}}">
                      </div>
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Estado Civil</label>
                       <select  class="form-control selectpicker"name="estado_civil" id="estado_civil" data-style="btn btn-link" >
                        @foreach($estado_civil as $civil)
                        <option value="{{$civil->id}}">{{$civil->name}}</option>
                        @endforeach
                         
                       </select>
                       <script type="text/javascript">
                         $('#estado_civil').val('{{$paciente->id_estado_civil}}');
                       </script>
                      </div>
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Nacionalidad</label>
                        <select class="form-control" name="nacionalidad" id="id_nacionalidad">
                        @foreach($nacionalidad as $nac)
                        <option value="{{$nac->id}}">{{$nac->name}}</option>
                        @endforeach
                         
                       </select>

                       <script type="text/javascript">
                         $('#nacionalidad').val('{{$paciente->id_nacionalidad}}');
                       </script>
                      </div>
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Rut</label>
                        <input type="text" class="rut form-control" name="rut" id="rut_paciente" value="{{$paciente->rut}}">
                      </div>
                      <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">Direccion</label>
                        <input type="text" name="direccion" class="form-control" value="{{$paciente->direccion}}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4" style="margin-top:10px;">
                        <label class="bmd-label-floating">Nombre Del Representante del Menor</label>
                        <input type="text" name="nombre_menor" class="form-control text-uppercase" value="{{$paciente->nombre_menor}}">
                      </div>
                       <div class="col-md-4" style="margin-top:10px;">
                        <label class="bmd-label-floating">Rut menor</label>
                        <input type="text" name="rut_menor" id="rut_menor" class="rut form-control text-uppercase" value="{{$paciente->rut_menor}}">
                      </div>
                       <div class="col-md-4" style="margin-top:10px;">
                        <label class="bmd-label-floating">Motivo de Consulta</label>
                        <input type="text" name="motivo_consulta" class="form-control text-uppercase" value="{{$paciente->motivo_consulta}}">
                      </div>
                    </div>

</div>
<br>

                <div class="card-header-primary">
                  <h5 class="card-title">Antecedentes Del Paciente, <small>Este Cuestionario Tiene El Tenor De Una "Declaracion Jurada"</small></h5>
                </div>
                <div class="card-body" >  
                <div class="row">
                  <div class="col-md-12">
                   <!--items1-->
                  <div class="row">
                    
                   <div class="col-md-6">
                    <div class="row">
                     <div class="col-md-12">

                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Padre con Vida?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="padre_v" id="inlineRadio1"   value="1" onclick="vist('padre_v','enfermedad_padre',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="padre_v" id="inlineRadio2" value="0" onclick="vist('padre_v','enfermedad_padre',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>

                    </div>
                    </div>                    
                    </div> 
                  </div>

                     <div class="row" style="display: none;" id='enfermedad_padre'>         
                    <div class="col-md-12"   style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Padece o Padecio Alguna Enfermedad?</label>
                        <input type="text" name="enfermedad_padre"  id="detalle_enfermedad_padre" class="form-control">
                    </div>
                  </div>
                    <!------------------------------->

                    <div class="row">
                    <div class="col-md-12">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Madre con Vida?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="madre_v" id="inlineRadio1" value="1" onclick="vist('madre_v','enfermedad_madre',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="madre_v" id="inlineRadio2" value="0" onclick="vist('madre_v','enfermedad_madre',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>


                    <div class="row" id="enfermedad_madre" style="display: none;">
                     <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Padece  o Padecio Alguna Enfermedad?</label>
                        <input type="text" name="enfermedad_madre" id="detalle_enfermedad_madre" value="{{$paciente->antecedente->enfermedad_madre}}" class="form-control">
                      </div>
                    </div>




                    <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Sufre Alguna Enfermedad?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="sufre_enf" id="inlineRadio1" value="1" onclick="vist(null,'sufre_enfermedad',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sufre_enf" id="inlineRadio2" value="0" onclick="vist(null,'sufre_enfermedad',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div> 
                  </div>

                  <div class="row" id="sufre_enfermedad" style="display: none;">
                  <div class="col-md-12">
                        <label class="bmd-label-floating">¿Cual?</label>
                        <input type="text" name="cual_enfermedad" value="{{$paciente->antecedente->cual_enfermedad}}" id="detalle_sufre_enfermedad" class="form-control">
                  </div>
                </div>


                  <div class="row">
                  <div class="col-md-12" >
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Tiene Algun Tratamiento Médico?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="tratamiento" id="inlineRadio1" value="1" onclick="vist(null,'tratamiento',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="tratamiento" id="inlineRadio2" value="0" onclick="vist(null,'tratamiento',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>  
                    </div> 
                      
                      <div class="row" id="tratamiento" style="display: none;">
                      <div class="col-md-12" >
                        <label class="bmd-label-floating">¿Cual?</label>
                        <input type="text" name="cual_tratamiento" id="detalle_tratamiento" value="{{$paciente->antecedente->cual_tratamiento}}" class="form-control">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Que Medicamentos Consume Habitualmente?</label>
                        <input type="text" name="medicamentos_consume" value="{{$paciente->antecedente->medicamentos_consume}}" class="form-control">
                      </div>
                    </div>


                     <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Es Alergico Algun Medicamento?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="alergico" id="inlineRadio1" value="1" onclick="vist(null,'cual_alergico',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="alergico" id="inlineRadio2" value="0" onclick="vist(null,'cual_alergico',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>
                    <div class="row" id="cual_alergico" style="display: none;">
                      <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Cual?</label>
                        <input type="text" name="alergico_medicamento" id="detalle_alergico_tratamiento"  value="{{$paciente->antecedente->cual_medicamento}}" class="form-control">
                      </div>
                    </div>

                      <div class="row">
                      <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Anestesia?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="anestesia" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="anestesia" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>

                       <div class="row">
                      <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Antibíotico?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="antibiotico" id="inlineRadio1" value="1" onclick="vist(null,'cual_antibiotico',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="antibiotico" id="inlineRadio2" value="0" onclick="vist(null,'cual_antibiotico',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>
                   <div class="row" id="cual_antibiotico"  style="display: none;">
                   <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Cual?</label>
                        <input type="text" name="cual_antibiotico" id="detalle_cual_antibiotico"  value="{{$paciente->antecedente->cual_antibiotico}}"  class="form-control">
                      </div>
                    </div>


                 <!--  <div class="row">
                   <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Sufre Algún Problema Cardiaco?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="problema_cardiaco" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="problema_cardiaco" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div> -->
                   <div class="row">
                   <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Sufre Algún Problema Cardiaco?</label>
                        <input type="text" name="problema_cardiaco"  value="{{$paciente->antecedente->problema_cardiaco}}" class="form-control">
                   </div>
                 </div>

               </div>
                    <!--end items1-->

                     <!--items2-->
                     <div class="col-md-6">
                    <div class="row">                       
                    

                    <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Tiene Buena Cicatrizacion?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="ciatrizacion" id="inlineRadio1" value="1" onclick="vist(null,'sangra_mucho',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="ciatrizacion" id="inlineRadio2" value="0" onclick="vist(null,'sangra_mucho',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>
                     <div class="row" id="sangra_mucho" style="display: none;">
                     <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Sangra Mucho?</label>
                        <input type="text" name="sangra_mucho"  id="detalle_sangra_mucho" class="form-control" value="{{$paciente->antecedente->sangrado}}">
                      </div>
                    </div>


                    <!-------------------------------------------------------->


                    <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Es Diabetico?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="diabetico" id="inlineRadio1" value="1" onclick="vist(null,'control_diabetes',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="diabetico" id="inlineRadio2" value="0" onclick="vist(null,'control_diabetes',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>

                  <div class="row" id="control_diabetes" style="display: none;">
                  <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Esta Controlado?</label>
                        <input type="text" name="control_diabetes"  value="{{$paciente->antecedente->diabetico_controlado}}" id="detalle_control_diabetes" class="form-control">
                   </div>
                 </div>

                 <div class="row">
                 <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Es Hipertenso?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="hipertenso" id="inlineRadio1" value="1" onclick="vist(null,'hipertenso_control',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hipertenso" id="inlineRadio2" value="0" onclick="vist(null,'hipertenso_control',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>
                  <div class="row" id="hipertenso_control" style="display: none;">
                     <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Esta Controlado?</label>
                        <input type="text" name="hipertenso_control" value="{{$paciente->antecedente->hipertenso_controlado}}" id="detalle_hipertenso_control" class="form-control">
                      </div>
                  </div>
                  <!-------------------------------------------------------->
                 
                  <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Toma Aspirina y/o Anticuagulante?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="aspirina" id="inlineRadio1" value="1" onclick="vist(null,'cual_aspirina',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="aspirina" id="inlineRadio2" value="0" onclick="vist(null,'cual_aspirina',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>

                      <div class="row" id="cual_aspirina" style="display: none;">
                      <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Cual?</label>
                        <input type="text" name="cual_aspirina" id="detalle_cual_aspirina" value="{{$paciente->antecedente->cual_aspirina}}" class="form-control">
                      </div>
                    </div>
                    <!----------------------------------------------------------->

                    <div class="row">
                    <div class="col-md-6" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Hepatitis?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="hepatitis" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hepatitis" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  

                
                      <div class="col-md-6" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Sifilis?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="sifilis" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sifilis" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>


                  <div class="row">
                   <div class="col-md-6" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Gonorrea?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="gonorrea" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gonorrea" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>

                    <div class="col-md-6" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿HIV?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="hiv" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="hiv" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>
                   <div class="row">
                   <div class="col-md-6" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Asma?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="asma" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="asma" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>

                    <div class="col-md-6" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Chaga?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="chaga" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="chaga" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Tiene Alguna Enfermedad Infectocontagiosa?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="infectocontagiosa" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="infectocontagiosa" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Fue Operado Alguna Vez?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="operacion" id="inlineRadio1" value="1" onclick="vist(null,'especifica_operacion',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="operacion" id="inlineRadio2" value="0" onclick="vist(null,'especifica_operacion',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>


                      <div class="row" id="especifica_operacion" style="display: none;">
                     <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">Especifique</label>
                        <input type="text" name="especifica_operacion" value="{{$paciente->antecedente->cual_operacion}}" id="detalle_especifica_operacion" class="form-control">
                      </div> 
                    </div>

                    <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Tiene Algun Problema Respiratorio?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="p_respiratorio" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="p_respiratorio" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>
                  <div class="row">
                    
                      <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Fuma?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="fuma" id="inlineRadio1" value="1"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="fuma" id="inlineRadio2" value="0"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div>
                  </div>




                  <div class="row">
                   <div class="col-md-12" style="margin-top:10px;">
                    <div class="checkbox" >
                    <label class="checkbox-inline">¿Esta Embarazada?</label>
                     <div class="pull-right">
                       <div class="form-check form-check-radio form-check-inline">
                       <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="embarazo" id="inlineRadio1" value="1" onclick="vist(null,'mes_gestacion',1)"> SI
                          <span class="circle">
                           <span class="check"></span>
                         </span>
                        </label>
                       </div>
                        <div class="form-check form-check-radio form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="embarazo" id="inlineRadio2" value="0" onclick="vist(null,'mes_gestacion',0)"> NO
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                          </label>
                        </div>
                    </div>
                    </div>                    
                    </div> 
                  </div>

                   <div class="row" id="mes_gestacion" style="display: none;">                    
                     <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">Meses de Gestacion</label>
                        <input type="text" name="mes_gestacion" id="detalle_mes_gestacion" value="{{$paciente->antecedente->Meses}}" class="form-control" >
                      </div>
                    </div>











                    </div>

                  </div>
                   <!--end items2-->
                    
                  </div><!--emn col-md-12-->
                 
                </div> <!--end-row-->              



                </div>
            
            </div>

<button type="submit" class="btn btn-primary pull-right" >Guardar</button> 
</form>
</div>

@endsection
@section('scripts')
<script type="text/javascript">

$('#rut_paciente').val(formateaRut('{{$paciente->rut}}'))
$('#rut_menor').val(formateaRut('{{$paciente->rut_menor}}'))
function vist(name,id_mostrar,bool){
 

  if(bool==1){
    $('#'+id_mostrar).show();

  }else{
    $('#'+id_mostrar).hide();
    $('#detalle_'+id_mostrar).val("");
  }
}


 $("input[name=padre_v][value='{{$paciente->antecedente->padre_vida}}']").prop("checked",true);
 vist(null,'enfermedad_padre','{{$paciente->antecedente->padre_vida}}');

$("input[name=madre_v][value='{{$paciente->antecedente->madre_vida}}']").prop("checked",true);
 vist(null,'enfermedad_madre','{{$paciente->antecedente->madre_vida}}');

$("input[name=sufre_enf][value='{{$paciente->antecedente->sufre_enfermedad}}']").prop("checked",true);
 vist(null,'sufre_enfermedad','{{$paciente->antecedente->sufre_enfermedad}}');

 $("input[name=tratamiento][value='{{$paciente->antecedente->tratamiento_medico}}']").prop("checked",true);
 vist(null,'tratamiento','{{$paciente->antecedente->tratamiento_medico}}');


 $("input[name=alergico][value='{{$paciente->antecedente->alergico_medicamento}}']").prop("checked",true);
 vist(null,'cual_alergico','{{$paciente->antecedente->alergico_medicamento}}');

$("input[name=anestesia][value='{{$paciente->antecedente->anestesia}}']").prop("checked",true);

$("input[name=antibiotico][value='{{$paciente->antecedente->antibiotico}}']").prop("checked",true);
vist(null,'cual_antibiotico','{{$paciente->antecedente->antibiotico}}');  

$("input[name=ciatrizacion][value='{{$paciente->antecedente->ciatrizacion}}']").prop("checked",true);
vist(null,'sangra_mucho','{{$paciente->antecedente->ciatrizacion}}'); 

$("input[name=diabetico][value='{{$paciente->antecedente->diabetico}}']").prop("checked",true);
vist(null,'control_diabetes','{{$paciente->antecedente->diabetico}}'); 

$("input[name=hipertenso][value='{{$paciente->antecedente->hipertenso}}']").prop("checked",true);
vist(null,'hipertenso_control','{{$paciente->antecedente->hipertenso}}'); 

$("input[name=aspirina][value='{{$paciente->antecedente->aspirina}}']").prop("checked",true);
vist(null,'cual_aspirina','{{$paciente->antecedente->aspirina}}'); 

$("input[name=hepatitis][value='{{$paciente->antecedente->hepatitis}}']").prop("checked",true);
$("input[name=sifilis][value='{{$paciente->antecedente->sifilis}}']").prop("checked",true);
$("input[name=gonorrea][value='{{$paciente->antecedente->gonorrea}}']").prop("checked",true);
$("input[name=hiv][value='{{$paciente->antecedente->hiv}}']").prop("checked",true);

$("input[name=asma][value='{{$paciente->antecedente->asma}}']").prop("checked",true);
$("input[name=chaga][value='{{$paciente->antecedente->chaga}}']").prop("checked",true);
$("input[name=infectocontagiosa][value='{{$paciente->antecedente->infectocontagiosa}}']").prop("checked",true);

$("input[name=operacion][value='{{$paciente->antecedente->fue_operado}}']").prop("checked",true);
vist(null,'especifica_operacion','{{$paciente->antecedente->fue_operado}}'); 

$("input[name=p_respiratorio][value='{{$paciente->antecedente->problema_respiratorio}}']").prop("checked",true);
$("input[name=fuma][value='{{$paciente->antecedente->fuma}}']").prop("checked",true);

$("input[name=embarazo][value='{{$paciente->antecedente->embarazo}}']").prop("checked",true);
vist(null,'mes_gestacion','{{$paciente->antecedente->embarazo}}'); 
</script>
@endsection
