<aside class="left-sidebar" style="background-color:#2f4b3f;" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" style="background-color:#2f4b3f;" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(url('/admin/inicio')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Inicio</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"> <i class="mdi mdi-note-outline"></i> <span class="hide-menu">Clientes </span></a>
                            <ul aria-expanded="false" class="collapse  first-level" style="background-color:#25352e;">
                                <li class="sidebar-item"><a href="<?php echo e(url('/admin/view_clientes')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i> <span class="hide-menu"> Ver Clientes </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(url('/admin/add_clientes')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i> <span class="hide-menu"> Agregar Clientes </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>