<aside class="sidebar">
    <!-- sidebar close btn -->
    <button type="button"
        class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i
            class="ph ph-x"></i></button>
    <!-- sidebar close btn -->

    <a href="<?=base_url("dashboard");?>"
        class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
        <img src="<?=get_img("logo.svg");?>" alt="Logo">
    </a>

    <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
        <div class="p-20 pt-10">
            <ul class="sidebar-menu">
                <li class="sidebar-menu__item ">
                    <a href="<?=base_url("dashboard");?>" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-squares-four"></i></span>
                        <span class="text">Ana Səhifə</span>
                      
                    </a>
                 
                </li>
                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-list-checks"></i></span>
                        <span class="text">Tapşırıqlar</span>
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu">
                        <li class="sidebar-submenu__item">
                            <a href="<?=base_url("tasks");?>" class="sidebar-submenu__link">Tapşırıqlar</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="<?=base_url("taskstype");?>" class="sidebar-submenu__link">Tapşırıq növləri</a>
                        </li>                       
                    </ul>
                    <!-- Submenu End -->
                   
                </li>
                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-squares-four"></i></span>
                        <span class="text">Müştərilər</span>
                        
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu">
                        <li class="sidebar-submenu__item">
                            <a href="<?=base_url("customers");?>" class="sidebar-submenu__link">Müştərilər</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="<?=base_url("customerstype");?>" class="sidebar-submenu__link"> Müştəri növləri </a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="<?=base_url("customers_documents");?>" class="sidebar-submenu__link">Müştəri sənədləri</a>
                        </li>
                       
                    </ul>
                    <!-- Submenu End -->
                </li>
                <li class="sidebar-menu__item">
                    <a href="<?=base_url('departments');?>" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-buildings"></i></span>
                        <span class="text">Departamentlər</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="<?=base_url('positions');?>" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-identification-badge"></i></span>
                        <span class="text">Vəzifələr</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="<?=base_url('employees');?>" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-smiley"></i></span>
                        <span class="text">Əməkdaşlar</span>
                    </a>
                </li>
                
                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-calculator"></i></span>
                        <span class="text">Hesabatlar</span>
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu">
                        <li class="sidebar-submenu__item">
                            <a href="<?=base_url("reports_task");?>" class="sidebar-submenu__link">Tapşırıqlar üzrə</a>
                        </li>
                        <li class="sidebar-submenu__item">
                            <a href="<?=base_url("reports_1c");?>l" class="sidebar-submenu__link">1C əməliyyatları üzrə</a>
                        </li>
                      
                    </ul>
                    <!-- Submenu End -->
                </li>
              

                <li class="sidebar-menu__item">
                    <span
                        class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Settings</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="<?=base_url('profile');?>" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-gear"></i></span>
                        <span class="text">Hesab Ayarları</span>
                    </a>
                </li>

              

            </ul>
        </div>
       
    </div>

</aside>
<!-- ============================ Sidebar End  ============================ -->

<div class="dashboard-main-wrapper">
