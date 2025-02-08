<?php if($results):?>
            <table class="dataTable table table-striped">
                <thead>
                    <tr>
                        <th class="fixed-width">
                            <div class="form-check">
                                <input class="form-check-input border-gray-200 rounded-4" type="checkbox"
                                    id="selectAll">
                            </div>
                        </th>
                        <th class="h6 text-gray-300" title="Tapşırığı yaradan istifadəçi">T.Y İstifadəçi</th>
                        <th class="h6 text-gray-300">Tapşırıq</th>
                        <th class="h6 text-gray-300">Müştəri</th>
                       
                        <th class="h6 text-gray-300">Təhkim edilib</th>
                        <th class="h6 text-gray-300">İcra tarixi</th>

                        <th class="h6 text-gray-300">Əməliyyatlar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($results as $r):?>
                    <tr style='border-top:1px solid var(--gray-100)'>
                        <td class="fixed-width">
                            <div class="form-check">
                                <input class="form-check-input border-gray-200 rounded-4" type="checkbox">
                               <!--  <span class="h6 mb-0 fw-medium text-gray-300">
                                <?=$r['id'];?>
                                </span> -->
                            </div>
                        </td>
                        <td>
                            <span class="text-13 mb-0 fw-medium text-gray-300">
                                <?php $creator=$this->employees_model->read_row($r['creator_id']);
                                if($creator):?>
                                <?=$creator['firstname'];?>
                                <?=$creator['lastname'];?>
                                <?php endif;?>
                            </span>
                        </td>
                        <td>
                            <span class="text-13 mb-0 fw-medium text-gray-300">
                                
                            <?php
                                switch($r['priority']){
                                    case 'hight':
                                        echo '<span class="w-8 h-8 rounded-circle bg-success-600"></span>';
                                        break;
                                    case 'middle':
                                        echo ' <span class="w-8 h-8 rounded-circle bg-main-600"></span>';
                                        break;
                                    case 'low':
                                        echo ' <span class="w-8 h-8 rounded-circle bg-danger-600"></span>';
                                        break;
                                }
                                ?>

                                <?php
                                $data=$this->taskstype_model->read_row($r['tasktype_id']);
                                if($data){
                                    echo $data['title'];
                                }
                                ?>

                                <?php if($r['periodic_day']!='0'):?>
                                    <span title="Tapşırıq hər ayın <?=$r['periodic_day'];?>-i təkrarlanır" class="text-warning-600 px-2">
                                    <i class="ph ph-clock"></i>
                                    </span>
                                <?php endif;?>
                            </span>

                            <?php $files=get_multiple_files($r['file']); 
                            if($files):
                            ?> 
                            <p>
                            <?php foreach($files as $f):?>
                                <a href="<?=get_file($f['file_name']);?>" target="_blank" class="mb-5 text-10 py-2 px-8 bg-success-50 text-success-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                <i class="ph ph-download-simple"></i>
                                 Faylı endir
                                </a>
                            <?php endforeach;?>
                            </p>
                            <?php endif;?>
                        </td>
                        <td>
                            <span class="text-13 mb-0 fw-medium text-gray-300">
                                <?php
                            $data=$this->customers_model->read_row($r['customer_id']);
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
                       
                        <td>
                            <ul class="lesson-list">
                                <?php
                            $trRow=array();
                            $users=json_decode($r['users'],true);
                            foreach($users as $u):
                                $user=$this->employees_model->read_row($u);
                                if($user):
                                    $status=$this->tasks_model->check_user_task_status($r['id'],$user['id']);
                                    if($status){
                                        $trRow[]=array(
                                            'name'      =>$user['firstname'].' '.$user['lastname'],
                                            'note'      =>$status['note'],
                                            'status'    =>$status['status'],
                                            'id'        =>$status['id'],
                                        );
                                    }
                                ?>
                                <li class="lesson-list__item d-flex align-items-start gap-16 ">
                                    <span
                                        class="circle w-20 h-20 flex-center rounded-circle <?=($status!=false?($status['status']=="answered"?"text-success-600":"text-danger-600"):"text-main-100");?> text-15
                                        flex-shrink-0">
                                        <i class="ph-fill ph-check-circle"></i>
                                    </span>
                                    <div>

                                        <a
                                            class="text-13 text-heading d-block text-gray-600 fw-medium hover-text-main-600">
                                            <?=$user['firstname'];?>
                                            <?=$user['lastname'];?>

                                            <?php if($status and $this->user_model->userdata['status']=='admin'):?>
                                            <button data-delete-id="<?=$status['id'];?>" data-o-id="tasks_log"
                                                class="w-20 h-20 bg-danger-50 rounded-circle hover-bg-danger-100 transition-2">
                                                <i class="text-12 ph ph-trash text-danger-900"></i>
                                            </button>
                                            <?php endif;?>

                                            <?php if($status):?>
                                            <span class="text-13 text-heading d-block text-gray-600 fw-medium">
                                                <?=$status['date'];?>
                                            </span>
                                            <?php endif;?>
                                        </a>
                                    </div>
                                </li>
                                <?php endif;endforeach;?>
                            </ul>
                        </td>
                        <td>
                            <span
                                class="mb-5 text-13 py-2 px-8 bg-primary-50 text-primary-600 d-inline-flex align-items-center gap-8 rounded-pill">
                                <?=$r['start'];?> - <?=$r['end'];?>
                            </span>

                        </td>
                      
                        <td style="width:200px">
                            <?php if($this->tasks_model->get_answer_button($r['users'])):?>
                            <button data-answer-id="<?=$r['id'];?>" title="İcra et"
                                class="w-30 h-30 bg-success-50 rounded-circle hover-bg-success-100 transition-2">
                                <i class="ph ph-check text-success-700"></i>
                            </button>
                            <?php endif;?>


                            <?php  if($this->user_model->userdata['status']=='admin' or $r['creator_id']==$this->user_model->userdata['id']):?>
                            <button data-delete-id="<?=$r['id'];?>"
                                class="w-30 h-30 py-5 bg-danger-50 rounded-circle hover-bg-danger-100 transition-2">
                                <i class="ph ph-trash text-danger-700"></i>
                            </button>
                            <button data-edit-id="<?=$r['id'];?>"
                                class=" w-30 h-30 py-5 bg-main-50 rounded-circle hover-bg-main-100 transition-2">
                                <i class="ph ph-pencil-simple text-main-700"></i>
                            </button>
                            <?php endif;?>
                        </td>
                    </tr>
                    <?php if(!empty($r['content'])):?>
                    <tr>
                      
                        <td colspan="6">
                            <div class="text-primary">
                                <span class="h6 mb-0 fw-medium text-gray-300">
                                    <?=$r['content'];?>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <?php endif;?>
                    <?php foreach($trRow as $tr):if(!empty($tr['note'])):?>
                    <tr>
                        <td></td>
                        <td>
                            <?php if($tr['status']=='answered'):?>
                            <span
                                class="flex-shrink-0 w-30 h-30 flex-center rounded-circle bg-success-600 text-white text-small"><i
                                    class="ph ph-check"></i></span>
                            <?php else:?>
                            <span
                                class="flex-shrink-0 w-30 h-30 flex-center rounded-circle bg-danger-600 text-white text-small"><i
                                    class="ph ph-x"></i></span>
                            <?php endif;?>
                        </td>
                        <td colspan="2">
                            <span class="h6 mb-0 fw-medium text-gray-300">
                                <?=$tr['name'];?>
                            </span>
                        </td>
                        <td colspan="6">
                            <span class="h6 mb-0 fw-medium text-gray-300" style="max-width:700px">
                                <?=nl2br($tr['note']);?>
                            </span>
                        </td>

                    </tr>
                    
                    <?php endif;endforeach;?>

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