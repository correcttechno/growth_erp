<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><span class="text-main-600 fw-normal text-20">Tapşırıqlar</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

    
        <!-- Breadcrumb Right Start -->
        <div class="flex-align gap-8 flex-wrap">

          

            <div class="flex-align flex-wrap gap-16">
                <div class="flex-align flex-wrap gap-8">
                    <span class="w-8 h-8 rounded-circle bg-success-600"></span>
                    <span class="text-13 text-gray-600">Yüksək</span>
                </div>
                <div class="flex-align flex-wrap gap-8">
                    <span class="w-8 h-8 rounded-circle bg-main-600"></span>
                    <span class="text-13 text-gray-600">Orta</span>
                </div>
                <div class="flex-align flex-wrap gap-8">
                    <span class="w-8 h-8 rounded-circle bg-danger-600"></span>
                    <span class="text-13 text-gray-600">Aşağı</span>
                </div>
            </div>


            <button type="button" class="btn btn-main text-sm btn-sm px-24 rounded-pill" data-bs-toggle="modal"
                data-bs-target="#addModal">
                <i class="ph ph-plus me-4"></i>
                Əlavə et
            </button>
        </div>
        <!-- Breadcrumb Right End -->

    </div>


    <div class="card overflow-hidden">
        <div class="card-body p-0 table-responsive">

        <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <span class="flex-shrink-0 w-40 h-40 me-10 flex-center rounded-circle bg-main-600 text-white text-2xl">
            <i class="ph ph-play"></i>
        </span>
        Davam edən tapşırıqlar 
        <span style="margin-left:5px;line-height:2" class="text-14 h-30 w-30 text-center bg-primary-50 text-primary-600 rounded-pill"><?=count($ongoing);?></span>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

      <?php $this->load->view('tasktableView',array('results'=>$ongoing));?>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <span class="flex-shrink-0 w-40 h-40 me-10 flex-center rounded-circle bg-danger-600 text-white text-2xl">
            <i class="ph ph-x"></i>
        </span>
        Tamamlanmayan Tapşırıqlar
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <?php $this->load->view('tasktableView',array('results'=>$incomplete));?>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <span class="flex-shrink-0 w-40 h-40 me-10 flex-center rounded-circle bg-success-600 text-white text-2xl">
            <i class="ph ph-check"></i>
        </span>
        Tamamlanan tapşırıqlar
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <?php $this->load->view('tasktableView',array('results'=>$complete));?>
      </div>
    </div>
  </div>
</div>

            
        </div>

       <!--  <div class="card-footer flex-between flex-wrap">
            <span class="text-gray-900">Showing 1 to 10 of 12 entries</span>
            <ul class="pagination flex-align flex-wrap">
                <li class="page-item active">
                    <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">2</a>
                </li>
                
            </ul>
        </div>
 -->
    </div>


</div>



