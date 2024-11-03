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
            <button type="button" class="btn btn-main text-sm btn-sm px-24 rounded-pill" data-bs-toggle="modal"
                data-bs-target="#addModal">
                <i class="ph ph-plus me-4"></i>
                Əlavə et
            </button>
        </div>
        <!-- Breadcrumb Right End -->

    </div>


    <div class="card overflow-hidden">
        <div class="card-body p-0">

            <?php if($results):?>
            <table id="assignmentTable" class="table table-striped">
                <thead>
                    <tr>
                        <th class="fixed-width">
                            <div class="form-check">
                                <input class="form-check-input border-gray-200 rounded-4" type="checkbox"
                                    id="selectAll">
                            </div>
                        </th>
                        <th class="h6 text-gray-300">Tapşırıq</th>
                        <th class="h6 text-gray-300">Müştəri</th>
                        <th class="h6 text-gray-300">Açıqlama</th>
                        <th class="h6 text-gray-300">Təhkim edilib</th>
                        <th class="h6 text-gray-300">İcra tarixi</th>
                        <th class="h6 text-gray-300">Vaciblik</th>
                        <th class="h6 text-gray-300">Fayl</th>
                        <th class="h6 text-gray-300">Əməliyyatlar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($results as $r):?>
                    <tr>
                        <td class="fixed-width">
                            <div class="form-check">
                                <input class="form-check-input border-gray-200 rounded-4" type="checkbox">
                            </div>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?php
                            $data=$this->taskstype_model->read_row($r['tasktype_id']);
                            if($data){
                                echo $data['title'];
                            }
                            ?>
                            </span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?php
                            $data=$this->customers_model->read_row($r['customer_id']);
                            if($data){
                                echo $data['firstname'];
                                echo " ";
                                echo $data['lastname'];
                                echo '<p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    VÖEN: 
                                    '.$data['voen'].'
                                </span>
                            </p>';
                            }
                            ?>
                            </span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?=$r['content'];?>
                            </span>
                        </td>
                        <td>
                            <ul class="lesson-list">
                            <?php
                            $users=json_decode($r['users'],true);
                            foreach($users as $u):
                                $user=$this->employees_model->read_row($u);
                                if($user):?>
                                  <li class="lesson-list__item d-flex align-items-start gap-16 ">
                                    <span class="circle w-20 h-20 flex-center rounded-circle text-main-100 text-13 flex-shrink-0">
                                        <i class="ph-fill ph-check-circle"></i>
                                    </span>
                                    <div>
                                        <a href="#" class="text-13 text-heading d-block text-gray-600 fw-medium hover-text-main-600">
                                            <?=$user['firstname'];?> <?=$user['lastname'];?>
                                            <span class="text-13 text-heading d-block text-gray-600 fw-medium">10-11-2024 5:30</span>
                                        </a>
                                    </div>
                                </li>
                            <?php endif;endforeach;?>
                            </ul>
                        </td>
                        <td>
                            <span
                            class="mb-5 text-13 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill">
                            <?=$r['start'];?></span>
                             -
                             <span
                            class="mb-5 text-13 py-2 px-8 bg-success-50 text-success-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                <?=$r['end'];?>
                                </span>
                        
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?php
                                switch($r['priority']){
                                    case 'hight':
                                        echo 'Yüksək';
                                        break;
                                    case 'middle':
                                        echo 'Orta';
                                        break;
                                    case 'low':
                                        echo 'Aşağı';
                                        break;
                                }
                                ?>
                            </span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300"></span>
                        </td>
                        <td>
                            <button data-delete-id="<?=$r['id'];?>"
                                class="w-40 h-40 bg-danger-50 rounded-circle hover-bg-danger-100 transition-2">
                                <i class="ph ph-trash text-danger-700"></i>
                            </button>
                            <button data-edit-id="<?=$r['id'];?>"
                                class=" w-40 h-40 bg-main-50 rounded-circle hover-bg-main-100 transition-2">
                                <i class="ph ph-pencil-simple text-main-700"></i>
                            </button>
                        </td>
                    </tr>

                    <?php endforeach;?>

                </tbody>
            </table>
            <?php else:?>
            <div class="p-lg-20 p-sm-3">
                <div class="alert alert-info">

                    <p><i class="ph-fill ph-info"></i>Məlumat tapılmadı</p>
                </div>
            </div>
            <?php endif;?>
        </div>

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
                <form action="<?=base_url('tasks/add');?>" method="post">
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
                                    <?=$d['firstname'];?>
                                    <?=$d['lastname'];?> [
                                    <?=$d['voen'];?>]
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
                                id="ms1" multiple>
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
                            <input type="date" name="start" class="form-control radius-8"
                                placeholder="Başlama tarixi" />
                            <span data-error="title" class="text-xs text-danger"></span>
                        </div>

                        <div class="col-4">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Dead Line: <span
                                    class="text-danger">*</span>
                            </label>
                            <input type="date" name="end" class="form-control radius-8" placeholder="Dead Line" />
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
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Fayl:
                            </label>
                            <input type="file" name="file" class="form-control radius-8" placeholder="Fayl" />
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