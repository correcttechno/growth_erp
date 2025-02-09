<div class="dashboard-body">

    <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><span class="text-main-600 fw-normal text-20">1C Hesabatları</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        <!-- Breadcrumb Right Start -->
        <div class="flex-align gap-8 flex-wrap">
            <div class="position-relative text-gray-500 flex-align gap-4 text-13">
                <span class="text-inherit">Hesabat ayı: </span>
                <div class="flex-align text-gray-500 text-13 border border-gray-100 rounded-4 ps-10 focus-border-main-600 bg-white">
                <span class="text-lg"><i class="ph ph-funnel-simple"></i></span>
                    <form data-stop method="get" action="<?=base_url("reports1c");?>" id="month_form">
                    <input value="<?=(isset($_GET['date'])==true)?$_GET['date']:date("Y-m");?>" type="month" id="select_month" name="date" class="form-control ps-8 pe-20 py-16 border-0 text-inherit rounded-4 text-center"/>
                    </form>
                </div>
            </div>
        </div> 
        <!-- Breadcrumb Right End-->

    </div>


    <div class="card overflow-hidden">
        <div class="card-body p-0 table-responsive">
        <?php if($results):?>
        <?php $tdLen=array();?>
        <table  class="table table-bordered">
            <thead>
                

                <tr>
                    <th colspan="2" rowspan="2" class="h6 text-gray-300">Müştəri</th>
                    <?php $services=$this->reports1c_model->read();?>
                    <?php if($services):?>
                        <?php foreach($services as $s):?>
                            <?php $tdLen[]=$s['id'];?>
                            <th class="h6 text-gray-300 text-center"><?=$s['title'];?></th>
                        <?php endforeach;?>
                    <?php endif;?>
                     
                </tr>

            </thead>
            <tbody>
                <?php foreach($results as $r):?>
                    <?php $reports_log=$this->reports1c_model->read_log($r['id']);?>
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
                                <div class="form-check mb-0">
                                    <input <?=($reports_log!=false and in_array($tdLen[$i],json_decode($reports_log['reports'],true))==true)?'checked':'';?> id="<?=$tdLen[$i];?>" data-id="<?=$r['id'];?>" <?=(($r['reports1c']!='null' and $r['reports1c']!='')?(in_array($tdLen[$i],json_decode($r['reports1c'],true))==false?'disabled':''):'disabled');?> class="form-check-input rounded-3 reports_check
                                    <?=(($r['reports1c']!='null' and $r['reports1c']!='')?(in_array($tdLen[$i],json_decode($r['reports1c'],true))==false?'border-gray-200 bg-gray-100':'border-success-600'):'bg-gray-100 border-gray-200');?>
                                    " type="checkbox">
                                </div>
                                <?php if($reports_log): $key=array_search($tdLen[$i],json_decode($reports_log['reports'],true));?>
                                <?php 
                                $employes=$this->employees_model->read_row($key);
                                if($employes):
                                ?>
                                <span class="text-12 text-success mt-0"><?=$employes['firstname'];?> <?=$employes['lastname'];?></span>
                                <?php endif; endif;?>
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

<?=$this->modal_model->alert("Əməliyyatı təsdiq edirsiz ?","reports1c/add");?>