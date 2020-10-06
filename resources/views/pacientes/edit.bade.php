@extends('layouts.master')

@section('content')
 <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Historia Clínica General.</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('/paciente') }}" method="put" >
                     {{ csrf_field() }}
                 
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        
                          <input value="Alvin"  type="text" name="nombres_paciente" id="nombres_paciente" class=" text-uppercase" >

                          <script type="text/javascript">
                          
                          </script>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fecha de Nacimiento</label>
                          <input type="Date"  name="fecha_nacimiento" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Edad</label>
                          <input type="text" class="form-control" disabled="" values=2>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Teléfono</label>
                        <input type="text" class="form-control" name="telefono"  minlength="9" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" >
                      </div>
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Estado Civil</label>
                       <select  class="form-control selectpicker"name="estado_civil" data-style="btn btn-link" >
                        @foreach($estado_civil as $civil)
                        <option value="{{$civil->id}}">{{$civil->name}}</option>
                        @endforeach
                         
                       </select>
                      </div>
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Nacionalidad</label>
                        <select class="form-control" name="nacionalidad">
                        @foreach($nacionalidad as $nac)
                        <option value="{{$nac->id}}">{{$nac->name}}</option>
                        @endforeach
                         
                       </select>
                      </div>
                      <div class="col-md-3">
                        <label class="bmd-label-floating">Rut</label>
                        <input type="text" class="form-control" name="rut" id="rut_paciente">
                      </div>
                      <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">Direccion</label>
                        <input type="text" name="direccion" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4" style="margin-top:10px;">
                        <label class="bmd-label-floating">Nombre Del Representante del Menor</label>
                        <input type="text" name="nombre_menor" class="form-control text-uppercase">
                      </div>
                       <div class="col-md-4" style="margin-top:10px;">
                        <label class="bmd-label-floating">Rut menor</label>
                        <input type="text" name="rut_menor" class="form-control text-uppercase">
                      </div>
                       <div class="col-md-4" style="margin-top:10px;">
                        <label class="bmd-label-floating">Motivo de Consulta</label>
                        <input type="text" name="motivo_consulta" class="form-control text-uppercase">
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
                         <input class="form-check-input" type="radio" name="padre_v" id="inlineRadio1" value="1" onclick="vist('padre_v','enfermedad_padre',1)"> SI
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
                        <input type="text" name="enfermedad_padre" id="detalle_enfermedad_padre" class="form-control">
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
                        <input type="text" name="enfermedad_madre" id="detalle_enfermedad_madre" class="form-control">
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
                        <input type="text" name="cual_enfermedad" id="detalle_sufre_enfermedad" class="form-control">
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
                        <input type="text" name="cual_tratamiento" id="detalle_tratamiento" class="form-control">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12" style="margin-top:10px;">
                        <label class="bmd-label-floating">¿Que Medicamentos Consume Habitualmente?</label>
                        <input type="text" name="medicamentos_consume" class="form-control">
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
                        <input type="text" name="alergico_medicamento" id="detalle_alergico_tratamiento" class="form-control">
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
                        <input type="text" name="cual_antibiotico" id="detalle_cual_antibiotico" class="form-control">
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
                        <input type="text" name="problema_cardiaco" class="form-control">
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
                        <input type="text" name="sangra_mucho"  id="detalle_sangra_mucho" class="form-control">
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
                        <input type="text" name="control_diabetes" id="detalle_control_diabetes" class="form-control">
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
                        <input type="text" name="hipertenso_control" id="detalle_hipertenso_control" class="form-control">
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
                        <input type="text" name="cual_aspirina" id="detalle_cual_aspirina" class="form-control">
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
                        <input type="text" name="especifica_operacion" id="detalle_especifica_operacion" class="form-control">
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
                        <input type="text" name="mes_gestacion" id="detalle_mes_gestacion" class="form-control" >
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

  $("form#formato-live input").rut({formatOn: 'keyup'});
function vist(name,id_mostrar,bool){
 

  if(bool==1){
    $('#'+id_mostrar).show();

  }else{
    $('#'+id_mostrar).hide();
    $('#detalle_'+id_mostrar).val("");
  }
}
</script>
@endsection
