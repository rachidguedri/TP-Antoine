(function () {
    $(document).ready(function (e) {

        $("#search").on('keyup', function () {

            var input = $(this);
            var url = input.data('url');

            var token = input.next().val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': token
                }
            });

            if (input.val().length > 0) {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: input.serialize(),
                    dataType: 'json',
                    beforeSend: function () {
                        $("#results").empty();
                    },
                    success: function (data) {

                        if (data.posts.length > 1)
                            $("#table").hide();

                        var html = '';
                        for (var i = 0; i < data.posts.length; i++) {


                        }
                        $("#results").html(html);
                    }
                });
            }

        });

        $('.action').each(function () {
            $(this).prop('checked', false);
        });
        $('input[name=selected]').on('click', function () {

            if (this.checked) {
                $('.action').each(function () {
                    $(this).prop('checked', true);
                });
            } else {
                $('.action').each(function () {
                    $(this).prop('checked', false);
                });
            }
        });
        $('#form-dashboard').submit(function () {
            if ($('select[name=action]').val() == 'delete') {
                var result = confirm("Confirm to delete post");
                return result;
            }

            return true;

        });

        e.preventDefault();
    });
})();



