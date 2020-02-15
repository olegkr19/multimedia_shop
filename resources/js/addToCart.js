$(".add-to-cart").click(function (e) {
    e.preventDefault();

    let ele = $(this);

    //ele.siblings('.btn-loading').show();

    $.ajax({
        url: '{{ url('add-to-cart') }}' + '/' + ele.attr("data-id"),
        method: "get",
        data: {_token: '{{ csrf_token() }}'},
        dataType: "json",
        success: function (response) {
            //ele.siblings('.btn-loading').hide();
            $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
        }
    });
      alert('Added');
});
