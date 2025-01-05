<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><span class="text-main-600 fw-normal text-20">Hesabatlar</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <!-- <div class="flex-align gap-8 flex-wrap">
            <button type="button" class="btn btn-main text-sm btn-sm px-24 rounded-pill" data-bs-toggle="modal"
                data-bs-target="#addModal">
                <i class="ph ph-plus me-4"></i>
                Əlavə et
            </button>
        </div> -->
        <!-- Breadcrumb Right End -->

    </div>


    <div class="card overflow-hidden">
        <div class="card-body p-0">
        <?php if($results):?>
        <?php $tdLen=array();?>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" rowspan="2" class="h6 text-gray-300">Müştəri</th>
                    <?php if($departments):?>
                        <?php foreach($departments as $d):?>
                            <?php $services=$this->reports_model->read($d['id']);?>
                            <?php if($services):?>
                                <th colspan="<?=count($services);?>" class="h6 text-gray-300 text-center"><?=$d['title'];?></th>
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
                                    <th class="h6 text-gray-300 text-center"><?=$s['title'];?></th>
                                <?php endforeach;?>
                            <?php endif;?>
                        <?php endforeach;?>
                    <?php endif;?>
                </tr>

            </thead>
            <tbody>
                <?php foreach($results as $r):?>
                    <?php $reports_log=$this->reports_model->read_log($r['id']);?>
                    <tr>
                        <td>
                            <a href="<?=base_url("customers/view_details/".$r['id']);?>" title="Tarixçə" class="bg-warning-50 text-danger-600 w-30 h-30 px-8 py-5 rounded-pill hover-bg-warning-600 hover-text-white">
                                <i class="ph ph-clock-counter-clockwise"></i>
                            </a>
                        </td>
                        <td>
                            <span class="text-13 mb-0 fw-medium text-gray-300">
                                <?php
                            $data=$r;
                            if($data){
                                if(!empty($data['company'])){
                                    echo $data['company'];
                                }
                                else{
                                    echo $data['firstname'];
                                    echo " ";
                                    echo $data['lastname'];
                                }
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

                        <?php for($i=0;$i<count($tdLen);$i++):?>
                            
                            <td class="m-auto ">
                                <div class="form-check">
                                    <input <?=($reports_log!=false and in_array($tdLen[$i],json_decode($reports_log['reports'],true))==true)?'checked':'';?> id="<?=$tdLen[$i];?>" data-id="<?=$r['id'];?>" <?=(($r['reports']!='null' and $r['reports']!='')?(in_array($tdLen[$i],json_decode($r['reports'],true))==false?'disabled':''):'disabled');?> class="form-check-input rounded-3 reports_check
                                    <?=(($r['reports']!='null' and $r['reports']!='')?(in_array($tdLen[$i],json_decode($r['reports'],true))==false?'border-gray-200 bg-gray-100':'border-success-600'):'bg-gray-100 border-gray-200');?>
                                    " type="checkbox">
                                </div>
                            </td>
                        <?php endfor;?>
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

<?=$this->modal_model->alert("Əməliyyatı təsdiq edirsiz ?","reports/add");?>