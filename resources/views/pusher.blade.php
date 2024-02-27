<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>

<head>
    <title>Pusher Test</title>
</head>

<body>
    <h1>Pusher Test</h1>
    <div id="targetElement">
        {{-- <div class="modal-body">

        </div> --}}
    </div>
    <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.
    </p>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- sử dụng để xuất thông báo --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> --}}
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('6d1034ea2dd1ce215057', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        // channel.bind('my-event', function(data) {
        channel.bind('form-submitted', function(data) {
            //   alert(JSON.stringify(data));
            // var data = "Dữ liệu mới";
            // document.getElementById("targetElement").innerHTML = data.post.author;
            console.log('test', data)
            load();
            //   console.log('hehe', data);
            //         // // $('#commentList').html(data.comment);
            //         // $('#targetElement' + ' .modal-body').html(data.data);
            //         var table = '<table>';
            //         $.each(data.data, function(index, item) {
            //             table += '<tr><td>' + item.title + '</td><td>' + item.author +
            //                 '</td></tr>';
            //         });
            //         table += '</table>';
            //         $('#targetElement').html(table);
            // function load() {
            // console.log('Id hàm nhật ký nhận', diary_id);
            // var clickedDiaryId = diary_id;
            // $.ajax({
            //     url: '{{ route('data') }}',
            //     type: 'GET',
            //     // data: {
            //     //     diary_id: clickedDiaryId
            //     // },
            //     success: function(data) {
            //         // Hiển thị danh sách comment
            //         console.log('hehe', data);
            //         // // $('#commentList').html(data.comment);
            //         // $('#targetElement' + ' .modal-body').html(data.data);
            //         var table = '<table>';
            //         $.each(data.data, function(index, item) {
            //             table += '<tr><td>' + item.title + '</td><td>' + item.author +
            //                 '</td></tr>';
            //         });
            //         table += '</table>';
            //         $('#targetElement').html(table);
            //     },
            //     error: function(error) {
            //         console.log('lỗi', error);
            //     }
            // });
            // }
        });
        load();
        function load() {
            // console.log('Id hàm nhật ký nhận', diary_id);
            // var clickedDiaryId = diary_id;
            $.ajax({
                url: '{{ route('data') }}',
                type: 'GET',
                // data: {
                //     diary_id: clickedDiaryId
                // },
                success: function(data) {
                    // Hiển thị danh sách comment
                    console.log('hehe', data);
                    // // $('#commentList').html(data.comment);
                    // $('#targetElement' + ' .modal-body').html(data.data);
                    var table = '<table>';
                    $.each(data.data, function(index, item) {
                        table += '<tr><td>' + item.title + '</td><td>' + item.author +
                            '</td></tr>';
                    });
                    table += '</table>';
                    $('#targetElement').html(table);
                },
                error: function(error) {
                    console.log('lỗi', error);
                }
            });
        }
    </script>

</body>

</html>

{{-- sử dụng toastr  --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>
     Pusher.logToConsole = true;
    var pusher = new Pusher('6d1034ea2dd1ce215057', {
      cluster: 'ap1'
    });
    var channel = pusher.subscribe('my-channel');
    channel.bind('form-submitted', function(data) {
      if (data && data.post && data.post.author && data.post.title) {
        toastr.success('New Post Created', 'Author: ' + data.post.author + '<br>Title: ' + data.post.title, {
          timeOut: 0,
          extendedTimeOut: 0,
        });
      } else {
        console.error('Invalid data structure received:', data);
      }
    });
  </script> --}}
<!-- your-view.blade.php -->


