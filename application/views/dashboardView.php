<div class="dashboard-body">

    <div class="row gy-4">



        <div class="col-lg-12">
            <!-- Widgets Start -->
            <div class="row gy-4">
                <div class="card">
                    <div class="card-body">
                        <form action="#" class="search-input-form">
                            <div class="row  align-items-end">
                                <div class="col-4">
                                    <div class="search-input">
                                        <input type="month"
                                            class="form-control form-select h6 rounded-4 mb-0 py-6 px-8" />
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="search-input">
                                        <button type="submit" class="btn btn-main  py-9 w-100">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <?php foreach($results as $r):
                $task=$this->dashboard_model->read_row($r['id']);    
                ?>
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xxl-4 col-md-4 col-sm-4 align-self-center">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="rounded-circle"
                                            src="<?=($r['photo']!=''?$r['photo']:get_img('user-img.png'));?>" />
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <span class="text-gray-600 text-20 fw-medium">
                                            <?=$r['firstname'];?>
                                            <?=$r['lastname'];?>
                                        </span>

                                        <p class="h6 mb-0 fw-medium text-gray-300">
                                            <?php
                                            $dep=$this->departments_model->read_row($r['department_id']);
                                            if($dep){
                                               echo $dep['title'];
                                            }
                                            ?>
                                        </p>

                                        <p class="h6 mb-0 fw-medium text-gray-300">
                                            <?php
                                             $pos=$this->positions_model->read_row($r['position_id']);
                                             if($pos){
                                                echo $pos['title'];
                                             }
                                             ?>
                                        </p>

                                    </div>
                                </div>


                            </div>

                            <div class="col-xxl-2 col-md-2 col-sm-4">
                                <h4 class="mb-2">
                                    <?=$task['ongoing'];?>
                                </h4>
                                <span class="text-gray-600 text-14">Davam edən tapşırıqlar</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span
                                        class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl">
                                        <i class="ph-fill ph-play"></i>
                                    </span>

                                </div>
                            </div>

                            <div class="col-xxl-2 col-md-2 col-sm-4">
                                <h4 class="mb-2">
                                    <?=$task['complete'];?>
                                </h4>
                                <span class="text-gray-600 text-14">Tamamlanan Tapşırıqlar</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span
                                        class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-success-600 text-white text-2xl">
                                        <i class="ph-fill ph-check"></i>
                                    </span>

                                </div>
                            </div>

                            <div class="col-xxl-2 col-md-2 col-sm-4">
                                <h4 class="mb-2">
                                    <?=$task['incomplete'];?>
                                </h4>
                                <span class="text-gray-600 text-14">Tamamlanmayan Tapşırıqlar</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span
                                        class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-danger-600 text-white text-2xl">
                                        <i class="ph-fill ph-x"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="col-xxl-2 col-md-2 col-sm-4">
                                <h4 class="mb-2">
                                    <?=$task['customers'];?>
                                </h4>
                                <span class="text-gray-600 text-14">Fərqli müştəri sayı</span>
                                <div class="flex-between gap-8 mt-16">
                                    <span
                                        class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-purple-600 text-white text-2xl">
                                        <i class="ph-fill ph-users-three"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach;?>

            </div>
            <!-- Widgets End -->

        </div>



    </div>
</div>