<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Yeni tapşırıq yarat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <form action="<?=base_url('tasks/add');?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="id" value="0" />
                        <div class="col-6">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Tapşırıq: <span
                                    class="text-danger">*</span>
                            </label>
                            <a style="float:right"
                                class="text-10 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill"
                                target="_blank" href="<?=base_url('taskstype');?>">
                                <i class="ph ph-plus"></i>
                                yeni növ
                            </a>
                            <select type="text" name="tasktype_id" class="form-control radius-8">
                                <?php if($taskstype):foreach($taskstype as $d):?>
                                <option value="<?=$d['id'];?>">
                                    <?=$d['title'];?>
                                </option>
                                <?php endforeach;endif;?>
                            </select>
                            <span data-error="tasktype" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-6">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Müştəri: <span
                                    class="text-danger">*</span>
                            </label>
                            <a style="float:right"
                                class="text-10 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill"
                                target="_blank" href="<?=base_url('customers');?>">
                                <i class="ph ph-plus"></i>
                                yeni müştəri
                            </a>
                            <select type="text" name="customer_id" class="form-control radius-8" placeholder="Müştəri">
                                <?php if($customers):foreach($customers as $d):?>
                                <option value="<?=$d['id'];?>">
                                    <?php if(!empty($d['company'])):?>
                                        <?=$d['company'];?>
                                    <?php else:?>
                                        <?=$d['firstname'];?>
                                        <?=$d['lastname'];?> 
                                    <?php endif;?>
                                    [<?=$d['voen'];?>]
                                </option>
                                <?php endforeach;endif;?>
                            </select>
                            <span data-error="customer" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Açıqlama:
                            </label>
                            <textarea type="text" name="content" class="form-control radius-8"
                                placeholder="Açıqlama"></textarea>
                            <span data-error="content" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Təhkim et: <span
                                    class="text-danger">*</span>
                            </label>
                            <select class="text-12 form-control radius-8 selectpicker text-primary" name="users[]"
                                id="users" multiple>
                                <?php if($employees):foreach($employees as $d):?>
                                <option value="<?=$d['id'];?>">
                                    <?=$d['firstname'];?>
                                    <?=$d['lastname'];?>
                                </option>
                                <?php endforeach;endif;?>
                            </select>
                            <span data-error="users" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-4">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Başlama tarixi: <span
                                    class="text-danger">*</span>
                            </label>
                            <input type="date" name="start" class="form-control radius-8" placeholder="Başlama tarixi"
                                min="<?=date('Y-m-d');?>" />
                            <span data-error="title" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-4">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Bitirmə vaxtı: <span
                                    class="text-danger">*</span>
                            </label>
                            <input type="date" name="end" class="form-control radius-8 text-12" placeholder="Bitirmə vaxtı" />
                            <span data-error="title" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-4">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Vaciblik: <span
                                    class="text-danger">*</span>
                            </label>
                            <select name="priority" class="form-control radius-8">
                                <option value="hight">Yüksək</option>
                                <option value="middle">Orta</option>
                                <option value="low">Aşağı</option>
                            </select>
                            <span data-error="priority" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-12">
                            <div class="form-switch switch-primary d-flex align-items-center gap-8 mb-16">
                                    <input class="form-check-input" type="checkbox" role="switch" id="periodic" name="periodic" value="true" >
                                    <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="periodic">Təkrarlanan tapşırıq yarat</label>
                            </div>
                        </div>

                        <div class="col-12 d-none" id="peridocicalert">
                            <div class="bg-main-50 px-15 py-15 radius-8">
                                <p class="h6 text-primary-600">Aşağıdakı xanada seçilmiş günə 5 gün qalmış tapşırıq "Davam edən tapşırıqlar" siyahısında görünəcəkdir.</p>
                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Gün:
                                </label>
                                <select type="text" name="periodic_day" class="form-control radius-8"  placeholder="Gün" >
                                    <option value="0">--gün seçimi--</option>
                                    <?php for($i=1;$i<31;$i++):?>
                                        <option value="<?=$i;?>"><?=$i;?></option>
                                    <?php endfor;?>
                                </select>
                                <span data-error="periodic_day" class="text-xs text-danger"></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Fayl:
                            </label>
                            <input type="file" name="files[]" class="form-control radius-8" multiple placeholder="Fayl" />
                            <span data-error="file" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-12 text-danger text-center" data-error="msg"></div>

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

<?php $this->modal_model->delete("tasks");?>


<div class="modal fade" id="answerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tapşırığı icra et</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <form action="<?=base_url('tasks/answer');?>" method="post">
                    <div class="row">
                        <input type="hidden" name="id" value="0" />
                        <input type="hidden" name="status" value="" />

                   

                        <div class="col-12">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Qeyd: <span
                                    class="text-danger">*</span>
                            </label>

                            <textarea type="text" name="note" class="form-control radius-8"
                                placeholder="Qeyd"></textarea>
                            <span data-error="note" class="text-xs text-danger"></span>
                        </div>




                        <div class="col-12 text-danger text-center" data-error="msg"></div>

                        <div class="d-flex align-items-center justify-content-center gap-8 mt-24">
                            <button type="reset"
                                class="btn bg-danger-600 hover-bg-danger-800 border-danger-600 hover-border-danger-800 text-md px-24 py-12 radius-8">
                                Ləğv et
                            </button>
                            <button id="notanswer"
                                class="btn bg-warning-600 hover-bg-warning-800 border-warning-600 hover-border-warning-800 text-md px-24 py-12 radius-8">
                                <i class="ph ph-warning"></i>
                                Tapşırıq icra edilmədi
                            </button>
                            <button id="answer"
                                class="btn bg-success-600 hover-bg-success-800 border-success-600 hover-border-success-800 text-md px-24 py-12 radius-8">
                                <i class="ph ph-check"></i>
                                Tapşırıq icra edildi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>