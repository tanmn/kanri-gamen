$(function(){


    //Enable fancybox
    if($.fn.fancybox){
        $('.fancybox').fancybox({
            live: true,
            helper: {
                title: {
                    type: 'inline'
                }
            },
            openEffect: 'elastic',
            closeEffect: 'elastic',
            tpl: {error: '<p class="text-error">Cannot retrieve data. Please try again later.</p>'}
        });
    }

    //Enable lazyload
    if($.fn.lazyload){
        $('img.lazy').lazyload({
            'effect': 'fadeIn'
        });
    }


    /*========== Photos ==========*/
   if($('#photo-management').length){
       var btn_delete = $('#btn_delete_photos');

       toggleDeleteButton();

       btn_delete.click(function(){
           var checked = hasChecked();

           if(!checked){
               alert('No photo selected!');
               return false;
           }

           var confirmed = window.confirm('Do you want to delete selected photo(s)?');

           if(!confirmed) return false;
       });

       $('input.delete_chk').bind('change', function(e){
            var self = $(this);
            var parent = self.closest('li');
            var is_check = self.prop('checked');

            if(is_check){
                parent.addClass('inactive');
            }else{
                parent.removeClass('inactive');
            }

            toggleDeleteButton();
       });

       $('.toggle_chk').click(function(){
            var self = $(this);
            var is_check = self.prop('checked');
            var parent = self.closest('form');
            var all_checkboxes = parent.find('input[type="checkbox"]');
            var all_unchecked_checkboxes = all_checkboxes.not(':checked, .toggle_chk');

            if(all_unchecked_checkboxes.length > 0){
                all_checkboxes.prop('checked', true).trigger('change');
                self.prop('checked', true);
                return;
            }else{
                all_checkboxes.prop('checked', false).trigger('change');
                self.prop('checked', false);
            }
        });

        function toggleDeleteButton(){
            var checked = hasChecked();

            if(checked){
                btn_delete.prop('disabled', false);
            }else{
                btn_delete.prop('disabled', true);
            }
        }

        function hasChecked(){
            return $('input.delete_chk:checked').length > 0;
        }
   }


   /*========== Import CSV ==========*/
  if($('#import-csv').length){
      var btn_upload = $('#btn_upload');
      var file_inp = $('#file');

      btn_upload.click(function(e){
          var file_path = $.trim(file_inp.val());

          if(!file_path){
              alert('Please choose a file to upload.');
              file_inp.click();
              return false;
          }

          btn_upload.button('loading');
      });
  }

  if($('#import-process').length && window.HASH){
      var label = $('#progress_text');
      var bar = $('#progress_bar');

      done = false;

      updateBar(0);
      startProcess();

      function updateBar(percent){
          percent = Math.round(percent * 100) / 100;

          label.text(percent + '%');
          bar.css('width',percent +  '%')
      }

      function startProcess(){
          $.ajax({
              'timeout': 0,
              'url': BASE + 'Photos/process/' + window.HASH,
              'async': true,
              'dataType': 'json',
              'success': function(data){
                    bar.addClass('bar-success');
              },
              'complete': function(){
                  done = true;
                  updateBar(100);
              },
              'error': function(){
                   bar.addClass('bar-danger');
              }
          });

          getInfo();
      }

      function getInfo(){
          $.ajax({
              'timeout': 5000,
              'url': BASE + 'Photos/processInfo/' + window.HASH,
              'async': true,
              'dataType': 'json',
              'success': function(data){
                   if(data && 'percent' in data){
                       updateBar(data.percent || 0);

                       if(data.complete > 0){
                           label.append(', ' + data.complete + ' done')
                       }

                       if(data.error > 0){
                           label.append(', <span class="text-error">' + data.error + ' errors</span>.')
                       }
                   }
              },
              'complete': function(){
                  if(!done){
                      setTimeout(getInfo, 1000);
                  }
              }
          })
      }
  }

})
