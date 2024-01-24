$(document).ready(function() {
  var deposit_type = $("input[name='deposit_type']:checked").val();
  if (deposit_type == 1) {
    $(".detail-sale").hide();
    $(".detail-rent").show();
  } else if (deposit_type == 2) {
    $(".detail-rent").hide();
    $(".detail-sale").show();
  } else {
    $(".detail-rent").show();
    $(".detail-sale").show();
  }
  $('textarea').summernote({height: "200px"});
});
$("input[name='deposit_type']").change(function(event) {
  var deposit_type = $("input[name='deposit_type']:checked").val();
  if (deposit_type == 1) {
    $(".detail-sale").hide();
    $(".detail-rent").show();
  } else if (deposit_type == 2) {
    $(".detail-rent").hide();
    $(".detail-sale").show();
  } else {
    $(".detail-rent").show();
    $(".detail-sale").show();
  }
});
$(".body .deposit-input select").select2({
  width: '100%',
  placeholder: 'พิมพ์แล้วเลือกโครงการที่คุณต้องการ',
  minimumInputLength: 2,
  language: {
    inputTooShort: function (a) {
      return "พิมพ์อย่างน้อย "+(a.minimum - a.input.length)+" ตัวอักษร แล้วระบบจะช่วยแนะนำให้";
    }
  }
});
$(".body .deposit-input-detail .detail-input select").select2({ minimumResultsForSearch: -1,width: '100%' });
Dropzone.options.dropzoneForm = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 10, // MB
  dictDefaultMessage: "<h2 style='color:gray'><i class='far fa-images'></i> คลิ๊กเพื่อเลือก หรือลากรูปภาพห้องของคุณมาวางได้เลย</h2>",
  parallelUploads: 1,
  autoProcessQueue: false,
  addRemoveLinks: true,
  acceptedFiles: ".jpeg,.jpg,.png,.gif",
  init: function () {

    var myDropzone = this;

    // Update selector to match your button
    $("#Submit").click(function (e) {

      myDropzone.processQueue();

      var count_file = myDropzone.files.length;

    });

    this.on("success", function() {
      myDropzone.options.autoProcessQueue = true;
    });

    this.on("complete", function (file) {
      if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
        Swal.fire(
          'ดำเนินการสำเร็จ!',
          'Rentcondo BKK จะรีบติดต่อกลับโดยด่วน ขอบพระคุณค่ะ',
          'success'
        );
      }
    });

  }
};
