<script>

    function  getlike(id){
        console.log(id);
        $.ajax({
            type: "POST",
            url: '{{ route('wall.like',   ['id' => $wall->id]) }}',
            data: {
                'id': id,
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                var data = JSON.parse(data);
                if (data.status == "success") {
                    console.log(data.count_likes);
                   $('#count_' +id).text(data.count_likes);
                }
            }
        });
    }
</script>
