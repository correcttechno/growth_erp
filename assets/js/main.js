(function ($) {
  "use strict";

  // ==========================================
  //      Start Document Ready function
  // ==========================================
  $(document).ready(function () {


    // =========================== Dropdown menu Js Start =======================
    $('.dropdown-menu').on('click', function (event) {
      event.stopPropagation();
    });

    // Remove Dropdown Menu
    $('.close-dropdown').on('click', function () {
      $('.dropdown-menu').removeClass('show');
      $('.dropdown-btn').removeClass('show');
      $('.dropdown-btn').setAttribute('aria-expanded', 'false')
    });
    // =========================== Dropdown menu Js End =======================


    // =========================== Submenu Open & Close Js Start =======================
    $('.has-dropdown').on('click', function () {
      $('.has-dropdown').removeClass('activePage');
      $('.has-dropdown').not($(this)).find('.sidebar-submenu').slideUp(400);

      $(this).find('.sidebar-submenu').slideToggle(400);
      $(this).toggleClass('activePage');
    });

    // $('.sidebar-menu__item.activePage').find('.sidebar-submenu').slideDown(400);
    // =========================== Submenu Open & Close Js End =======================


    // ========================== add active class to ul>li top Active current page Js Start =====================
    function dynamicActiveMenuClass(selector) {
      let FileName = window.location.pathname.split("/").reverse()[0];

      selector.find("li").each(function () {
        let anchor = $(this).find("a");
        if ($(anchor).attr("href") == FileName) {
          $(this).addClass("activePage");
        }
      });
      // if any li has activePage element add class
      selector.children("li").each(function () {
        if ($(this).find(".activePage").length) {
          $(this).addClass("activePage");
        }
      });
      // if no file name return
      if ("" == FileName) {
        selector.find("li").eq(0).addClass("activePage");
      }
    }
    if ($('ul').length) {
      dynamicActiveMenuClass($('ul'));
    }
    // ========================== add active class to ul>li top Active current page Js End =====================


    //  =========================== Submenu Open & Active Dropdown menu while page active ========================
    if ($('.sidebar-menu__item').hasClass('activePage')) {
      $('.sidebar-menu__item.activePage').find('.sidebar-submenu').slideDown(400);
    }
    //  =========================== Submenu Open & Active Dropdown menu while page active End ========================


    //  =========================== Sidebar Open & Close Start ===============================
    $('.toggle-btn').on('click', function () {
      $('.sidebar').addClass('active')
      $('.side-overlay').addClass('show')
    });

    $('.side-overlay, .sidebar-close-btn').on('click', function () {
      $('.side-overlay').removeClass('show')
      $('.sidebar').removeClass('active')
    });
    //  =========================== Sidebar Open & Close End ===============================


    // =========================== Tooltip Js Start ===============================
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    // =========================== Tooltip Js End ===============================

    // ============================= Image Upload Js Start ==============================
    $(function () {
      $("#fileUpload").fileUpload();
    });
    // ============================= Image Upload Js End ==============================


    // ============================= Image Upload Js Start ==============================
    $('.text-counter').on('input', function () {
      const characterCount = $(this).val().length;
      console.log(characterCount);
      $('#current').text(characterCount);
    });
    // ============================= Image Upload Js End ==============================


    // ============================= Course Details Accordion Js Start ==============================
    $('.course-item__button').on('click', function () {

      $('.course-item__button').not($(this)).removeClass('active');
      $('.course-item__button').not($(this)).closest('.course-item').find('.course-item-dropdown').slideUp();

      $(this).toggleClass('active');
      $(this).closest('.course-item').find('.course-item-dropdown').slideToggle();
    });

    $('.course-list__item.active .circle i').removeClass('ph ph-circle');
    $('.course-list__item.active .circle i').addClass('ph-fill ph-check-circle text-main-600');

    // ============================= Course Details Accordion Js End ==============================


    // ================== Password Show Hide Js Start ==========
    $(".toggle-password").on('click', function () {
      $(this).toggleClass("active");
      var input = $($(this).attr("id"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    // ========================= Password Show Hide Js End ===========================

    // ========================= Billing Radio Checked Js Start ===========================
    $('.form-check-input.payment-method-one').on('change', function () {
      $('.payment-method.payment-method-one').removeClass('active');
      $(this).closest('.payment-method.payment-method-one').addClass('active');
    });

    $('.form-check-input.payment-method-two').on('change', function () {
      $('.payment-method.payment-method-two').removeClass('active');
      $(this).closest('.payment-method.payment-method-two').addClass('active');
    });
    // ========================= Billing Radio Checked Js End ===========================


    // ========================= List Grid View Js Start ===========================
    $('.list-grid-view li.activePage').each(function () {
      var icon = $(this).find('a i');
      if (icon.hasClass('ph-rows')) {
        icon.removeClass('ph-rows').addClass('ph-fill ph-rows');
      } else if (icon.hasClass('ph-squares-four')) {
        icon.removeClass('ph-squares-four').addClass('ph-fill ph-squares-four');
      }
    });

    $('.list-view-btn').on('click', function () {
      $(this).addClass('active');
      $('.grid-view-btn').removeClass('active');
      $('.list-view').removeClass('d-none');
      $('.grid-view').addClass('d-none');
    });

    $('.grid-view-btn').on('click', function () {
      $(this).addClass('active');
      $('.list-view-btn').removeClass('active');
      $('.grid-view').removeClass('d-none');
      $('.list-view').addClass('d-none');
    });
    // ========================= List Grid View Js End ===========================


    // ========================= Toggle Search Box Js Start ===========================
    $('.toggle-search-btn').on('click', function () {
      $(this).toggleClass('bg-main-600 border-main-600 text-white');
      $('.toggle-search-box').slideToggle();
    });
    // ========================= Toggle Search Box Js End ===========================

  });
  // ==========================================
  //      End Document Ready function
  // ==========================================

  // ========================= Preloader Js Start =====================
  $(window).on("load", function () {
    $('.preloader').fadeOut();
  })
  // ========================= Preloader Js End=====================

  // ========================= Header Sticky Js Start ==============
  $(window).on('scroll', function () {
    if ($(window).scrollTop() >= 260) {
      $('.header').addClass('fixed-header');
    }
    else {
      $('.header').removeClass('fixed-header');
    }
  });
  // ========================= Header Sticky Js End===================

  var selectPicker = $('.selectpicker').selectpicker({


    countSelectedText: '{0} öğe seçildi',
    dropupAuto: false,

    liveSearch: true,
    liveSearchPlaceholder: 'Axtar...',

    selectedTextFormat: 'count > 3',
    showSubtext: true,
    size: 7,
    style: 'btn-primary',
    tickIcon: 'ph ph-check-fat',
    width: '100%'

  });
  function write_form_element(object, item, value) {

    if (object.find('[name=' + item + ']:not([type=file])').length > 0) {

      if (object.find('[name=' + item + '].word').length > 0) {
        object.find('[name=' + item + '].word').froalaEditor('html.set', value);
      }

      if (object.find('[name=' + item + '].word_2').length > 0) {
        object.find('[name=' + item + '].word_2').froalaEditor('html.set', value);
      }

      ////
      if (object.find('[name=' + item + ']').attr('type') != undefined) {
        if (object.find('[name=' + item + ']').attr('type') == 'checkbox' || object.find('[name=' + item + ']').attr('type') == 'radio') {
          if (value == 'false' || value == false) {
            object.find('[name=' + item + ']').prop('checked', false);
          }
          else {
            object.find('[name=' + item + ']').prop('checked', true);
          }

        } else {
          object.find('[name=' + item + ']').val(value);
        }
      } else {
        object.find('[name=' + item + ']').val(value);
      }



    } else {
      if (item == 'image') {
        if (object.find('img.form-image').length > 0) {
          object.find('img.form-image').attr('src', value);
        } else {
          object.find('.form-image').html(value);
        }
      }

      //custom json for users
      else if (item == "users") {
        var dat = JSON.parse(value);
        $('#users').find("option").removeAttr("selected");
        for (var i = 0; i < dat.length; i++) {
          $('#users').find("option[value=" + dat[i] + "]").attr("selected", true);
        }
        selectPicker.selectpicker("refresh");
      }
      //custom json for customers periodic tasks
      else if (item == "reports") {
        var dat = JSON.parse(value);
        for (var i = 0; i < dat.length; i++) {
          $('#service'+dat[i]).prop("checked", true);
        }
      }

      else if (item == "reports1c") {
        var dat = JSON.parse(value);
        for (var i = 0; i < dat.length; i++) {
          $('#service1c'+dat[i]).prop("checked", true);
        }
      }
    
    }


    if(item=='periodic_day'){
      if(value!='0'){
        $('#periodic').prop('checked',true);
        $('#peridocicalert').removeClass('d-none');
      }
      else{
        $('#periodic').prop('checked',false);
        $('#peridocicalert').addClass('d-none');
      }
    }



  }

  var base_url = $('#base_url').val().replace("growth_erp/","");
  $('form:not([data-stop])').ajaxForm({
    beforeSend: function () {
      $('form').addClass('loading');
    },
    uploadProgress: function (h, o, t, faiz) {

    },
    complete: function (x) {
      $('form').removeClass('loading');
      var result = x.responseText;
      var json = JSON.parse(result);
      $.each(json, function (i, item) {
        $('[data-error=' + i + ']').html(item);
      });

      if (json.status != undefined && json.status == true) {
        $('form input,form select').val('');
        location.reload();
      }
    }
  });

  $('#addModal').on('hidden.bs.modal', function () {
    $('#addModal').find('input[name=id]').val(0);
    $('#addModal').find('input,select,textarea').val('');
  });

  $(document).on('click', '[data-delete-id]', function () {
    $('#deleteModal').find('input[name=delete_id]').val($(this).attr('data-delete-id'));
    if ($(this).attr('data-o-id') != undefined) {
      $('#deleteModal').find('input[name=o_id]').val($(this).attr('data-o-id'));
    }
    else {
      $('#deleteModal').find('input[name=o_id]').val(0);
    }
    $('#deleteModal').modal('show');
  })

  $('button[type=reset]').click(function () {
    $('.modal').modal('hide');
  })

  function read_row_data(id) {
    // Mevcut URL'yi alın
    let url = new URL(base_url);

    // URL'den sorgu parametrelerini al
    let params = url.searchParams;

    // 'f' parametresini kaldır
    params.delete("f");

    // Güncellenmiş URL'yi alın
    url.search = params.toString();

    $.ajax({
      url: url.toString() + '/read_row',
      dataType: "json",
      data: { 'id': id },
      method: 'post',
      success: function (e) {
        $.each(e, function (item, value) {

          write_form_element($('#addModal,#answerModal'), item, value);

        })
      },
    });
  }

  $(document).on('click', '[data-edit-id]', function () {
    $('#addModal').modal('show');
    read_row_data($(this).attr('data-edit-id'));
  })

  $(document).on('click', '[data-answer-id]', function () {
    $('#answerModal').find('textarea').val();
    $('#answerModal').modal('show');
    read_row_data($(this).attr('data-answer-id'));
  })



  $('#notanswer').click(function () {
    $('input[name=status]').val("notanswer");
    //return false;
  })

  $('#answer').click(function () {
    $('input[name=status]').val("answered");
    //return false;
  })

  $('#task_filter').change(function () {
    window.location.href = $(this).val();
  })

  $('#noftButton').click(function () {
    $.post(base_url + "/readallnoft", {}, function (e) {
      $('#alarm').remove();
    });
  })

  $('.reports_check').click(function(){
    var task_id=$(this).attr('id');
    var customer_id=$(this).attr('data-id');
    $('#alertModal').modal("show").find('input[name=a_id]').val(task_id);
    $('#alertModal').modal("show").find('input[name=b_id]').val(customer_id);
  //  return false;
  });

  $('#select_month').change(function(){
    $('#month_form').submit();
  })

  $('#periodic').change(function(){
    $('#peridocicalert').toggleClass('d-none');
  })

  $('#docfiles').change(function(){
    $('#docfilesform').submit();
  })

})(jQuery);
