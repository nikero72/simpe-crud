const addItemForm = document.getElementById('add-item-form');
addItemForm.addEventListener('submit', addItemFormValidate);

function addItemFormValidate(event) {
    let title = document.getElementById('title-add-item-form');
    let description = document.getElementById('description-add-item-form');
    let price = document.getElementById('price-add-item-form');

    let valid = true;

    if (title.value.length < 4 || title.value.length > 20) {
        valid = false;
        document.getElementById('add-form-title-error').innerHTML = 'Название товара должно содержать не менее 4 и не более 20 символов';
    }

    if (description.value.length < 4 || description.value.length > 60) {
        valid = false;
        document.getElementById('add-form-description-error').innerHTML = 'Описание товара должно содержать не менее 4 и не более 60 символов';
    }

    if (!price.value) {
        valid = false;
        document.getElementById('add-form-price-error').innerHTML = 'Укажите цену товара';
    }


    if (!valid) {
        event.preventDefault();
    }
}    
