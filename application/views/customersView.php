<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><span class="text-main-600 fw-normal text-20">Müştərilər</span></li>
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
                        <th class="h6 text-gray-300">Müştəri</th>
                        <th class="h6 text-gray-300">Rəhbər şəxs</th>
                        <th class="h6 text-gray-300">Müəssisə məlumatları</th>
                        <th class="h6 text-gray-300">Bank məlumatları</th>
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
                                <?=$r['firstname'];?>
                                <?=$r['lastname'];?>
                            </span>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    <i class="ph ph-map-pin-line"></i>
                                    <?=$r['address'];?>
                                </span>

                            </p>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-warning-50 text-warning-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    <i class="ph ph-phone"></i>
                                    <?=$r['phone'];?>
                                </span>
                            </p>

                            <p>
                                <span
                                    class=" text-13 py-2 px-8 bg-success-50 text-success-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    <i class="ph ph-envelope"></i>
                                    <?=$r['email'];?>
                                </span>

                            </p>
                        </td>

                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?=$r['rfirstname'];?>
                                <?=$r['rlastname'];?>
                            </span>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    <i class="ph ph-map-pin-line"></i>
                                    <?=$r['raddress'];?>
                                </span>

                            </p>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-warning-50 text-warning-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    <i class="ph ph-phone"></i>
                                    <?=$r['rphone'];?>
                                </span>
                            </p>

                            <p>
                                <span
                                    class=" text-13 py-2 px-8 bg-success-50 text-success-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    <i class="ph ph-envelope"></i>
                                    <?=$r['remail'];?>
                                </span>

                            </p>
                        </td>

                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?=($r['customertype']=='person'?"Fiziki şəxs":"Hüquqi şəxs");?>
                            </span>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    VÖEN:
                                    <?=$r['voen'];?>
                                </span>

                            </p>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-warning-50 text-warning-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    Obyekt sayı:
                                    <?=$r['countobject'];?>
                                </span>
                            </p>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-success-50 text-success-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    İşçi sayı
                                    <?=$r['countworkers'];?>
                                </span>

                            </p>


                        </td>
                        
                        <td>
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?=$r['bankname'];?>
                            </span>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    Əlaqədar şəxs:
                                    <?=$r['bankperson'];?>
                                </span>

                            </p>
                            <p>
                                <span
                                    class="mb-5 text-13 py-2 px-8 bg-warning-50 text-warning-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                    Telefon:
                                    <?=$r['bankphone'];?>
                                </span>
                            </p>

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
    <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered">
        <div class="modal-content radius-16 bg-base">
            <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Yeni müştəri əlavə et</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-24">
                <form action="<?=base_url('customers/add');?>" method="post">
                    <div class="row">
                        <input type="hidden" name="id" value="0" />

                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Müştərinin məlumatları</h5>
                                </div>
                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Ad: <span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="firstname" class="form-control radius-8" placeholder="Ad">
                                    <span data-error="firstname" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Soyad: <span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="lastname" class="form-control radius-8"
                                        placeholder="Soyad">
                                    <span data-error="lastname" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Telefon:
                                    </label>
                                    <input type="text" name="phone" class="form-control radius-8" placeholder="Telefon">
                                    <span data-error="phone" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">E-Mail:
                                    </label>
                                    <input type="text" name="email" class="form-control radius-8" placeholder="E-Mail">
                                    <span data-error="email" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Doğum tarixi:
                                    </label>
                                    <input type="date" name="birthday" class="form-control radius-8"
                                        placeholder="Doğum tarixi">
                                    <span data-error="birthday" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Ünvan:
                                    </label>
                                    <input type="text" name="address" class="form-control radius-8" placeholder="Ünvan">
                                    <span data-error="address" class="text-xs text-danger"></span>
                                </div>


                            </div>
                        </div>

                        <div class="col-6" style="border-left: 1px solid #ededed;">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Rəhbər şəxsin məlumatları</h5>
                                </div>
                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Ad:
                                    </label>
                                    <input type="text" name="rfirstname" class="form-control radius-8" placeholder="Ad">
                                    <span data-error="rfirstname" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Soyad:
                                    </label>
                                    <input type="text" name="rlastname" class="form-control radius-8"
                                        placeholder="Soyad">
                                    <span data-error="rlastname" class="text-xs text-danger"></span>
                                </div>


                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Telefon:
                                    </label>
                                    <input type="text" name="rphone" class="form-control radius-8"
                                        placeholder="Telefon">
                                    <span data-error="rphone" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">E-Mail:
                                    </label>
                                    <input type="text" name="remail" class="form-control radius-8" placeholder="E-Mail">
                                    <span data-error="remail" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Doğum tarixi:
                                    </label>
                                    <input type="date" name="rbirthday" class="form-control radius-8"
                                        placeholder="Doğum tarixi">
                                    <span data-error="rbirthday" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-6">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Ünvan:
                                    </label>
                                    <input type="text" name="raddress" class="form-control radius-8"
                                        placeholder="Ünvan">
                                    <span data-error="raddress" class="text-xs text-danger"></span>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Müəssisə məlumatları</h5>
                                </div>

                                <div class="col-3">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Müştəri növü: <span
                                    class="text-danger">*</span>
                                    </label>
                                    <select name="customertype" class="form-control radius-8"
                                        placeholder="Müştəri növü">
                                        <option value="0">--seçim--</option>
                                        <option value="person">Fiziki şəxs</option>
                                        <option value="company">Hüquqi şəxs</option>
                                    </select>
                                    <span data-error="customertype" class="text-xs text-danger"></span>
                                </div>


                                <div class="col-3">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">VOEN:
                                    </label>
                                    <input type="text" name="voen" class="form-control radius-8" placeholder="VOEN">
                                    <span data-error="voen" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-3">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">İşçi sayı:
                                    </label>
                                    <input type="number" name="countworkers" class="form-control radius-8"
                                        placeholder="İşçi sayı">
                                    <span data-error="countworkers" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-3">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Obyekt sayı:
                                    </label>
                                    <input type="number" name="countobject" class="form-control radius-8"
                                        placeholder="Obyekt sayı">
                                    <span data-error="countobject" class="text-xs text-danger"></span>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h5>Bank məlumatları</h5>
                                </div>

                                <div class="col-4">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Bank adı:
                                    </label>
                                    <input type="text" name="bankname" class="form-control radius-8"
                                        placeholder="Bank adı">
                                    <span data-error="bankname" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-4">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Əlaqədar şəxs:
                                    </label>
                                    <input type="text" name="bankperson" class="form-control radius-8"
                                        placeholder="Əlaqədar şəxs">
                                    <span data-error="bankperson" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-4">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Telefon
                                        nömrəsi:
                                    </label>
                                    <input type="text" name="bankphone" class="form-control radius-8"
                                        placeholder="Telefon nömrəsi">
                                    <span data-error="bankphone" class="text-xs text-danger"></span>
                                </div>

                                <div class="col-12 text-danger text-center" data-error="msg"></div>

                            </div>
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

<?php $this->modal_model->delete("customers");?>