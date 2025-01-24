<div class="dashboard-body">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb mb-24">
        <ul class="flex-align gap-4">
            <li>
                <span class="text-main-600 fw-normal text-20">
                    <?php if(!empty($result['company'])):?>
                    <?=$result['company'];?>
                    <?php else:?>
                    <?=$result['firstname'];?>
                    <?=$result['lastname'];?>
                    <?php endif;?>
                </span>
            </li>
        </ul>
    </div>
    <!-- Breadcrumb End -->

    <div class="row gy-4">

        <?php if($this->user_model->userdata['status']=='admin'):?>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body p-0">
                    <!--esas melumatlar-->
                    <div class="course-item">
                        <button type="button"
                            class="course-item__button active flex-align gap-4 w-100 p-16 border-bottom border-gray-100">
                            <span class="d-block text-start">
                                <span class="d-block h5 mb-0 text-line-1">Əsas Məlumatlar</span>
                            </span>
                            <span class="course-item__arrow ms-auto text-20 text-gray-500"><i
                                    class="ph ph-arrow-right"></i></span>
                        </button>
                        <div class="course-item-dropdown active border-bottom border-gray-100">
                            <ul class="course-list p-16 pb-0">
                                <li class="course-list__item flex-align gap-8 mb-16">
                                    <div class="w-100">
                                        <a class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                            Müştərinin məlumatları
                                            <span class="text-gray-300 fw-normal d-block">Ad:
                                                <?=$result['firstname'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Soyad:
                                                <?=$result['lastname'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Telefon:
                                                <?=$result['phone'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">E-Mail:
                                                <?=$result['email'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Doğum tarixi:
                                                <?=$result['birthday'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Ünvan:
                                                <?=$result['address'];?>
                                            </span>
                                        </a>
                                    </div>
                                </li>

                                <li class="course-list__item flex-align gap-8 mb-16">
                                    <div class="w-100">
                                        <a class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                            Rəhbər şəxsin məlumatları
                                            <span class="text-gray-300 fw-normal d-block">Ad:
                                                <?=$result['rfirstname'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Soyad:
                                                <?=$result['rlastname'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Telefon:
                                                <?=$result['rphone'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">E-Mail:
                                                <?=$result['remail'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Doğum tarixi:
                                                <?=$result['rbirthday'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Ünvan:
                                                <?=$result['raddress'];?>
                                            </span>
                                        </a>
                                    </div>
                                </li>

                                <li class="course-list__item flex-align gap-8 mb-16">
                                    <div class="w-100">
                                        <a class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                            Müəssisə məlumatları
                                            <span class="text-gray-300 fw-normal d-block">Şirkət adı:
                                                <?=$result['company'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Müştəri növü:
                                                <?=($result['customertype']=='person'?"Fiziki şəxs":"Hüquqi şəxs");?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">VOEN:
                                                <?=$result['voen'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">İşçi sayı:
                                                <?=$result['countworkers'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Obyekt sayı:
                                                <?=$result['countobject'];?>
                                            </span>
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!--diger melumatlar-->
                    <div class="course-item">
                        <button type="button"
                            class="course-item__button flex-align gap-4 w-100 p-16 border-bottom border-gray-100">
                            <span class="d-block text-start">
                                <span class="d-block h5 mb-0 text-line-1"> Digər Məlumatlar</span>
                            </span>
                            <span class="course-item__arrow ms-auto text-20 text-gray-500"><i
                                    class="ph ph-arrow-right"></i></span>
                        </button>
                        <div class="course-item-dropdown border-bottom border-gray-100">
                            <ul class="course-list p-16 pb-0">
                                <li class="course-list__item flex-align gap-8 mb-16">
                                    <div class="w-100">
                                        <a class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                            Bank məlumatları
                                            <span class="text-gray-300 fw-normal d-block">Bank adı:
                                                <?=$result['bankname'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Əlaqədar şəxs:
                                                <?=$result['bankperson'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Telefon nömrəsi:
                                                <?=$result['bankphone'];?>
                                            </span>
                                        </a>
                                    </div>
                                </li>

                                <li class="course-list__item flex-align gap-8 mb-16">
                                    <div class="w-100">
                                        <a class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                            Asan imza məlumatları
                                            <span class="text-gray-300 fw-normal d-block">Nömrə:
                                                <?=$result['anumber'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">İD:
                                                <?=$result['aid'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">PİN 1:
                                                <?=$result['apin1'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">PİN 2:
                                                <?=$result['apin2'];?>
                                            </span>
                                        </a>
                                    </div>
                                </li>

                                <li class="course-list__item flex-align gap-8 mb-16">
                                    <div class="w-100">
                                        <a class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                            Statistika məlumatları
                                            <span class="text-gray-300 fw-normal d-block">Kod:
                                                <?=$result['skod'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Şifrə:
                                                <?=$result['spass'];?>
                                            </span>
                                        </a>
                                    </div>
                                </li>

                                <li class="course-list__item flex-align gap-8 mb-16">
                                    <div class="w-100">
                                        <a class="text-gray-300 fw-medium d-block hover-text-main-600 d-lg-block">
                                            Vergi məlumatları
                                            <span class="text-gray-300 fw-normal d-block">Kod:
                                                <?=$result['vkod'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Parol:
                                                <?=$result['vpass'];?>
                                            </span>
                                            <span class="text-gray-300 fw-normal d-block">Şifrə:
                                                <?=$result['vparol'];?>
                                            </span>
                                        </a>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <?php endif;?>

        <div class="col-md-9">
            <!-- Course Card Start -->
            <div class="card">
                <div class="card-body p-lg-20 p-sm-3">



                    <div class="flex-between flex-wrap gap-12 mb-20">
                        <ul class="nav common-tab style-two nav-pills mb-20" id="pills-tab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <button class="active nav-link" id="pills-service-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-service" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Hesabatlar</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-1c-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1c" type="button" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">1C Hesabatları</button>
                            </li>
                        </ul>

                    </div>

                    <div class="card">
                        <div class="card-body p-0 table-responsive">

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-service" role="tabpanel"
                                    aria-labelledby="pills-service-tab" tabindex="0">

                                    <?php if($result):?>
                                    <?php $tdLen=array();?>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td rowspan="2" class="h6 text-gray-300 text-center">TARİX</td>
                                                <?php if($departments):?>
                                                <?php foreach($departments as $d):?>
                                                <?php $services=$this->reports_model->read($d['id']);?>
                                                <?php if($services):?>
                                                <th colspan="<?=count($services);?>"
                                                    class="h6 text-gray-300 text-center">
                                                    <?=$d['title'];?>
                                                </th>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                                <?php endif;?>
                                                
                                            </tr>

                                            <tr>
                                                <?php if($departments):?>
                                                <?php foreach($departments as $d):?>
                                                <?php $services=$this->reports_model->read($d['id']);?>
                                                <?php if($services):?>
                                                <?php foreach($services as $s):?>
                                                <?php $tdLen[]=$s['id'];?>
                                                <th class="h6 text-gray-300 text-center">
                                                    <?=$s['title'];?>
                                                </th>
                                                <?php endforeach;?>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                                <?php endif;?>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            
                                            <?php $r=$result;?>
                                            <?php $reports_logs=$this->reports_model->read_logs($r['id']);?>
                                            <?php if($reports_logs):?>
                                            <?php foreach($reports_logs as $reports_log):?>
                                            <tr>
                                                <td class="text-success">
                                                    <?php
                                                    $date = new DateTime($reports_log['date']);
                                                    $year = $date->format('Y');
                                                    $month = $date->format('m');
                                                    echo "$year-$month";
                                                    ?>
                                                </td>
                                                <?php for($i=0;$i<count($tdLen);$i++):?>
                                                <td class="m-auto ">
                                                    <div class="form-check">
                                                        <input <?=($reports_log!=false and in_array($tdLen[$i],json_decode($reports_log['reports'],true))==true)?'checked':'';?>
                                                        id="<?=$tdLen[$i];?>" data-id="<?=$r['id'];?>" <?=(($r['reports']!='null' and $r['reports']!='')?(in_array($tdLen[$i],json_decode($r['reports'],true))==false?'disabled':''):'disabled');?>
                                                        class="form-check-input rounded-3 reports_check
                                                        <?=(($r['reports']!='null' and $r['reports']!='')?(in_array($tdLen[$i],json_decode($r['reports'],true))==false?'border-gray-200 bg-gray-100':'border-success-600'):'bg-gray-100 border-gray-200');?>
                                                        " type="checkbox">
                                                    </div>
                                                </td>
                                                <?php endfor;?>
                                            </tr>
                                            <?php endforeach;?>
                                            <?php endif;?>
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

                                <!--1c-->
                                <div class="tab-pane fade show" id="pills-1c" role="tabpanel"
                                    aria-labelledby="pills-1c-tab" tabindex="0">


                                    <?php if($result):?>
                                    <?php $tdLen=array();?>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="h6 text-gray-300 text-center">TARİX</td>
                                                <?php $services1c=$this->reports1c_model->read();?>
                                                <?php if($services1c):?>
                                                <?php foreach($services1c as $s):?>
                                                <?php $tdLen[]=$s['id'];?>
                                                <th class="h6 text-gray-300 text-center">
                                                    <?=$s['title'];?>
                                                </th>
                                                <?php endforeach;?>
                                                <?php endif;?>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php $r=$result;?>
                                            <?php $reports_logs=$this->reports1c_model->read_logs($r['id']);?>
                                            <?php if($reports_logs):?>
                                            <?php foreach($reports_logs as $reports_log):?>
                                            <tr>
                                                <td>
                                                <?php
                                                    $date = new DateTime($reports_log['date']);
                                                    $year = $date->format('Y'); 
                                                    $month = $date->format('m');
                                                    echo "$year-$month";

                                                ?>
                                                </td>
                                                <?php for($i=0;$i<count($tdLen);$i++):?>
                                                <td class="m-auto ">
                                                    <div class="form-check">
                                                        <input <?=($reports_log!=false and in_array($tdLen[$i],json_decode($reports_log['reports'],true))==true)?'checked':'';?>
                                                        id="<?=$tdLen[$i];?>" data-id="<?=$r['id'];?>" <?=(($r['reports1c']!='null' and $r['reports1c']!='')?(in_array($tdLen[$i],json_decode($r['reports1c'],true))==false?'disabled':''):'disabled');?>
                                                        class="form-check-input rounded-3 reports_check
                                                        <?=(($r['reports1c']!='null' and $r['reports1c']!='')?(in_array($tdLen[$i],json_decode($r['reports1c'],true))==false?'border-gray-200 bg-gray-100':'border-success-600'):'bg-gray-100 border-gray-200');?>
                                                        " type="checkbox">
                                                    </div>
                                                </td>
                                                <?php endfor;?>
                                            </tr>
                                            <?php endforeach;?>
                                            <?php endif;?>
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
                    </div>


                </div>
            </div>
            <!-- Course Card End -->
        </div>


    </div>
</div>


<?=$this->modal_model->alert("Əməliyyatı təsdiq edirsiz ?","reports/add");?>