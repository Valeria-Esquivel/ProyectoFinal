<div class="widget has-shadow">
        
            <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Progresos </h4>
            </div>
            <div class="widget-body">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Proyectos: </h4>
                </div>
                
                <div class="progress progress-lg mb-3">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{$proyectos}}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Tareas: </h4>
                </div>
                <div class="progress progress-lg mb-3">
                     <div class="progress-bar bg-danger"  role="progressbar" style="width: {{$tareas}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            
           
        </div>
        
<div class="row flex-row">
                              
    <div class="col-xl-6 col-md-6">
    
    <div class="widget has-shadow">
    
        <div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Proyectos </h4>
        </div>
        <center>
        <div id="donutchart"   style="display: block; width: 500px; height: 250px;"></div>
        </center>
    </div>
   
  </div>        
 <div class="col-xl-6 col-md-6">
                                <!-- Begin Widget 08 -->
                                <div class="widget widget-08 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tareas</font></font></h2>
                                        
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <div class="today">
                                            <div class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoy</font></font></div>
                                            <div class="new-tasks"><span class="nb"><font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{$ad}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Tareas Pendientes</font></font></div>
                                        </div>
                                        <!-- Begin List -->
                                        <div class="todo-list">
                                        @foreach ($aD as $aD)
                                           
                                            <ul id="sortable" class="list">
                                                <li class="task-color task-violet">
                                                        <label class="text-primary" for="task-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$aD->titulo}}</font></font></label>
                                                   
                                                </li>
                                               
                                            </ul> 
                                        @endforeach
                                       </div>
                                        <!-- End List -->
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                                <!-- End Widget 08 -->
                                
   </div>
</div>
