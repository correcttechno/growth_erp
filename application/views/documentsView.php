<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><span class="text-main-600 fw-normal text-20">Müştəri sənədləri</span></li>
            </ul>
        </div>

        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a class="text-gray-200 fw-normal text-15 hover-text-main-600">Müştəri sənədləri</a></li>
                <?php foreach(explode('/',$path) as $p):?>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><a ><span class="text-main-600 fw-normal text-15"><?=$p;?></span></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <div class="flex-align gap-8 flex-wrap">

           <!--  <button type="button" class="btn btn-danger text-sm btn-sm px-24 py-12 d-flex align-items-center gap-8" data-bs-toggle="modal"
                data-bs-target="#addModal">
                <i class="ph ph-trash me-4"></i>
                Sil
            </button> -->
            <?php if($this->user_model->userdata['status']=='admin'):?>
            <button type="button" class="btn btn-main text-sm btn-sm px-24 py-12 d-flex align-items-center gap-8" data-bs-toggle="modal"
                data-bs-target="#addModal">
                <i class="ph ph-plus me-4"></i>
                Yeni folder
            </button>

            <div class="flex-align gap-8 flex-wrap">
                <form id="docfilesform" action="<?=base_url('documents/addfile');?>" method="post">
                    <input type="hidden" name="path" value="<?=$path;?>"/>
                    <label for="docfiles" class="btn btn-main text-sm btn-sm px-24 py-9 d-flex align-items-center gap-8">
                        <i class="ph ph-upload-simple d-flex text-xl"></i>
                        Fayl yüklə
                    </label>
                    <input type="file" id="docfiles" name="files[]" multiple id="upload" hidden>
                </form>
            </div>
            <?php endif;?>
        </div>
        <!-- Breadcrumb Right End -->

    </div>

    <!-- Card Start -->
    <div class="card">

        <div class="card-body p-0">
            <!-- Grid View Start -->
            <div class="grid-view py-20">
                <div class="resource-item-wrapper px-24">

                    <?php foreach($folders as $f):?>
                    <div class="resource-item text-center" >
                        <?php if($this->user_model->userdata['status']=='admin'):?>
                        <div class="document-buttons">
                            <a href="#" data-delete-id="<?=$f;?>" data-o-id="<?=$path;?>" class="text-center w-30 h-30 py-5 bg-danger-600 rounded-circle text-white">
                                <i class="ph ph-trash"></i>
                            </a>
                        </div>
                        <?php endif;?>
                        <!-- <div class="form-check">
                            <input class="form-check-input border-gray-200 rounded-4" id="checkbox1" type="checkbox">
                        </div> -->
                        <label for="checkbox1" class="">
                            <span class="d-block mb-16">
                                <a href="<?=base_url('documents?activePath='.$path.'/'.$f);?>">
                                    <img src="<?=get_img('folder.png');?>" alt="">
                                </a>
                            </span>
                            <span class="d-block text-gray-400 text-15">
                                <?=$f;?>
                            </span>
                            <!-- <span class="d-block text-gray-200 text-15">32 Files</span> -->
                        </label>
                    </div>
                    <?php endforeach;?>

                    <?php foreach($files as $f):?>
                    <div class="resource-item text-center">
                        <?php if($this->user_model->userdata['status']=='admin'):?>
                        <div class="document-buttons">
                            <a href="#" data-delete-id="<?=$f;?>" data-o-id="<?=$path;?>" class="text-center w-30 h-30 py-5 bg-danger-600 rounded-circle text-white">
                                <i class="ph ph-trash"></i>
                            </a>
                        </div>
                        <?php endif;?>
                       <!--  <div class="form-check">
                            <input class="form-check-input border-gray-200 rounded-4" id="checkbox52" type="checkbox">
                        </div> -->
                        <label for="checkbox52" class="">
                            <span class="d-block mb-16">
                                <a target="_blank" href="<?=base_url('uploads/documents/'.$path.'/'.$f);?>">
                                    <img class="docthumb" src="<?=$this->documents_model->get_file_icon($path.'/'.$f);?>" alt="" height="48">
                                </a>
                            </span>
                            <span class="d-block text-gray-400 text-12">
                                <?=$f;?>
                            </span>
                        </label>
                    </div>
                    <?php endforeach;?>

                </div>
            </div>
            <!-- Grid View End -->

            <?php if(count($folders)==0 and count($files)==0):?>
                <div class="col-12 px-20 py-20">
                    <div class="alert alert-info">
                        <h6>Boşdur</h6>
                    </div>
                </div>
            <?php endif;?>

            


        </div>


    </div>
    <!-- Card End -->

</div>


<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Yeni folder yarat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <form action="<?=base_url('documents/add');?>" method="post">
                    <div class="row">
                        <div class="col-12 mb-20">
                            <input type="hidden" name="id" value="0"/>
                            <input type="hidden" name="path" value="<?=$path;?>"/>

                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Folder adı:
                            </label>
                            <input type="text" name="title" class="form-control radius-8" placeholder="Folder adı">
                            
                            <span data-error="title" class="text-xs text-danger"></span>
                        </div>

                        <div class="d-flex align-items-center justify-content-center gap-8 mt-24">
                            <button type="reset"
                                class="btn bg-danger-600 hover-bg-danger-800 border-danger-600 hover-border-danger-800 text-md px-24 py-12 radius-8">
                                Ləğv et
                            </button>
                            <button type="submit"
                                class="btn bg-main-600 hover-bg-main-800 border-main-600 hover-border-main-800 text-md px-24 py-12 radius-8">
                                Saxla
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->modal_model->delete("documents");?>