@extends('layouts.master')

@section('content')
 <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Odontodiagrama. {{$paciente->nombres}}</p>
                </div>
                <div class="card-body">
                  <div class="col-md-3 text-center">
                  </div>


                  <div class="col-md-12 text-center">
                    <div class="table-responsive" >
                      <table  border="0" style="margin: 0 auto;">
                         @foreach ($dent as $key => $diente)
                         <tr>
                        @foreach ($diente as $key2 => $diente_detalle)
                           @if($diente_detalle['id']!=0)
                           <td onclick="LlamadaDental('{{$diente_detalle['id']}}','{{$diente_detalle['img']}}','{{$diente_detalle['number']}}');"><img src="{{asset('img/dientes/'.$diente_detalle['img'].'.png')}}"></td>
                           @else
                            <td bgcolor="#560e62"></td>
                           @endif
                         
                         @endforeach


                       </tr>
           
                       @if($key==1)
                       <tr>
                        @foreach ($dent[0] as $i => $did)
                           @if($did['id']!=0)
                           <th>{{$did['id']}}</th>
                           @else
                            <td bgcolor="#560e62"></td>
                           @endif                         
                         @endforeach
                       </tr>
                       @endif

                         @if($key==1)
                         <tr>
                        @foreach ($dent[2] as $i => $did)
                           @if($did['id']!=0)
                           <th>{{$did['id']}}</th>
                           @else
                            <td bgcolor="#560e62"></td>
                           @endif   

                         @endforeach 
                       </tr>   
                       @endif
                          @endforeach
      
                     
                        
                      </table>
                      
                    </div>
                    
                  </div>

               </div>
             </div>
           </div>
         </div>
       </div>
</div>




<!-- Modal -->
<div class="modal fade" id="ModalSdent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">

  $('.js-example-basic-single').select2();
function LlamadaDental(id,img,number){
 // alert('llamando al diente =>'+id)
 $('#ModalSdent').modal('show');
 $('.modal-title').html('<b>Estructura Dental: ('+number+')</b>')
 html=`<div class="col-md-12">
          <div class="row">
            <div class="col-md-8">
              <div class="col-md-12">

              <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Cariados
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                            <i class="fa fa-star-of-life"></i>
                          </label>
                </div>

                 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Extracción Indicada
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                 </div>

                 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Diente Ausente
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                 </div>
                <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Restauraciones defectuosas
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                 </div>

                  <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> T. de Conducto
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                 </div>

                  <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Diente en Giroversión
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                 </div>

                 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Puente Fijo Indicado
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                 </div>

                   <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> P.F realizado y defectuoso
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                 </div>

                 


            </div> 


            </div>           
         
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <img src="{{asset('img/dientes/`+number+`_1.png')}}">
                </div>
                
              </div>
              <br>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <img src="{{asset('img/dientes/`+number+`_2.png')}}">


                </div>

                <br>

                
              </div>


              
            </div>            
          </div>
          
        </div>`;

      $('.modal-body').html(html);
}
</script>
@endsection
