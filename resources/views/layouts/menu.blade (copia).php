		<nav class="navigation">
		    <ul class="list-unstyled">
		      <!--@foreach($modulos as $item)
		       @if($item->mod_depende_id == 0)
			    <li class="has-submenu">
			    <a href="#" style="font-size: 12px;"><i class="zmdi zmdi-money-box"></i> <span class="nav-label">{{ $item->mod_descripcion }}</span>
			    <span class="menu-arrow"></span>
			    </a>
			    <ul class="list-unstyled">
			   @else 	
			   <li><a href="" style="font-size: 12px;">{{ $item->mod_descripcion }}</a></li>

			   @endif
		       @endforeach
		   		</ul>
		       </li> -->
		       {!!  $menu_acceso !!}		       
		    <!--<li class="has-submenu">
		    <a href="#"><i class="zmdi zmdi-money-box"></i> <span class="nav-label">Participación económica</span>
		    <span class="menu-arrow"></span>
		    </a>
	            <ul class="list-unstyled">
	                <li><a href="components-grid.html">Tipo de operación</a></li>
	                <li><a href="components-portlets.html">Responsable del conflicto</a></li>
	                <li><a href="">Lista participación económica</a></li>
	            </ul>
	        </li>	-->
		    </ul>	    
		</nav>