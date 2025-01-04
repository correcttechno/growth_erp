<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><span class="text-main-600 fw-normal text-20">Hesabat növləri</span></li>
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
                        <th class="h6 text-gray-300">Başlıq</th>
                        <th class="h6 text-gray-300">Departament</th>
                        <th class="h6 text-gray-300">Tarix</th>
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
                                <?=$r['title'];?>
                            </span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                             <?php
                             $dep=$this->departments_model->read_row($r['department_id']);
                             if($dep){
                                echo $dep['title'];
                             }
                             ?>
                            </span>
                        </td>
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?=$r['date'];?>
                            </span>
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
    <div class="modal-dialog modal-md modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hesabat növü yarat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <form action="<?=base_url('reports_tasktype/add');?>" method="post">
                    <div class="row">
                        <input type="hidden" name="id" value="0" />
                        <div class="col-sm-12">
                            <label for="dep_id" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                Departament: <span class="text-danger">*</span>
                            </label>
                            <div class="position-relative">
                                <select id="dep_id" name="department_id"
                                    class="form-select py-9 placeholder-13 text-15">
                                    <option value="0">--seçim--</option>
                                    <?php if($departments):foreach($departments as $d):?>
                                    <option value="<?=$d['id'];?>">
                                        <?=$d['title'];?>
                                    </option>
                                    < <?php endforeach;endif;?>
                                </select>
                                <span data-error="dep_id" class="text-xs text-danger"></span>
                            </div>
                        </div>

                        <div class="col-12 mb-20">
                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Başlıq:
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="title" class="form-control radius-8" placeholder="Başlıq">

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

<?php $this->modal_model->delete("reports_tasktype");?>