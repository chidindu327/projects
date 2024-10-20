$(document).ready(function() {
    // Example AJAX call to like a post
    $('.like-button').click(function() {
        var postId = $(this).data('post-id');
        $.ajax({
            url: 'microservices/content_creation.php',
            method: 'POST',
            data: { post_id: postId, action: 'like' },
            success: function(response) {
                if (response.success) {
                    alert('Post liked!');
                }
            }
        });
    });
});
