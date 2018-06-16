
<form method="post" action="{{ route('ajax') }}" id="ajax-form">
    <div class="form-group">
        <label for="title">Title a Posts</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="This title">
        <span class="text-danger" id="title-error">11</span>
    </div>
    <div class="form-group">
        <label for="content">Content a posts</label>
        <textarea name="content" id="content" class="form-control" placeholder="add content"></textarea>
    </div>
    <button type="submit" id="posts" class="btn btn-primary">Posts</button>
    <span>Username</span>
</form>
<div class="form-group">

</div>
@section('script')
<script type="text/javascript">
    $(function() {
        let $submit = $('#posts');
        let $form = $('#ajax-form');

        let $title = $form.find('input[name="title"]');
        let $content = $form.find('textarea[name="content"]');

        // Add Post
        $submit.on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: '/ajax',
                type:'post',
                data: {
                    'title': $title.val(),
                    'content': $content.val(),
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    //console.log(res.errors.title);
                    //alert(res.errors.content);

                },
                error: function (err) {
                    //console.log(err);

                    //console.log(err.errors.title);
                    //console.log(err);

                    //const errors = err.responseJSON.errors;
                    //const firstItem = Object.values(errors)[0];
                    //console.log(firstItem);
                    //console.log(err); // err is object
                    let flag = err.responseJSON.errors;
                    let flagEnd = Object.values(flag)[0];
                    console.log(flagEnd);
                    $('#title-error').text(flagEnd);



                }


            });

        });

    });
</script>
@stop