const commentForm = document.getElementById('comment-form');
commentForm.addEventListener('submit', addCommentFormValidate);

function addCommentFormValidate(event) {
    let comment = document.getElementById('add-comment');

    if (comment.value.length < 1) {
        event.preventDefault();
        document.getElementById('add-comment-error').innerHTML = 'Заполните поле';
    }
}    