			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a href="<?php echo base_url('backend/dasbor') ?>">
				                            <i class="fas fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
				                    <li class="nav-parent">
				                        <a href="#">
				                            <i class="fas fa-box-open" aria-hidden="true"></i>
				                            <span>Produk</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a href="forms-advanced.html">
				                                	<i class="fas fa-genderless" aria-hidden="true"></i>
				                                    Tambah Produk
				                                </a>
				                            </li>
				                            <li>
				                                <a href="forms-basic.html">
				                                	<i class="fas fa-genderless" aria-hidden="true"></i>
				                                    Tambah Kategori
				                                </a>
				                            </li>
				                            
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a href="#">
				                            <i class="fas fa-newspaper" aria-hidden="true"></i>
				                            <span>Artikel</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a href="ui-elements-typography.html">
				                                	<i class="fas fa-genderless" aria-hidden="true"></i>
				                                    Tambah Artikel
				                                </a>
				                            </li>
				                            <li>
				                                <a href="ui-elements-typography.html">
				                                	<i class="fas fa-genderless" aria-hidden="true"></i>
				                                    Tambah Kategori
				                                </a>
				                            </li>
				                            
				                        </ul>
				                    </li>
				                     <li>
				                        <a href="<?php echo base_url('backend/pengguna') ?>">
				                            <i class="fas fa-user-shield	" aria-hidden="true"></i>
				                            <span>Pengguna</span>
				                        </a>                        
				                    </li>

				           		 <hr class="separator"/>
				                    <li class="nav-parent">
				                        <a href="#">
				                            <i class="fas fa-cogs" aria-hidden="true"></i>
				                            <span>Konfigurasi Website</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a href="ui-elements-typography.html">
				                                	<i class="fas fa-genderless" aria-hidden="true"></i>
				                                    Config
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                </ul>
				                 <hr class="separator"/>
				           		 	<div class="sidebar-widget widget-tasks">
				               			<div class="widget-header">
				                   			<h6>Konfigurasi Website</h6>
				                    		<div class="widget-toggle">+</div>
				               			</div>
				                	<div class="widget-content">
				                    	<ul class="list-unstyled m-0">
					                        <li><a href="index.html#">Porto HTML5 Template</a></li>
					                        <li><a href="index.html#">Tucson Template</a></li>
					                        <li><a href="index.html#">Porto Admin</a></li>
				                    	</ul>
				                	</div>
				            		</div>
				            </nav>
				
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->
	<section role="main" class="content-body">
 		<div class="row">
  			<div class="col">
    			<section class="card">
    				<section role="main" class="card" >
						<div class="row">
							<div class="col-md-12">

<?php
//notifikasi
if($this->session->flashdata('sukses'))
  {
    echo '<p class="alert alert-success"><i class="fa fa-check"></i> ';
    echo $this->session->flashdata('sukses');
    echo '</p>';
  }
?>